# laravel-query-scopes-example

This is the companion source code to my website article, [2 Ways to Code Laravel Query Scopes, Part I](https://stories.unrivaledceations.com/blog/post/2-ways-to-code-laravel-query-scopes-part-1).  This article explains how to use _local query scopes_.  Part II of the article series will demonstrate how to use _global query scopes_.

## Installation and Usage
(1.) Install Laravel and create a scratch project to experiment with.  (I&rsquo;ve created a [5-minute Laravel Setup guide](https://stories.unrivaledcreations.com/blog/post/5-minute-guide-to-setting-up-laravel-mac) for Apple Mac users that might be helpful if you&rsquo;ve never done it before or don&rsquo;t already have Laravel ready to go on your system.)
```
laravel new donut
```
(2.) Clone the Github repository:<br>
```
git clone https://github.com/unrivaledcreations/laravel-query-scopes-example.git
```
(3.) Copy the relevant repository files into their proper locations for your new Laravel app:<br>
```
cp -r laravel-query-scopes-example/app/* donut/app
cp -r laravel-query-scopes-example/database/* donut/database
```
(4.) Initialize the database tables:<br>
```
cd donut
composer update
composer dump-autoload
php artisan migrate --seed
```

(5.) Use `php artisan tinker` to play with the query scopes (using the example from this article):<br>
```
php artisan tinker
>>> $donuts = new App\Donut;
=> App\Donut {#683}
>>> $onSaleDonuts = $donuts->excludeFresh()->excludeStale()->get();
=> Illuminate\Database\Eloquent\Collection {#689...results are shown...}
>>>
```
_You may optionally implement routes and views to take your exploration to a more practical level, but `tinker` is very nice for learning._

## Additional Information
For more information about this Laravel local query scopes example, visit the Unrivaled Creations website at [https://stories.unrivaledceations.com/blog/post/2-ways-to-code-laravel-query-scopes-part-1](https://stories.unrivaledceations.com/blog/post/2-ways-to-code-laravel-query-scopes-part-1).