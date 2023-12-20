# Docker-lamp

A basic LAMP environment for PHP developers.

## Instructions

- If you haven't installed it yet, get Docker Desktop from here: 
[https://www.docker.com/products/docker-desktop/](url)


- Open Docker Desktop

- Open Terminal in the root folder and run

`docker-compose up`

- Browse to [localhost:8000](url)

- If you read "Connected to MySQL server successfully!" your Docker container is working and you can start developing your project without further server configuration ;)

## Notes

This container runs with PHP 8.0.0 and the latest stable version of MySql.
If you need to change the versions of PHP and/or Mysql:

- Edit docker-composer.yml specifing the versions that you want (check on [https://hub.docker.com/](url) first)

- In the root of the project, run 

`docker-compose up --build`

- Edit Dockerfile similarly