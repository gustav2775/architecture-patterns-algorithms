# architecture-patterns-algorithms

1. docker build -t php-app .
2. docker run -it --rm --name my-running-app php-app
3. docker run -it --rm --name my-running-script -v "$PWD":/usr/src/myapp -w /usr/src/myapp php:7.4-cli php index.php