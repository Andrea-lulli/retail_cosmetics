@extends('layouts.app')
@section('content')
<form action="{{ route('admin.perfumes.update', $perfume->id) }}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('PUT')


    {{-- box alert campi obbligatori --}}
    <div class="alert alert-success" role="alert">
        I campi contrassegnati dall'asterisco (*) sono obbligatori.
    </div>


    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">Nome prodotto
            <span class="text-success">*</span></label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="name" value='{{ $perfume->name }}'>
        </div>
    </div>


    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">Marca prodotto
            <span class="text-success">*</span></label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="brand" value='{{ $perfume->brand }}'>
        </div>
    </div>


    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">Categoria prodotto
            <span class="text-success">*</span></label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="category" value='{{ $perfume->category }}'>
        </div>
    </div>


    <div class="form-group row mt-3">
        <label for="price" class="col-md-4 col-form-label text-md-right">Prezzo
            <span class="text-success">*</span></label>
        <div class="col-md-6">
            <input type="number" min="0.1" step=".01" class="form-control" name="price" value='{{ $perfume->price }}'>
        </div>
    </div>


    <div class="form-group row">
        <label for="image" class="col-md-4 col-form-label text-md-right">Immagine Prodotto
            <span class="text-success">*</span>
        </label>
        <div class="col-md-6">
            <input type="file" class="form-control-file" name="image">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Modifica prodotto</button>

</form>
@endsection
