@extends('layouts.layout')
@section('header')
<h1>Tutti i Post del Blog</h1>
@endsection
@section('main')
<div class="posts">
  @foreach ($posts as $post)

    <div class="post">
      <ul>
        <li>
          <h2>
            <a href="{{route('posts.show', $post->id)}}">
              {{$post->title}}</a>
            </h2>
        <h5>Slug: {{$post->slug}}</h5>
        <p>Scritto da <strong>{{$post->author}}</strong></p>
        <p>{{$post->paragraph}}</p>
        <p>Creato il: {{$post->created_at}}</p>
      </li>
      </ul>
    </div>
  @endforeach
</div>
@endsection
