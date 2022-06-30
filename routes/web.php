<?php
 use Illuminate\Support\Facades\Route;

Route:: get("/", "App\Http\Controllers\PostController@index")->name("home_page");

Route:: get("/about-us","App\Http\Controllers\PostController@about" )->name("about_page");

Route:: get("/posts/{id}","App\Http\Controllers\PostController@show" )->name("show_article")->whereNumber("id");

Route:: get("/posts/create","App\Http\Controllers\PostController@create" )->name("create_article");

Route:: post("/posts/create","App\Http\Controllers\PostController@articleCreator" )->name("articleCreator");

Route:: get("/contact","App\Http\Controllers\PostController@contact" )->name("contact_page");