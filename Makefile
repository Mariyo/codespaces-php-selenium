# Install composer dependencies
install:
	docker run --rm -v $(shell pwd):/app composer update

# Start application
start:
	php -d display_errors=1 -S localhost:8000 -t public

# Run PHPUnit tests
test:
	docker run --rm -v $(shell pwd):/app -w /app php:8.2-cli vendor/bin/phpunit tests
