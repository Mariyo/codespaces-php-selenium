# Project setup

Run the following command to install the dependencies:

```bash
make setup
```

Open your browser and navigate to `http://localhost:8000` to see the application in action.

# Development

To start a PHP built-in server, run:

```bash
make start
```

## Dependencies

Run following command to add composer dependency:

```bash
make composer require --dev testcontainers/testcontainers
```

## Debugging

Open Run and Debug side bar, select `Listen for XDebug` and start debugging.

Open https://friendly-goggles-4q7pp7w6pwc5r9-7900.app.github.dev?autoconnect=1&resize=scale&password=secret to see browser.

## Run tests

Run the following command to run the tests:

```bash
make test
```
