# Startup
```bash
$ curl -s https://laravel.build/lara8 | bash
$ ./vendor/bin/sail up
$ ./vendor/bin/sail artisan migrate:fresh
$ ./vendor/bin/sail artisan tinker 
$ App\Models\Post::factory(50)->create();

```

# Tailwind UI 
https://github.com/laracasts/Laravel-From-Scratch-HTML-CSS

# Commands
```bash
# Running Artisan commands locally...
$ ./vendor/bin/sail composer require ...

# Running Artisan commands within Laravel Sail...
$ ./vendor/bin/sail artisan queue:work
```
