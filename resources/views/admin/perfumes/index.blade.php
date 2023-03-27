@extends('layouts.app')

@section('content')
<h1 class="text-center">Lista Prodotti</h1>
<table class="table table-striped  ">
    <thead class="">
        <tr>
            <th class="w-25">Nome</th>
            <th class="w-15">Prezzo</th>
            <th class="w-30">Immagine</th>
            <th class="w-10">Elimina</th>
            <th class="w-10">Modifica</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($perfumes as $elem)
        <tr>
            <td><a href="{{ route('admin.perfumes.show', $elem->id) }}">{{ $elem->name }}</a></td>
            <td>{{ $elem->price}} €</td>
            <td>
                <img class="w-25" src="{{$elem->image}}" alt="">
            </td>
            <td>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                    data-bs-target="#deleteModal-{{ $elem->id }}">
                    <i class="fa-solid fa-trash"></i>
                </button>

                <!-- Delete Modal -->
                <div class="modal fade" id="deleteModal-{{ $elem->id }}" data-bs-backdrop="static"
                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteModalLabel-{{ $elem->id }}"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="deleteModalLabel-{{ $elem->id }}">Elimina prodotto</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Sei sicuro di voler eliminare il prodotto? "{{ $elem->name }}"?
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
            </td>
            <td>
                <a href="{{ route('admin.perfumes.edit', $elem->id) }}" class="btn btn-primary">Modifica</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-center">
    {{ $perfumes->links() }}
</div>
@endsection
