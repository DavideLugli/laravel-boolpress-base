@extends('layouts.layout')
@section('header')
<h1>Tutte le Foto</h1>
@endsection
@section('main')
<div class="photos">
    @foreach ($photos as $photo)

    <div class="photo">
        <ul>
            <li>
                <h2>
                    <a href="{{route('photos.show', $photo->id)}}">
                        Foto ID {{$photo->id}}
                    </a>
                </h2>
                <p><strong>Path: </strong> {{$photo->path}} </p>
                <p><strong>Descrizione: </strong> {{$photo->desc}} </p>
                <p><strong>Scattato da:</strong>
                    <a href="{{route('users.show', $photo->user_id)}}">{{$photo->user->name}}</a>
                </p>
            </li>
        </ul>

    </div>
    @endforeach
</div>
@endsection
