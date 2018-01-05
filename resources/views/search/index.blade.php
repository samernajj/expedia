@extends('layouts.layout')

@section('contents')
<h1>Search Hotels</h1>
<hr>
@include('search.form')
<hr>
@include('search.result')

@endsection