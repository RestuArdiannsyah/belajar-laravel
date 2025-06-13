<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
  public static function all()
  {
    return [
      [
        'id' => 1,
        'slug' => 'judul-article-1',
        'title' => 'Judul Article 1',
        'author' => 'Restu Ardiansyah',
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
      ],
      [
        'id' => 2,
        'slug' => 'judul-article-2',
        'title' => 'Judul Article 2',
        'author' => 'Restu Ardiansyah',
        'body' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
      ]
    ];
  }

  // menggunakan :array untuk melihat eror yang lebih jelas pada fungsi
  public static function find($slug): array
  {
    // menggunakan fungsi Arr::first
    // return Arr::first(Post::all(), function ($post) use ($slug) {
    //   return $post['slug'] == $slug;
    // });

    // menggunakan arrow function
    $post = Arr::first(Post::all(), fn($post) => $post['slug'] == $slug);

    // jika post tidak ditemukan, maka akan mengembalikan 404
    if (!$post) {
      abort(404);
    }

    // jika post ditemukan, maka akan mengembalikan post
    return $post;
  }
}
