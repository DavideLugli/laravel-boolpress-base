@extends('layouts.layout')
@section('header')
<h1>Tutti gli utenti</h1>
@endsection
@section('main')
<div class="users">
    @foreach ($users as $user)
    <div class="user">
        <ul>
            <li>
                <h2>
                    <a href="{{route('users.show', $user->id)}}">
                        {{$user->name}}
                    </a>
                </h2>
                <p><strong>Id: </strong> {{$user->id}} </p>
                <p><strong>Email: </strong> {{$user->email}} </p>
                <p><strong>Password: </strong> {{$user->password}} </p>
            </li>
        </ul>

    </div>
    @endforeach
</div>
@endsection
