@extends('layouts.layout')
@section('header')
<h1>Foto ID {{$photo->id}}</h1>
@endsection
@section('main')
<div class="photos">


    <div class="photo">
        <ul>
            <li>
                <p><strong>Path: </strong> {{$photo->path}} </p>
                <p><strong>Descrizione: </strong> {{$photo->desc}} </p>
                <p><strong>Scattato da:</strong>
                    <a href="{{route('users.show', $photo->user_id)}}">{{$photo->user->name}}</a>
                </p>
            </li>
        </ul>

    </div>

</div>
@endsection
