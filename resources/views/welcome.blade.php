@extends ('layouts.app')
<head>
    <title>Mon site Laravel</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
@section('content')
    <div >
        <h1>Voici toutes les sauces</h1>
        <section class="list-sauce">
            @foreach ($sauces as $sauce)
                <div class="card-header">
                     <img src="{{ $sauce->image_url }}">
                    <h2>{{ $sauce->name }}</h2>
                    <p>{{ $sauce->manufacturer }}</p>
                    <p>{{ $sauce->description }}</p>
                    <p>{{ $sauce->main_pepper }}</p>
                    <p>{{ $sauce->heat }}</p>
                    <p>{{ $sauce->likes }}</p>
                    <p>{{ $sauce->dislikes }}</p>
                    <a href="{{ route('sauces.show', ['id' => $sauce->id]) }}">Voir les détails</a>
                </div>
            @endforeach
            </section>
    </div>
@endsection