<?php

namespace App\Models;

class blog 
{
    private static $go_blog = [
        [
            "tittle" => "Judul Kahiji",
            "slug" => "judul-kahiji",
            "author" => "Reviandi",
            "body" => "Lorem ipsum dolor si jamet consectetur adipisicing elit. Iste optio, quo ipsa ducimus numquam sequi ab quisquam aut quaerat, et, reiciendis ipsam quas. Eaque odio dolores voluptate illo aspernatur quasi."
        ],
        [
            "tittle" => "Judul Kadua",
            "slug" => "judul-kadua",
            "author" => "Adi Tri",
            "body" => "Lorem ipsum dolor, si jamet consectetur adipisicing elit. Veniam similique sint porro natus hic, corporis perspiciatis vel aliquam delectus necessitatibus nemo alias facilis dolor eos labore nesciunt aut aspernatur iusto repellat voluptas ipsam quos asperiores quam. Iure autem optio in officia tempora. Dolore distinctio dolorum ipsa sed dolores corrupti harum mollitia, aperiam molestiae totam veritatis magnam! Impedit deserunt at laudantium reiciendis nemo molestias in consequuntur aliquid, assumenda eum corrupti dolorem aspernatur, facilis aut, inventore eius placeat cumque saepe! Ipsa, alias!"
        ]
    ];

    public static function all(){
        return collect(self::$go_blog);
    }

    public static function find($slug){
        $blog = static::all();
        return  $blog->firstWhere('slug', $slug); 
    }
}
