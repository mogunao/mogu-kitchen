@extends('layouts.app')

@section('content')

    <h1>レストラン新規作成ページ</h1>

    {!! Form::model($restaurant, ['route' => 'restaurants.store']) !!}

        {!! Form::label('content', 'レストラン:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('title', '感想:') !!}
        {!! Form::text('title') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

@endsection