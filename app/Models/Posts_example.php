<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Posts
{
    use HasFactory;

    private static $article_post = [
        [
            "title" => "First Article that has the first position cause its a first article",
            "slug" => "first-article",
            "image" => "20220728_193418_0000.png",
            "date" => "September 2022",
            "author" => "Wisnu",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis voluptatem repellat vitae expedita ipsam vel veritatis sapiente odit quis unde cumque temporibus, dolor blanditiis corrupti dolorem ad aperiam id iure hic esse accusamus optio reprehenderit. Ipsam dicta eaque aspernatur eos fuga nihil, quam officia deserunt, animi sequi, ad vel ea!"
        ],
        [
            "title" => "Second Article that has the second position cause its a second article",
            "image" => "20220728_193418_0000.png",
            "author" => "Still Wisnu",
            "date" => "August 2022",
            "slug" => "second-article",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta nihil corrupti officiis perferendis repellendus ea dolores. Excepturi numquam aperiam similique ad quis deleniti vel autem ratione accusantium, inventore architecto ab."
        ],
        [
            "title" => "Third Article that has the third position cause its a third article",
            "image" => "20220728_193418_0000.png",
            "author" => "Wisnu Again",
            "date" => "October 2022",
            "slug" => "third-article",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi neque fugit molestiae sunt quibusdam odio dolor at vel qui eos suscipit architecto, consectetur distinctio! Esse mollitia minus dolor dolores, sint doloremque necessitatibus maiores vero fugit. Obcaecati laudantium sit alias magni expedita sed quidem a aut at, temporibus adipisci velit magnam architecto illum laborum neque ducimus, odit maiores accusamus recusandae harum?"
        ]
    ];

    public static function all() {
        return collect(self::$article_post);
    }

    public static function find($slug) {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}


