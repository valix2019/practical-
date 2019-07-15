@extends('layouts.master')
@section('title', 'Home Dashboard')
@section('menu', 'Home Menu')
@section('content')
    <div class="title m-b-md">  
        Laravel Home Dashboard
        <br/><b>{{ $some_param }}</b>
    </div>
@endsection