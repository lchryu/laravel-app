@extends('layouts.app')

@section('content')
    <p>This is Footer</p>
    {{ print_r(URL('images/zenitsu.jpg'))}}
    <img
        src="{{ URL('images/zenitsu.jpg') }}"
        width="400px"
        height="250px"
        alt="">
@endsection
