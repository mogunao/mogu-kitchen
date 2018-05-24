@extends('layouts.app')

@section('content')

    <h1>id = {{ $restaurant->id }} のレストラン詳細ページ</h1>

    <p>レストラン: {{ $restaurant->content }}</p>
    <p>感想: {{ $restaurant->content }}</p>
    
    {!! link_to_route('restaurants.edit', 'このレストランを編集', ['id' => $restaurant->id]) !!}
    
    {!! Form::model($restaurant, ['route' => ['restaurants.destroy', $restaurant->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}

@endsection