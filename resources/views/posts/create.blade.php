@extends('layouts.layout')
@section('header')
<h1>Crea un Nuovo Post</h1>
@endsection
@section('main')
<form action="{{route('posts.store')}}" method="post">
@csrf
@method('POST')
<input type="text" name="title" value="" placeholder="Titolo Post"> <br>
<input type="text" name="slug" value="" placeholder="Slug Post"> <br>
<div>
<textarea name="paragraph" id="" cols="30" rows="10" placeholder="Inserisci contenuto">
</textarea>
</div>
<input type="text" name="author" value="" placeholder="Autore del Post">
<input type="submit"  value="Crea Post">
</form>
@endsection
