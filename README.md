# Benchmark Test Project

This is a part of test project https://github.com/serdargulum/TestService

## Populate Database

```bash
php artisan migrate   

php artisan db:seed
```
## Deploy

- Change mysql connection data in `.env` file
- Run service : http://127.0.0.1:8000

```bash
php artisan serve
```