@extends('layouts.layout')

@section('title')
    All hotels
@endsection

@section('content')
    @foreach ($hotels as $hotel)
        <a href="{{ route('show', ['id' => $hotel->id]) }}">{{ $hotel->name }}</a>
    @endforeach
@endsection