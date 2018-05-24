@extends('layouts.app')

@section('content')

    <h1>レストラン新規作成ページ</h1>

    {!! Form::model($restaurant, ['route' => 'restaurants.store']) !!}

        {!! Form::label('content', 'レストラン:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

@endsection