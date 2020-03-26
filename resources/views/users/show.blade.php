@extends('layouts.layout')
@section('header')
<h1>{{$user->name}}</h1>
@endsection
@section('main')
<div class="users">


    <div class="user">
        <ul>
            <li>
                <p><strong>Id: </strong> {{$user->id}} </p>
                <p><strong>Email: </strong> {{$user->email}} </p>
                <p><strong>Password: </strong> {{$user->password}} </p>
            </li>
        </ul>

    </div>

</div>
@endsection
