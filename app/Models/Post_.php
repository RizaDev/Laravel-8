<?php

namespace App\Models;



class Post
{
    private static $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "Author" => " Riza S R",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates voluptatibus nesciunt, culpa consequatur velit aliquid explicabo itaque, repellendus, iusto et asperiores quasi? Quisquam labore officiis, facere asperiores dolor debitis blanditiis doloremque dicta molestiae, fugiat odio placeat, optio sunt nostrum eveniet illum cum suscipit assumenda porro harum voluptatibus sed vero alias aperiam? Corporis illo, aliquam perferendis unde voluptatibus aspernatur vitae, quisquam ducimus odit ullam facilis atque voluptatum consectetur adipisci nostrum exercitationem ad quibusdam corrupti debitis, modi commodi magnam ex voluptas quas."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "Author" => " Alvin Q F",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates voluptatibus nesciunt, culpa consequatur velit aliquid explicabo itaque, repellendus, iusto et asperiores quasi? Quisquam labore officiis, facere asperiores dolor debitis blanditiis doloremque dicta molestiae, fugiat odio placeat, optio sunt nostrum eveniet illum cum suscipit assumenda porro harum voluptatibus sed vero alias aperiam? Corporis illo, aliquam perferendis unde voluptatibus aspernatur vitae, quisquam ducimus odit ullam facilis atque voluptatum consectetur adipisci nostrum exercitationem ad quibusdam corrupti debitis, modi commodi magnam ex voluptas quas."
        ]
    ];



    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        return Post::all()->firstWhere("slug", $slug);
    }
}
