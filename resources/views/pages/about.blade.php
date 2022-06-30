@extends("base")

@section("title", "About Us | " .config("app.name"))
@section("content")
    <p>Built with &hearts; by  Les teachers du Net.</p>
    <a href="{{route("home_page")}}">Revenir a l'acceuil</a>
@endsection