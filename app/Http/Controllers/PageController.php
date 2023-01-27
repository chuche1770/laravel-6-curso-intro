<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Models\Post;


class PageController extends Controller
{
    public function posts(){
        //load() solo se usa cuandola consulta ya fue hecha anteriormente y se guardo en una variable
        Paginator::useBootstrap();
        return view('posts',[
            'posts'=>Post::with('user')->latest()->paginate()
        ]);
    }

    public function post(Post $post){
        return view('post',['post'=>$post]);
    }
}
