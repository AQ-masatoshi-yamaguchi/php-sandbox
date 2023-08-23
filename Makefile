install:
	docker-compose up --build -d
	docker-compose run --rm php composer install