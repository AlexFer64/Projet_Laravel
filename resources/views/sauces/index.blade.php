@extends('layouts.app')

@section('content')
<div class="container">
  <h1 style="text-align: center;">Vos sauces à disposition !</h1>
  <div class="row">
    @foreach ($sauces as $sauce)
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="{{ $sauce->image_url }}" class="card-img-top" alt="{{ $sauce->name }}">
          <div class="card-body">
            <h2 class="card-title">{{ $sauce->name }}</h2>
            <p class="card-text">Heat : {{ $sauce->heat }} /10</p>
            <p class="card-text">Appréciation : {{ $ratio[$sauce->id] }} @if($ratio[$sauce->id] != "Aucune" ) % @endif</p>
            <a href="{{ route('sauces.show', ['id' => $sauce->id]) }}" class="btn btn-primary">Voir les détails</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection