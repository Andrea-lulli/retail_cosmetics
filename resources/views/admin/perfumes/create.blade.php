@extends('layouts.app')
@section('content')
<form action="{{route('admin.perfumes.store')}}" method="POST" enctype="multipart/form-data">

    @csrf

    {{-- box alert campi obbligatori --}}
    <div class="alert alert-success" role="alert">
        I campi contrassegnati dall'asterisco (*) sono obbligatori.
    </div>


    <div class="form-group row">
        <label for="" class="col-md-4 col-form-label text-md-right">Name
            <span class="text-success">*</span></label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="name" placeholder="Inserisci il nome del prodotto">
        </div>
    </div>


    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">Marca
            <span class="text-success">*</span></label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="brand" placeholder="Inserisci il nome della marca">
        </div>
    </div>


    <div class="form-group row">
        <label for="" class="col-md-4 col-form-label text-md-right">Categoria
            <span class="text-success">*</span></label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="category" placeholder="Inserisci la categoria">
        </div>
    </div>


    <div class="form-group row mt-3">
        <label for="price" class="col-md-4 col-form-label text-md-right">Prezzo
            <span class="text-success">*</span></label>
        <div class="col-md-6">
            <input type="number" min="0.1" step=".01" class="form-control" name="price" autocomplete="price"
                placeholder="10.00">
        </div>
    </div>


    <div class="form-group row">
        <label for="image" class="col-md-4 col-form-label text-md-right">Immagine
            <span class="text-success">*</span>
        </label>
        <div class="col-md-6">
            <input type="file" class="form-control-file" name="image">
        </div>
    </div>

    </div>

    <button type="submit" class="btn btn-primary">aggiungi prodotto</button>

</form>

@endsection
