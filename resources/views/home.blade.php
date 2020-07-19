@extends('layout')

@section('title')
    HomePage
@endsection
@section("content")
<h2>Ingredients Home Page</h2>
    @foreach($data as $value)
    <li>Name : {{ $value -> name }}</li>
    <li>Ingredients : {{ $value -> ingredients }}</li>
    <li>Category : {{ $value -> category }}</li>
    @endforeach
@endsection



