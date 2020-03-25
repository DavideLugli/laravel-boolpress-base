@extends('layouts.layout')
@section('header')
<h1>{{$post->title}}</h1>
@endsection
@section('main')
<div class="posts">
    <div class="post">
        <h5>Slug: {{$post->slug}}</h5>
        <p>Scritto da <strong>{{$post->author}}</strong></p>
        <p>{{$post->paragraph}}</p>
        <p>Creato il: {{$post->created_at}}</p>
    </div>
</div>
@endsection
