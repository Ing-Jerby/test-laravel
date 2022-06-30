@extends("base")

@section("title","Hello city")
@section("content")
<h1>Liste des articles</h1>
@if ($posts->count()>0)    
   
    @foreach ($posts as $post )
        <h3><a href="{{route("show_article",["id"=> $post->id])}}">{{$post->title}}</a></h3>
        
    @endforeach
@else
<span>Auncun enregistrement dans la base de donnees</span>
@endif 
@endsection
