@extends("base")

@section("title","Article")
@section("content")
     <h1>{{ $post->content}}</h1> 
     <hr>
     <span>{{$post->image ? $post->image->path : "Pas d'image"}}</span><br>
     @forelse ($post->comments as $comment )
          <span>{{$comment->content}} | Cree le {{$comment->created_at->format("d/m/y")}}</span></br>
          
     @empty
          <span>Aucun commentaire pour cet article</span>

     @endforelse

    

@endsection