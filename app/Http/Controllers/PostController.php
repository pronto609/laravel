<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show($id = 3)
    {
//        $posts = DB::table('posts')->where('id', '!=', $id)->dump();
        $posts = DB::table('posts')->where('id', '!=', $id)->get();
        dump($posts);
    }
}
