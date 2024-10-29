<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Faris'], ['title'=> 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title'=> 'Blog', 'posts' => [
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
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
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

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title'=> 'Contact']);
});
