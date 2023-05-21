# Setup
### Laravel + Vue.js

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

## Admin Credentials

- Email: admin@example.com
- Password: password


## Frontend

1. Install dependencies:

    ```
    npm install
    ```

2. Compile and watch for changes during development:

    ```
    npm run watch
    ```

3. Compile for production:

    ```
    npm run production
    ```


## Routes
-   / <- Client side
- /admin <- Admin side
- /login <- Login page
- /api <- API routes

Make sure to run the backend and frontend commands in separate terminal windows or tabs.

## Docker Compose Configuration

The provided `docker-compose.yml` and `Dockerfile` files contain the necessary configurations for setting up the Docker environment. Please refer to the respective files for details.

## Running the Docker Environment

To run the Docker environment:

1. Ensure that Docker and Docker Compose are installed on your system.

2. In the project root directory, run the following command:

    ```
    docker-compose up
    ```

3. Access the Laravel application at [http://localhost:8080](http://localhost:8080).

4. When you're done, stop the containers by running:

    ```
    docker-compose down
    ```

For more information about Docker and Docker Compose, please refer to their respective documentation.
