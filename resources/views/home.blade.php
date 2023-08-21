@extends('layout')

@section('content')
    <div class="bgc-black py-32">
        <div class="container card-container ">
            @foreach ($ComicBooks as $ComicBook)
                <div class="card">
                    <a href="{{ route('combook') }}">
                        <img :src="{{ $ComicBook['thumb'] }}">
                        <h3>{{ $ComicBook['title'] }}</h3>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
