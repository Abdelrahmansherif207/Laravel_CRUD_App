@extends('layouts.main')

@section('sidebar')
    @parent
@endsection

@section('content')
    <h1>{{ $message }}</h1>
@endsection
