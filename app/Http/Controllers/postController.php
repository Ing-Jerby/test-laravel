<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\video;
use App\Models\comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $video = video::find(1);

        return view("pages.welcome", [
            "posts" => $posts,
            "video" =>$video
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

    public function register()
    {
        $post= Post::find(11);
        $video= video::find(1);

        $comment1 = new comment(["content"=> "Mon premier commentaire"]);
        $comment2 = new comment(["content"=> "Mon deuxieme commentaire"]);
        $comment3 = new comment(["content"=> "Mon troisieme commentaire"]);

        $video->comments()->save($comment3);
        $post->comments()->saveMany([
            $comment1,$comment2
        ]);
    }
}