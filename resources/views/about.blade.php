@extends('layouts.app')

@section('content')
    <h1>This is About Page, with shared Header, Footer</h1>
    {{
        $x = 2
    }}
    @if($x > 2)
        <h3>x is greater than 2</h3>
    @elseif($x < 2)
        <h3>x is less than 2</h3>
    @else
        <h3>x is equal to 2</h3>
    @endif

    {{--@unless(empty($name))--}}
    {{--    <h3>name is not empty</h3>--}}
    {{--    {{ $name }}--}}
    {{--@endunless--}}
    {{--    @if (!empty($name))--}}
    {{--        <h3>name is not empty</h3>--}}
    {{--        {{ $name }}--}}
    {{--    @endif--}}
    @empty(!$name)
        <h3>name is not empty</h3>
    @endempty
    @empty($age)
        <h3>age is empty</h3>
    @endempty

    @isset($name)
        <h3>name is set</h3>
    @endisset

    @switch($name)
        @case('John')
            <h3>name is John</h3>
            @break
        @case('LCH')
            <h3>Name is mr LCH</h3>
            @break
        @default
            <h3>name is not John or Doe</h3>
            @break

    @endswitch
    @for($i = 0; $i < 5; $i++)
        <h2>i = {{ $i }}</h2>
    @endfor
    <h3>---------------------------</h3>
    @foreach($names as $eachName)
        <h3>{{ $eachName }}</h3>
    @endforeach
    <h3>---------------------------</h3>
    {{ $i = 0 }}
    @while($i++ < 5)
        <h1>
            {{ $i }}
        </h1>
    @endwhile

@endsection
