<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run()
    {
        // Insert real data manually
        Post::create([
            'title' => 'The Beauty of Laravel',
            'content' => 'Laravel is a PHP framework that is elegant, expressive, and provides a rich set of features to build modern applications. It offers built-in tools such as routing, database migrations, and a powerful ORM called Eloquent.',
        ]);

        Post::create([
            'title' => 'Understanding Eloquent ORM',
            'content' => 'Eloquent is Laravel\'s built-in ORM for interacting with databases. It allows you to use PHP syntax to create, read, update, and delete records in your database, making database interactions easier and cleaner.',
        ]);

        Post::create([
            'title' => 'Laravel and API Development',
            'content' => 'Laravel provides an excellent structure to build RESTful APIs. With tools like API resources and routing, it becomes easy to manage and organize endpoints for your applications.',
        ]);

        Post::create([
            'title' => 'Advanced Blade Templating',
            'content' => 'Blade is Laravel\'s powerful templating engine. It allows you to write dynamic HTML content easily and includes features like template inheritance, loops, conditionals, and much more.',
        ]);

        Post::create([
            'title' => 'Authentication in Laravel',
            'content' => 'Laravel provides a robust authentication system right out of the box. With features like login, registration, and password reset, you can easily manage user authentication in your application.',
        ]);

        // Add additional posts
        Post::create([
            'title' => 'Mastering Middleware in Laravel',
            'content' => 'Middleware allows you to filter HTTP requests entering your application. It\'s a powerful tool for implementing authentication, logging, and other request-handling logic.',
        ]);

        Post::create([
            'title' => 'Exploring Laravel Queues',
            'content' => 'Queues allow you to defer processing of time-consuming tasks, improving performance and responsiveness. Laravel provides a simple, unified API for different queue backends.',
        ]);

        Post::create([
            'title' => 'Building Realtime Apps with Laravel Echo',
            'content' => 'Laravel Echo makes it easy to bring real-time functionality to your apps. Whether it\'s chat, notifications, or live updates, Echo simplifies WebSocket integration.',
        ]);

        Post::create([
            'title' => 'Localization in Laravel',
            'content' => 'Laravel makes it simple to manage translations for your application. With built-in support for multiple languages, you can easily create apps for a global audience.',
        ]);

        Post::create([
            'title' => 'Testing in Laravel',
            'content' => 'Laravel provides tools like PHPUnit and built-in testing helpers, enabling you to write robust test suites for your application and ensure reliability.',
        ]);

        Post::create([
            'title' => 'Introduction to Laravel Sail',
            'content' => 'Laravel Sail provides a simple command-line interface for interacting with Docker containers, making it easier to run and develop Laravel projects locally.',
        ]);

        Post::create([
            'title' => 'The Power of Laravel Mix',
            'content' => 'Laravel Mix simplifies the process of defining Webpack build steps for your application, providing an elegant way to manage CSS and JavaScript assets.',
        ]);
        
        // Add more posts if you need additional test data
    }
}