@extends('layouts.app')

@section('content')
    <a href="{{ route('admin.perfumes.create') }}">Crea nuovo perfume</a>
    <table class="">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">
                    Title
                </th>
                <th scope="col">Body</th>
                <th scope="col">Category</th>
                <th scope="col">Tags</th>
                <th scope="col">actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($perfumes as $elem)
                <tr>
                    <td>{{ $elem->id }}</td>
                    <td>
                        <a href="{{ route('admin.perfumes.show', $elem->id) }}">
                            {{ $elem->name }}
                        </a>
                    </td>
                    <td>{{ $elem->brand }}</td>
                    <td>

                            {{ $elem->category }}


                    </td>

                    <td class="justify-content-center">
                        <a class="" href="{{ route('admin.perfumes.edit', $elem->id) }}">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>

                        <form action="{{ route('admin.perfumes.destroy', $elem->id) }}" method="POST">

                            @csrf
                            @method('DELETE')
                            <Button type="submit" class="btn btn-danger">
                                <i class="fa-solid fa-trash"></i>
                            </Button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $perfumes->links() }}
    </div>
@endsection
