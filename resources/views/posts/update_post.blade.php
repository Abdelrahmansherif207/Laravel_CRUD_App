@extends('layouts.main')

@section('sidebar')
    @parent
@endsection

@section('content')
    <h1>{{ $message }}: {{$id}}</h1>
@endsection
