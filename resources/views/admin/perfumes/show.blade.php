
@extends('layouts.app')
@section('content')
    <div>
        <div id="user_index" class="row flex-column align-items-center  mb-5">
            <h1 class="col-12 text-center p-3 mb-5 shadow">
                DETTAGLI PRODOTTO
            </h1>
                    <div class="card m-3 shadow w-75 ">
                        <div class="card-body row">
                            <div class="col-md-12">
                                <h4>{{ $singolo_perfume->name }}</h4>
                                 <hr>
                                <h5>Marca: {{ $singolo_perfume->brand }}</h5>
                                <p>Prezzo: {{ $singolo_perfume->price }}€</p>
                                <hr>
                                <p>Categoria: {{ $singolo_perfume->category }}</p>
                                <p>Prezzo: 5.00€</p>
                                <hr>
                                <img class="w-25" src="{{$singolo_perfume->image}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <div >
                            <a  class="btn btn-outline-danger" href="{{ route('admin.perfumes.index') }}" >Indietro</a>
                        </div>
                    </div>

    </div>
@endsection
