<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        

        return view("pages.welcome", [
            "posts" => $posts
        ]);
    }

    public function about()
    {
        return view("pages.about");
    }

    public function show($id)
    {
        $post =Post::findOrFail($id);

        return view("pages.article", [
            "post" => $post
        ]);

    }

    public function create()
    {
        return view("pages.form");
    }

    public function articleCreator(Request $request)
    {
        //$article =new Post();
        // $article->title = $request -> title;
        // $article->content = $request -> content;

        Post ::create([
            "title"=> $request -> title,
            "content" => $request -> content
        ]);
        
        dd("Article Creer");
    }

    public function contact()
    {
        return view("pages.contact");
    }
}