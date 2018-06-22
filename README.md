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


- Step 1. Installation of API Platform and the EasyAdminBundle
```bash
composer req api admin security         # Install the api-pack and easyadmin-bundle
composer req maker test profiler orm-fixtures --dev # Install various development packages for developing, debugging and testing.
```
- Step 2. Creation of entities
```bash
./bin/console make:entity

```
- Step 3. Making of demo content with DataFixtures
```bash
./bin/console make:fixtures
./bin/console doctrine:fixtures:load -n
```
- Step 4. Authentication with HTTP passwords
- Step 5. Authentication with an API token
- Step 6. Creation of custom API endpoints
- Step 7. Functional smoke tests including security
