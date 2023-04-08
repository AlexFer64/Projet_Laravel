@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center mb-4">Ajouter une nouvelle sauce</h1>
        <form action="{{ route('sauces.store') }}" method="POST" class="row g-3">
            @csrf
            <div class="col-md-6">
                <label for="name" class="form-label">Nom de la sauce:</label>
                <input type="text" name="name" class="form-control" placeholder="Saisir un nom" id="name">
            </div>
            <div class="col-md-6">
                <label for="main_pepper" class="form-label">Pepper principal :</label>
                <input type="text" name="main_pepper" class="form-control" placeholder="Saisir un pepper" id="main_pepper">
            </div>
            <div class="col-md-12">
                <label for="description" class="form-label">Description de la sauce :</label>
                <input type="text" name="description" class="form-control" placeholder="Saisir une description" id="description">
            </div>
            <div class="col-md-6">
                <label for="heat" class="form-label">Heat :</label>
                <input type="number" name="heat" class="form-control" placeholder="Saisir un heat" id="heat">
            </div>
            <div class="col-md-6">
                <label for="manufacturer" class="form-label">Manufacturer :</label>
                <input type="text" name="manufacturer" class="form-control" placeholder="Saisir une manufacture" id="manufacturer">
            </div>
            <div class="col-md-12">
                <label for="image_url" class="form-label">Image :</label>
                <input type="text" name="image_url" class="form-control" placeholder="Saisir une image" id="image_url">
            </div>
            <div class="col-12 mt-4">
                <button type="submit" class="btn btn-primary">Valider votre sauce</button>
            </div>
        </form>
    </div>
@endsection
