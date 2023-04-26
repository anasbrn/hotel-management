@extends('layouts.layout')

@section('title')
    Home Page
@endsection

@section('content')
    <a href="{{ route('list-hotels') }}">All hotels</a>
@endsection