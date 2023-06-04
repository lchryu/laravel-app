@extends('layouts.app')

@section('content')
    <h1>PageController.index, with shared Header, Footer</h1>
    {{-- The storage is more secure    --}}
    <img
        src="{{ asset('storage/zenitsu.jpg') }}"
        width="400px"
        height="250px"
        alt="">
@endsection
