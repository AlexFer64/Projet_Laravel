@extends ('layouts.app')
<head>
    <title>Mon site Laravel</title>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
</head>
@section('content')
    <div >
        <h1>Voici toutes les sauces</h1>
        <section class="list-sauce">
            @foreach ($sauces as $sauce)
                <div class="card-header">
                     <img src="{{ $sauce->image_url }}">
                    <h2>{{ $sauce->name }}</h2>
                    <p>Heat : {{ $sauce->heat }} /10</p>
                    <a href="{{ route('sauces.show', ['id' => $sauce->id]) }}">Voir les détails</a>
                </div>
            @endforeach
            </section>
    </div>
@endsection