run:
	@docker-compose up -d

key.generate:
	@docker-compose exec app php artisan key:generate

db.bash:
	@docker-compose exec db bash

composer:
	@docker run composer composer install