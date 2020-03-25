@extends('layouts.layout')
@section('header')
<h1>Modifica il Post ID - {{$post->id}}</h1>
@endsection
@section('main')
<form action="{{route('posts.update', $post)}}" method="post">
@csrf
@method('PATCH')
<input type="text" name="title" value="{{$post->title}}"> <br>
<input type="text" name="slug" value="{{$post->slug}}"> <br>
<div>
<textarea name="paragraph" id="" cols="30" rows="10">
{{$post->paragraph}}
</textarea>
</div>
<input type="text" name="author" value="{{$post->author}}">
<input type="submit"  value="Modifica Post">
</form>
@endsection
