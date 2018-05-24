@extends('layouts.app')

@section('content')

    <h1>id: {{ $restaurant->id }} のレストラン編集ページ</h1>
    

    {!! Form::model($restaurant, ['route' => ['restaurants.update', $restaurant->id], 'method' => 'put']) !!}

        {!! Form::label('content', 'レストラン:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('title', '感想:') !!}
        {!! Form::text('title') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection