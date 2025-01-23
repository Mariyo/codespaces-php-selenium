# Install composer dependencies
install:
	docker run --rm -v $(shell pwd):/app composer update

# Add dependency
add:
	docker run --rm -v $(shell pwd):/app composer require $(dev) $(package)

# Start application
start:
	php -d display_errors=1 -S localhost:8000 -dxdebug.mode=develop,debug -dxdebug.discover_client_host=1 -t public

# Run PHPUnit tests
test:
	vendor/bin/phpunit tests
