@extends('layouts.main-layout')
@section('content')
    @auth
        <videogame-component></videogame-component>
    @endauth
@endsection
