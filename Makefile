clean:
	rm ApiModels/*
	rm config.yaml

models:
	php generate.php

test:
	vendor/bin/phpunit
