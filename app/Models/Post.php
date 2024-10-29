<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => '1',
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Faris',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti sit ipsam eaque totam modi? Expedita consequuntur beatae doloremque asperiores vero recusandae incidunt maiores voluptatem, quasi alias necessitatibus ipsum deleniti pariatur!'
            ],
            [
                'id' => '2',
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Faris',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore recusandae, accusantium fugiat consectetur quae corrupti, debitis hic nobis vel delectus veniam facilis. Vitae dolore tempore excepturi rerum, nam repudiandae error!'
            ]
        ];
    }

    public static function find($slug): array
    {
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}
