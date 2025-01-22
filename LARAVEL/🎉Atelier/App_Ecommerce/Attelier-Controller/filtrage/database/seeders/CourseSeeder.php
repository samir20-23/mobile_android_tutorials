<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run()
    {
        // Laravel Courses
        Course::create([
            'title' => 'Laravel Basics',
            'description' => 'Learn the basics of Laravel to build web applications.',
            'category' => 'Laravel',
        ]);
        Course::create([
            'title' => 'Advanced Laravel Techniques',
            'description' => 'Dive into advanced features like queues, jobs, and events.',
            'category' => 'Laravel',
        ]);

        // PHP Courses
        Course::create([
            'title' => 'PHP for Beginners',
            'description' => 'An introduction to PHP and how to use it for web development.',
            'category' => 'PHP',
        ]);
        Course::create([
            'title' => 'Object-Oriented PHP',
            'description' => 'Master Object-Oriented Programming (OOP) concepts in PHP.',
            'category' => 'PHP',
        ]);

        // JavaScript (JS) Courses
        Course::create([
            'title' => 'JavaScript Fundamentals',
            'description' => 'Understand JavaScript basics like variables, loops, and functions.',
            'category' => 'JavaScript',
        ]);
        Course::create([
            'title' => 'ES6 and Beyond: Advanced JavaScript',
            'description' => 'Learn modern JavaScript features like promises, async/await, and modules.',
            'category' => 'JavaScript',
        ]);

        // React Courses
        Course::create([
            'title' => 'React for Beginners',
            'description' => 'Learn how to build single-page applications using React.',
            'category' => 'React',
        ]);
        Course::create([
            'title' => 'React Hooks and State Management',
            'description' => 'Master state management in React with hooks and context.',
            'category' => 'React',
        ]);

        // CSS Courses
        Course::create([
            'title' => 'CSS for Beginners',
            'description' => 'Learn how to style your website with CSS.',
            'category' => 'CSS',
        ]);
        Course::create([
            'title' => 'CSS Flexbox and Grid',
            'description' => 'Master CSS layout techniques like Flexbox and Grid.',
            'category' => 'CSS',
        ]);
    }
}
