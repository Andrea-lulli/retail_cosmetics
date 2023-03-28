@extends('layouts.app')

@section('content')
<div id="user_index" class="row flex-column align-items-center mb-5">

    <h1 class="col-12 text-center p-3 mb-5 shadow">
        I TUOI PRODOTTI
    </h1>

    @foreach ($perfumes as $elem)
    <div class="card m-3 shadow w-75">
        <div class="card-body row">
            <div class="col-md-8 px-0">
                <!-- nome e info -->
                <div class="d-flex align-items-center">
                    <div class="col-10 px-0">
                        <h4>{{$elem->name}}</h4>
                    </div>
                    <div class="col-2">
                        <a href="{{ route('admin.perfumes.show', $elem->id) }}" class="btn btn-outline-info ">Info</a>
                    </div>
                </div>

                <hr>

                 <!-- prezzo -->
                <p class="card-title my-3">Prezzo: {{ $elem->price}} €</p>

                 <!-- pulsante per modifica -->
                <button type="button" class="btn btn-outline-primary">
                    <a href="{{ route('admin.perfumes.edit', $elem->id) }}"><i class="fa-regular fa-pen-to-square"></i></a>
                </button>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                    data-bs-target="#deleteModal-{{ $elem->id }}">
                    <i class="fa-solid fa-trash"></i>
                </button>

                <!-- Delete Modal -->
                <div class="modal fade" id="deleteModal-{{ $elem->id }}" data-bs-backdrop="static"
                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteModalLabel-{{ $elem->id }}"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- elimina prodotto -->
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="deleteModalLabel-{{ $elem->id }}">Elimina prodotto</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Sei sicuro di voler eliminare "{{ $elem->name }}" ?
                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                <form action="{{ route('admin.perfumes.destroy', $elem->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Elimina</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4  d-flex align-items-center justify-content-center">
                <img class="w-50" src="{{$elem->image}}" alt="">
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="d-flex justify-content-center">
    {{ $perfumes->links() }}
</div>
@endsection
