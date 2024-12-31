<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post {
    public static function all() : array {
        return [
            [
                'title' => 'Post 1',
                'author'=> 'Micah',
                'category' => 'Kids',
                'id' => 1
            ],
            [
                'title' => 'Post 2',
                'author'=> 'Jill',
                'category' => 'Family',
                'id' => 2
            ],
            [
                'title' => 'Post 3',
                'author'=> 'Marc',
                'category' => 'Pets',
                'id' => 3
            ]
        ];
    }

    public static function find($id): array {
        $post = Arr::first(Post::all(), fn($posts) => $posts['id'] == $id);

        if(!$post) {
            abort(404);
        }

        return $post;
    }
}
