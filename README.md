<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<h1 align="center">Belajar Laravel untuk Pertama Kali</h1>

<p align="center">Repositori ini berisi perjalanan saya belajar Laravel untuk pertama kalinya. Mengikuti tutorial, mempraktikkan konsep, dan membangun proyek untuk memahami framework Laravel dengan lebih baik.</p>

## Hari 1: Pengenalan Laravel

-   Memahami Apa itu Laravel
-   Studi Kasus (Sistem Blog)

## Hari 2: Instalasi dan Konfigurasi

-   PHP
-   Laragon
-   MySQL
-   Nginx
-   Composer
-   Git
-   NodeJS
-   Instalasi Laravel
    Ekstensi VSCode
-   PHP Intelphense
-   PHP Namespace Resolver
-   Laravel Snippets
-   Laravel Blade Snippets
-   Laravel Blade Formatter
-   Laravel Blade Spacer
-   Laravel Extra Intellisense
-   Laravel GoTo View
-   Tailwindcss Intellisense
-   Alpine.js Intellisense
-   Alpine.js Syntax Highlight

## Hari 3: Dasar Laravel

-   Struktur Folder
-   Route
-   View

<!-- ## Hari 4: Blade Template Engine

## Hari 5: Komponen Blade

## Hari 6: Data View

## Hari 7: Model -->

## Hari 8: Database & Migrasi

Aktivitas hari ini:

-   Membuat Database
-   Melakukan Database Rollback
-   Mengelola Perubahan Database

## Hari 9: Eloquent ORM & Model Post

#### Membuat Model

Generate model menggunakan artisan:

```bash
php artisan make:model Post
```

Contoh Model Post:

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

#### Melihat Data

Di controller:

```php
public function index()
{
$posts = Post::all();
return view('posts.index', compact('posts'));
}
```

Di blade view:

```php
@foreach($posts as $post)
<h2>{{ $post->title }}</h2>
<p>Oleh: {{ $post->author }}</p>
<p>{{ $post->body }}</p>
@endforeach
```

#### Query Data di Laravel

Jalankan perintah di terminal:

```bash
php artisan tinker
```

Contoh memasukkan data:

```php
App\Models\Post::create([
'title' => 'Dana Kekayaan Negara Indonesia Baru akan Investasi $20 Miliar dalam Proyek',
'author' => 'Stefanno Sulaiman dan Ananda Teresia',
'slug' => 'dana-kekayaan-negara-indonesia-baru-akan-investasi-20-miliar-dalam-proyek',
'body' => 'Pemerintah Indonesia meluncurkan dana kekayaan negara bernama Danantara Indonesia dengan target investasi US$20 miliar di sektor logam, AI, energi hijau, dan pertanian. Dana ini bertujuan mendongkrak pertumbuhan ekonomi dan dipisahkan dari lembaga lama untuk meningkatkan transparansi.'
]);
```

Menampilkan semua data:

```php
App\Models\Post::all();
```

Mendapatkan record pertama:

```php
App\Models\Post::first();
```

Mencari berdasarkan ID:

```php
App\Models\Post::find(1);
```

Mendapatkan kolom tertentu:

```php
App\Models\Post::select('title', 'author')->get();
```

## Hari 10: Model Factories

#### Menjalankan Factories

Jalankan perintah di terminal:

```bash
php artisan tinker
```

Membuat data pengguna:

```php
# Membuat 1 data pengguna
App\Models\User::factory()->create();

# Membuat 10 data pengguna
App\Models\User::factory(10)->create();

# Membuat pengguna dengan email belum terverifikasi
App\Models\User::factory()->unverified()->create();
```

#### Membuat Factory

```bash
php artisan make:factory PostFactory
```

Contoh kode factory untuk model Post di `database/factories/PostFactory.php`:

```php
<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
  public function definition(): array
  {
    $title = fake()->sentence();
    return [
      'title' => $title,
      'author' => fake()->name(),
      'slug' => Str::slug($title),
      'body' => fake()->paragraph(3)
    ];
  }
}
```

Membuat data post dummy:

```php
# Membuat 1 post
App\Models\Post::factory()->create();

# Membuat 5 post sekaligus
App\Models\Post::factory(5)->create();
```

## Hari 11: Eloquent Relationship

#### Jenis Relasi

-   One To One
-   One To Many
-   Many To Many
-   Has Many Through

#### Contoh Relasi One To Many

Model User:

```php
public function posts()
{
  return $this->hasMany(Post::class);
}
```

Model Post:

```php
public function user()
{
  return $this->belongsTo(User::class);
}
```

#### Mengakses Relasi

Di controller:

```php
$user = User::find(1);
$posts = $user->posts; // mengambil semua post user

$post = Post::find(1);
$author = $post->user; // mengambil user pemilik post
```

Di blade:

```php
@foreach($user->posts as $post)
  <h3>{{ $post->title }}</h3>
  <p>By: {{ $post->user->name }}</p>
@endforeach
```
