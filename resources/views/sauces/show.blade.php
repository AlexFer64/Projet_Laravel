@extends('layouts.app')
<head>
<link href="{{ asset('css/show.css') }}" rel="stylesheet">
</head>
@section('content')
    <h1>{{ $sauce->name }}</h1>
    <img src="{{ $sauce->image_url }}" alt="{{ $sauce->name }} image">
    <p>{{ $sauce->description }}</p>
    <p>Heat: {{ $sauce->heat }} / 10</p>
    <p>Main pepper: {{ $sauce->main_pepper }}</p>
    <p>Likes: {{ $sauce->likes }}</p>
    <p>Dislikes: {{ $sauce->dislikes }}</p>
    <p>Manufacturer: {{ $sauce->manufacturer }}</p>
    <button class="btn-like"></button>
    <button class="btn-dislike"></button>
@endsection
