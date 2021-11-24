<?php

namespace App\Models;

class Posting
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rizqi",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis est vero expedita iste ad sit quidem nobis. Iste excepturi a, error necessitatibus quidem, ipsum vitae soluta nisi magni fugiat voluptatem qui maxime! Tempora, magnam. Sapiente suscipit accusantium, fugit dignissimos voluptatem, ut deserunt eveniet itaque quidem, et quod nobis modi. Cupiditate temporibus architecto similique saepe accusantium nostrum autem quae, omnis amet ipsum, beatae officiis minus explicabo sit optio consequatur aliquid voluptatum tenetur quod aut! Voluptatum consequatur, assumenda tempore esse voluptatem sit non animi dolor accusamus sequi optio blanditiis. Ad minima, veritatis quas dolore libero aliquid. Facilis illo architecto numquam aperiam molestias?"
        ],
    
        [
            "title" => "Judul Post Ke Dua",
            "slug" => "judul-post-ke-dua",
            "author" => "Rizqi",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis est vero expedita iste ad sit quidem nobis. Iste excepturi a, error necessitatibus quidem, ipsum vitae soluta nisi magni fugiat voluptatem qui maxime! Tempora, magnam. Sapiente suscipit accusantium, fugit dignissimos voluptatem, ut deserunt eveniet itaque quidem, et quod nobis modi. Cupiditate temporibus architecto similique saepe accusantium nostrum autem quae, omnis amet ipsum, beatae officiis minus explicabo sit optio consequatur aliquid voluptatum tenetur quod aut! Voluptatum consequatur, assumenda tempore esse voluptatem sit non animi dolor accusamus sequi optio blanditiis. Ad minima, veritatis quas dolore libero aliquid. Facilis illo architecto numquam aperiam molestias?"
        ],

        [
            "title" => "Judul Post Ke Tiga",
            "slug" => "judul-post-ke-tiga",
            "author" => "Rizqi",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis est vero expedita iste ad sit quidem nobis. Iste excepturi a, error necessitatibus quidem, ipsum vitae soluta nisi magni fugiat voluptatem qui maxime! Tempora, magnam. Sapiente suscipit accusantium, fugit dignissimos voluptatem, ut deserunt eveniet itaque quidem, et quod nobis modi. Cupiditate temporibus architecto similique saepe accusantium nostrum autem quae, omnis amet ipsum, beatae officiis minus explicabo sit optio consequatur aliquid voluptatum tenetur quod aut! Voluptatum consequatur, assumenda tempore esse voluptatem sit non animi dolor accusamus sequi optio blanditiis. Ad minima, veritatis quas dolore libero aliquid. Facilis illo architecto numquam aperiam molestias?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

    return $posts->firstWhere('slug', $slug);

    }
}
