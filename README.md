<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://infynno.com/images/blog/18/laravel-jetstream.jpg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Notes From Patrick

- Using Sail for Docker setup. Please note if you are on windows you will need WSL or Git Bash or Cygwin or finally a Linux / Unix based VM.

- Jetstream Auth currently has base API routes protected, generate access token with Sanctum and attach it as a bearer token to api requests. I will create a React app in the near future that will already have this included. 

- To use factory with faker data run:
composer dump-autoload
php artisan tinker
Post::factory()->count(5)->create() // 5 = number of records you want to create

- To use DB seeder run:
composer dump-autoload
php artisan db:seed OR php artisan db:seed --class=PostSeeder // For a speicifc class only

- More coming in the near future
