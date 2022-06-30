@extends("base")

@section("title","Crer un nouvel article")
@section("content")

<h1>Creer un nouvel article</h1>
    <form method="POST" action="{{route("articleCreator")}}">
        @csrf
        <label for="title">Titre :</label><input type="text" name="title"> </br></br>
        <label for="content">Contenu :</label></br></br><textarea name="content" id="" cols="30" rows="10"></textarea></br></br>
        <button type="submit">Creer</button>

    </form>
@endsection