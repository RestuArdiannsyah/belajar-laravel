<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<h1 align="center">First Time Learning Laravel</h1>

<p align="center">This repository contains my journey learning Laravel for the first time. Following along with tutorials, practicing concepts, and building projects to understand the Laravel framework better.</p>

## Day 1: Introduction to Laravel

-   Understanding What Laravel Is
-   Case Study (Blog System)

## Day 2: Installation and Configuration

-   PHP
-   Laragon
-   Mysql
-   Ngnix
-   Composer
-   Git
-   NodeJS
-   Instalisasi Laravel
    VSCode Extensions
    -   PHP Intelphense
    -   PHP Namespace resolver
    -   Laravel Snippets
    -   Laravel Blade Snippets
    -   Laravel Blade Formatter
    -   Laravel Blade Spacer
    -   Laravel Extra Intellisense
    -   Laravel GoTo View
    -   Tailwindcss Intellisense
    -   Alpine.js Intellisense
    -   Alpine.js Syntax Hlight

## Day 3: Basic Laravel

-   Folder Struchture
-   Route
-   View

<!-- ## Day 4: Blade Templeating Engine

## Day 5: Blade Component

## Day 6: View Data

## Day 7: Model -->

## Day 8: Database & Migration

Today's activities:

-   Create Databases
-   Perform Database Rollback
-   Managing Changes in Database

## Day 9: Eloquent ORM & Post Model

-   Create Models
  
  Generate model using artisan:
  ```bash
  php artisan make:model Post
  ```

  Example Post model:
  ```php
  <?php

  namespace App\Models;

  use Illuminate\Database\Eloquent\Model;

  class Post extends Model
  {
    protected $fillable = [
      'title',
      'author', 
      'slug',
      'body'
    ];
  }
  ```

-   View Data
  
  In controller:
  ```php
  public function index()
  {
    $posts = Post::all();
    return view('posts.index', compact('posts'));
  }
  ```

  In blade view:
  ```php
  @foreach($posts as $post)
    <h2>{{ $post->title }}</h2>
    <p>By: {{ $post->author }}</p>
    <p>{{ $post->body }}</p>
  @endforeach
  ```

-   Query Data in Laravel

  Run command in terminal:

  ```bash
  php artisan tinker
  ```

  Insert data example:

  ```php
  App\Models\Post::create([
    'title' => 'New Indonesia sovereign wealth fund to invest $20 billion in projects',
    'author' => 'Stefanno Sulaiman and Ananda Teresia',
    'slug' => 'new-indonesia-sovereign-wealth-fund-to-invest-20-billion-in-projects',
    'body' => 'Pemerintah Indonesia meluncurkan dana kekayaan negara bernama Danantara Indonesia dengan target investasi US$20 miliar di sektor logam, AI, energi hijau, dan pertanian. Dana ini bertujuan mendongkrak pertumbuhan ekonomi dan dipisahkan dari lembaga lama untuk meningkatkan transparansi.'
  ]);
  ```

  Show all data:
  ```php
  App\Models\Post::all();
  ```

  Get first record:
  ```php
  App\Models\Post::first();
  ```

  Find by ID:
  ```php
  App\Models\Post::find(1);
  ```

  Get specific columns:
  ```php
  App\Models\Post::select('title', 'author')->get();
  ```
