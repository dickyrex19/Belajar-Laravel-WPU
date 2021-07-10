<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, ullam. Illo, odit provident? Ipsum itaque quam quas excepturi inventore autem, nihil quidem voluptate sit tempore atque nemo accusantium vel perferendis. Fuga quis dolores eum quae enim possimus consequuntur animi voluptas!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, ullam. Illo, odit provident? Ipsum itaque quam quas excepturi inventore autem, nihil quidem voluptate sit tempore atque nemo accusantium vel perferendis. Fuga quis dolores eum quae enim possimus consequuntur animi voluptas!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        return static::all()->firstWhere('slug', $slug);
    }
}
