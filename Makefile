include .env

start:
	@docker-compose up -d
shell:
	@docker-compose exec php /bin/bash
init:
	cp .env.dist .env
	make start
	@docker-compose exec php composer install
demo:
	make init
	docker-compose exec -T database mysql --user=${DATABASE_USERNAME} --password=${DATABASE_PASSWORD} ${DATABASE_NAME} < sample/sample.sql
	@echo "Visit URL http://localhost:8080"