@extends('layouts.app')
<head>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">
</head>
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <h2 class="card-header" >{{ $sauce->name }}</h2>
        <div class="card-body">
          <div class="row">
            <div class="col-md-4">
              <img src="{{ $sauce->image_url }}" alt="{{ $sauce->name }}" style="max-width:100%;">
              <div style="display: flex; justify-content: center; margin-top: 10px;">
                <form action="{{ route('sauces.like', ['id' => $sauce->id]) }}" method="POST">
                  @csrf
                  @method('GET')
                  <button type="submit" class="btn btn-success" style="margin-right: 5px;">
                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                  </button>
                </form>
                <form action="{{ route('sauces.dislike', ['id' => $sauce->id]) }}" method="POST">
                  @csrf
                  @method('GET')
                  <button type="submit" class="btn btn-danger">
                    <i class="fa fa-thumbs-down" aria-hidden="true"></i>
                  </button>
                </form>
              </div>
            </div>
            <div class="col-md-8">
              <p><strong>Description: </strong>{{ $sauce->description }}</p>
              <p><strong>Heat: </strong>{{ $sauce->heat }} / 10</p>
              <p><strong>Main pepper: </strong>{{ $sauce->main_pepper }}</p>
              <p><strong>Likes: </strong>{{ $sauce->likes }}</p>
              <p><strong>Dislikes: </strong>{{ $sauce->dislikes }}</p>
              <p><strong>Manufacturer: </strong>{{ $sauce->manufacturer }}</p>
              @if(Auth::check())
              @if(Auth::user()->id == $sauce->user_id )
              <a href="{{ route('sauces.edit', ['id' => $sauce->id]) }}" class="btn btn-warning">Modifier la sauce</a>
              <form action="{{ route('sauces.destroy', ['id' => $sauce->id]) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer la sauce</button>
              </form>
              @endif
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
