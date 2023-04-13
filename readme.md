### INSTALLAZIONE

```
cp .env.example .env
```

aprire il file .env e configurare  SLACK_WEBHOOK con il webhook di slack in cui verrano notificate le nuove candidature
```
SLACK_WEBHOOK=

Lanciare il webserver con sail (prerequisito avere docker installato)
```
sail up -d
sail shell
```

Prima configurazione
```
composer install
php artisan key:generate
php artisan migrate
npm run prod


SITO WEB
```
accedere a http://localhost
```

DASHBOARD MAILPIT 
```
http://localhost:8025
```