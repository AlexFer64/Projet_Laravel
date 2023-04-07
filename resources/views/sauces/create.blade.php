@extends('layouts.app')

@section('content')
    <form action="{{ route('sauces.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nom de la sauce:</label>
            <input type="text" name="name" class="form-control" placeholder="Saisir un nom" id="name">
        </div>

        <div class="form-group">
            <label for="description">Description de la sauce :</label>
            <input type="text" name="description" class="form-control" placeholder="Saisir une description" id="description">
        </div>

        <div class="form-group">
            <label for="main_pepper">Pepper principal :</label>
            <input type="text" name="main_pepper" class="form-control" placeholder="Saisir un pepper" id="main_pepper">
        </div>

        <div class="form-group">
            <label for="heat">Heat :</label>
            <input type="number" name="heat" class="form-control" placeholder="Saisir un heat" id="heat">

        <div class="form-group">
            <label for="manufacturer">Manufacturer :</label>
            <input type="text" name="manufacturer" class="form-control" placeholder="Saisir une manufacture" id="manufacturer">
        </div>

        <div class="form-group">
            <label for="image_url">Image :</label>
            <input type="text" name="image_url" class="form-control" placeholder="Saisir une image" id="image_url">
        </div>

        <button type="submit" class="btn btn-primary">Valider votre sauce</button>

    </form>
@endsection
