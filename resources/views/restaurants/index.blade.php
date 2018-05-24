@extends('layouts.app')

@section('content')

    <h1>レストラン一覧</h1>

    @if (count($restaurants) > 0)
        <ul>
            @foreach ($restaurants as $restaurant)
                <li>{!! link_to_route('restaurants.show', $restaurant->id, ['id' => $restaurant->id]) !!} : {{ $restaurant->content }}</li>
            @endforeach
        </ul>
    @endif
    
    {!! link_to_route('restaurants.create', '新規レストランの投稿') !!}

@endsection