# Docker Setup for Laravel + Vue.js

## Backend

1. Configure the `.env` file.

2. Run migrations:

    ```
    php artisan migrate
    ```

3. Seed the database (if needed):

    ```
    php artisan db:seed
    ```

4. Generate an application key:

    ```
    php artisan key:generate
    ```

5. Start the Laravel development server:

    ```
    php artisan serve
    ```

## Frontend

1. Install dependencies:

    ```
    npm install
    ```

2. Compile and watch for changes during development:

    ```
    npm run watch
    ```

3. Start the development server:

    ```
    npm run serve
    ```

Make sure to run the backend and frontend commands in separate terminal windows or tabs.

## Docker Compose Configuration

The provided `docker-compose.yml` file contains the configuration for setting up the Docker environment. It defines three services: `app`, `db`, and `nginx`. Please refer to the [docker-compose.yml](docker-compose.yml) file for details.

## Dockerfile

The provided `Dockerfile` describes the image used for the `app` service. Please refer to the [Dockerfile](Dockerfile) file for details.

## Running the Docker Environment

To run the Docker environment:

1. Ensure that Docker and Docker Compose are installed on your system.

2. In the project root directory, run the following command:

    ```
    docker-compose up
    ```

3. Wait for the containers to build and start.

4. Access the Laravel application at [http://localhost:8080](http://localhost:8080).

5. Make sure to stop the containers when you're done:

    ```
    docker-compose down
    ```

For more information about Docker and Docker Compose, please refer to their respective documentation.

