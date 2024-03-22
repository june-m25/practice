<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Article extends Model
{
    public function getList() {

        $articles = DB::table('articles')->get();

        return $articles;

    }

    public function registArticle($date) {

        DB::table('articles')->insert([
            'title' => $date->title,
            'url' => $date->url,
            'comment' => $date->comment,
        ]);
    }
}
