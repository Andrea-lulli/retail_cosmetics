@extends('layouts.app')

@section('content')
    <div class="text-center">
        <img src="https://loremflickr.com/320/240?random={{$singolo_perfume->image}}" alt="">

        <h1>{{ $singolo_perfume->name }}</h1>
        <p>{{ $singolo_perfume->brand }}</p>



    </div>
@endsection
