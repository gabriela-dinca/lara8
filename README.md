# Startup
```bash
$ curl -s https://laravel.build/lara8 | bash
$ ./vendor/bin/sail up
$ ./vendor/bin/sail artisan migrate:fresh (--seed)
$ ./vendor/bin/sail artisan db:seed

```

# Commands
```bash
# Running Artisan commands within Laravel Sail...
$ ./vendor/bin/sail composer require 
$ ./vendor/bin/sail artisan vendor:publish
$ ./vendor/bin/sail artisan tinker 
$ App\Models\Post::factory(50)->create();
```
