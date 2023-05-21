#!/bin/bash

# Set your GCP project ID
PROJECT_ID="zormanmeniproject"

# Set the desired name for your Docker image
IMAGE_NAME="st-app"

# Set the desired version tag for your Docker image
TAG="v1"

# Set the desired name for your deployment and container
DEPLOYMENT_NAME="your-deployment-name"

# Build the Docker image locally
#docker-compose build

# Authenticate Docker with GCR
gcloud auth configure-docker

# Tag the Docker image with the GCR repository URL
docker tag $IMAGE_NAME gcr.io/$PROJECT_ID/$IMAGE_NAME:$TAG

# Push the Docker image to GCR
docker push gcr.io/$PROJECT_ID/$IMAGE_NAME:$TAG

# Create a deployment configuration file
cat > deployment.yaml << EOF
apiVersion: apps/v1
kind: Deployment
metadata:
  name: $DEPLOYMENT_NAME
spec:
  replicas: 1
  selector:
    matchLabels:
      app: $DEPLOYMENT_NAME
  template:
    metadata:
      labels:
        app: $DEPLOYMENT_NAME
    spec:
      containers:
        - name: $DEPLOYMENT_NAME
          image: gcr.io/$PROJECT_ID/$IMAGE_NAME:$TAG
          ports:
            - containerPort: 8080
EOF

# Apply the deployment configuration to your GKE cluster
kubectl apply -f deployment.yaml

# Expose the deployment as a service
kubectl expose deployment $DEPLOYMENT_NAME --type=LoadBalancer --port=80 --target-port=8080

# Wait for the service to be assigned an external IP
while true; do
  EXTERNAL_IP=$(kubectl get services $DEPLOYMENT_NAME -o=jsonpath='{.status.loadBalancer.ingress[0].ip}')
  if [[ ! -z "$EXTERNAL_IP" ]]; then
    break
  fi
  sleep 5
done

echo "The app is deployed and accessible at: http://$EXTERNAL_IP"
