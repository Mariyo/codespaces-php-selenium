COMPOSE_CMD = docker compose -p codespaces-php-selenium -f infra/docker-compose.yml
WEBSERVER_EXEC = $(COMPOSE_CMD) exec webserver
WEBSERVER_EXEC_DETACH = $(COMPOSE_CMD) exec -d webserver
COMPOSER_CMD = docker run --rm -v $(shell pwd):/app composer

# Start application
start:
	$(COMPOSE_CMD) up -d --remove-orphans --wait
	$(WEBSERVER_EXEC_DETACH) php -S 0.0.0.0:8000 -t public

# Stop application
stop:
	$(COMPOSE_CMD) down

# Run PHPUnit tests
test:
	$(WEBSERVER_EXEC) ./vendor/bin/phpunit tests

inspect-webserver:
	$(WEBSERVER_EXEC) bash

inspect-chrome:
	$(COMPOSE_CMD) exec chrome bash

build-php-image:
	docker build -t mariyo/php:8.2-apache-dev -f infra/apache/Dockerfile .
	docker login docker.io -u mariyo
	docker image push mariyo/php:8.2-apache-dev

# Run Composer with arguments
composer:
	$(COMPOSER_CMD) $(filter-out $@,$(MAKECMDGOALS))

# Prevent make from interpreting arguments as targets
%:
	@:
