@extends('layouts.layout')
@section('header')
@if (session('id_delete'))
<div class="alert alert-success">
    Hai cancellato il post con id: {{ session('id_delete') }}
</div>
@endif
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
                <button type="button" name="button"><a href="{{route('posts.edit', $post->id)}}">Modifica</a></button>
                <form class="" action="{{route('posts.destroy', $post)}}" method="post">
                    <button type="submit" name="button">DELETE</button>
                    @csrf
                    @method('DELETE')
                </form>
            </li>
        </ul>

    </div>
    @endforeach
</div>
@endsection
