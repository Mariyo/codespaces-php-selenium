# Project setup

1. Run the following command to install the dependencies:

    ```bash
    make install
    ```

2. To start a PHP built-in server, run:

    ```bash
    make start
    ```

3. Open your browser and navigate to `http://localhost:8000` to see your application in action.

# Run tests

1. Run the following command to run the tests:

    ```bash
    make test
    ```

# Development

Run following command to add composer dependency:

```bash
make add dev=--dev package=testcontainers/testcontainers
```

## Debugging

Open Run and Debug side bar, select `Listen for XDebug` and start debugging.

Open https://friendly-goggles-4q7pp7w6pwc5r9-7900.app.github.dev?autoconnect=1&resize=scale&password=secret to see browser.
