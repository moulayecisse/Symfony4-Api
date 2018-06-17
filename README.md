# Symfony 4 API Platform application

Symfony 4 made a deliberate choice to create new features to support microservices. Symfony Flex and Recipes make it easy to create a project that holds the minimal of dependencies.

## Use Docker with Symfony 4

```bash
composer create-project symfony/skeleton Symfony4-Api
composer req api
symfony req server --dev
docker-compose up -d
```

**Why Docker**: Composer manages application dependencies versions installed on your machine, this can give errors when your local development infrastructure stack differs from the production stack (e.g. a different PHP version). 

## Build a Symfony 4 API Platform application from scratch