@extends('layouts.app')

@section('content')
    <form action="{{ route('sauces.update', ['id' => $sauce->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nom de la sauce:</label>
            <input type="text" name="name" class="form-control" placeholder="{{ $sauce->name }}" id="name">
        </div>

        <div class="form-group">
            <label for="description">Description de la sauce :</label>
            <input type="text" name="description" class="form-control" placeholder="{{ $sauce->description }}" id="description">
        </div>

        <div class="form-group">
            <label for="main_pepper">Pepper principal :</label>
            <input type="text" name="main_pepper" class="form-control" placeholder="{{ $sauce->main_pepper }}" id="main_pepper">
        </div>

        <div class="form-group">
            <label for="heat">Heat :</label>
            <input type="number" name="heat" class="form-control" placeholder="{{ $sauce->heat }}" id="heat">

        <div class="form-group">
            <label for="manufacturer">Manufacturer :</label>
            <input type="text" name="manufacturer" class="form-control" placeholder="{{ $sauce->manufacturer }}" id="manufacturer">
        </div>

        <div class="form-group">
            <label for="image_url">Image :</label>
            <input type="text" name="image_url" class="form-control" placeholder="{{ $sauce->image_url }}" id="image_url">
        </div>

        <button type="submit" class="btn btn-primary">Valider les modification</button>

    </form>
@endsection