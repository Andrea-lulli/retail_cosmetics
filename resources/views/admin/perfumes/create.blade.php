@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Crea un Prodotto</h1>

    </div>

    <form action="{{ route('admin.perfumes.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label for="" class="form-label">Titolo</label>
            <input  type="text" class="form-control" name="name">
        </div>


        <div class="mb-3">
            <label for="" class="form-label">Brand</label>
            <input type="text" class="form-control" name="brand">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Category</label>
            <input type="text" class="form-control" name="category">

        </div>

        <div class="mb-3">
            <label for="" class="form-label">Price</label>
            <input type="text" class="form-control" name="price">
        </div>

        <div class="mb-3" >
            <label for="" class="form-label">Inserisci Immagine </label>
            <input type="file" name="image" class="form-control-file">
        </div>


        <button type="submit" class="btn btn-primary">Crea</button>
    </form>
@endsection
