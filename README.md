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

## Debugging in Codespaces

Open Run and Debug side bar, select `Listen for XDebug` and start debugging.

To see the browser in Codespaces via VNC, open: https://CODESPACE-HOST-ON-PORT-7900.app.github.dev?autoconnect=1&resize=scale&password=secret

## Run tests

Run the following command to run the tests:

```bash
make test
```
