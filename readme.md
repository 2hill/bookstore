# Bookstore tutorial

## SQL preparation

- create a "bookstore" DB
- import the data available in the sql directory
- create a "bookstore" user that has the privileges to read/write on the "bookstore" DB
- you may change its credentials in web/config/db.php

## Start PHP server

```
$ cd web
$ php -S localhost:8080 router.php
```

## Needed improvements

- obfuscate authors ID (use a slud or a random hex ID)
- try/catch PDO errors
