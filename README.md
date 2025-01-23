# Project setup

1. Run the following command to install the dependencies:

    ```bash
    docker run --rm -v $(pwd):/app composer update
    ```

2. To start a PHP built-in server, run:

    ```bash
    php -S localhost:8000 -t public
    ```

3. Open your browser and navigate to `http://localhost:8000` to see your application in action.

