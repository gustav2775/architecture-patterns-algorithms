# architecture-patterns-algorithms
1. docker build -t app .
2. docker run -it --rm --name my-running-app app
3. docker run -it --rm --name my-running-script -v "$PWD":/usr/src/myapp -w /usr/src/myapp php:7.4-cli php index.php