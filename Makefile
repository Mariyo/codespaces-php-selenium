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
	docker compose -f infra/docker-compose.yml exec webserver ./vendor/bin/phpunit tests

# Run Docker Compose
compose:
	docker compose -f infra/docker-compose.yml up -d --remove-orphans --wait --build

# Stop Docker Compose
stop:
	docker compose -f infra/docker-compose.yml down

inspect-webserver:
	docker compose -f infra/docker-compose.yml exec webserver bash