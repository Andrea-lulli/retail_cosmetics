@extends('layouts.app')
@section('content')
<div class="text-center my-5">
    <h2>{{ $singolo_perfume->name }}</h2>
    <p>Marca: {{ $singolo_perfume->brand }}</p>
    <p>Prezzo: {{ $singolo_perfume->price }}€</p>
    <p>Categoria: {{ $singolo_perfume->category }}€</p>
    <img src="https://loremflickr.com/320/240?random={{$singolo_perfume->image}}" alt="">
</div>
@endsection
