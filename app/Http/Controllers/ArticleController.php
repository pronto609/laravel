<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show()
    {
        return view('article.article', ['title' => 'Article title!']);
    }
}
