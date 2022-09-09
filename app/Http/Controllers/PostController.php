<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts= Post::all();
        return view('articles' ,compact('posts'));
    }

    public function show($id)
    {
        $posts=[
            1 => 'mon article n°5',
            2 => 'mon article n°2'
        ];

        $post=$posts[$id] ?? 'pas de titre';

        return view('article',compact('post'));
    }

    public function contact()
    {
        return view ('contact');
    }

}
