PHP Meetup
-------

This project regroup the code explained during a PHP Meetup
which took place the 27th November 2018 in NiorTech, Niort.

# Content of this project

- Entities & Doctrine ORM
- API Platform with YAML configuration
- Serialization
- Validation
- Custom action for API Platform

# Start the project

### Variables
Create a `.env` file and replace values by your own
```bash
cp .env.dist .env
```

### Dependencies
Download dependencies by using Composer.
```bash
composer install
```

### Start the server
Use the Symfony command to start your server (you can also use a Docker stack)
```bash
bin/console server:run
```


