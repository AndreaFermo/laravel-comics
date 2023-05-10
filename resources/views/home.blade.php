@extends('layouts.app')

@section('page-title', 'Home Page')


@section('menu')
    @foreach($headerSections as $headerSection)
        <li><a href="#">{{$headerSection}}</a></li>
    @endforeach
@endsection


@section('content')
    <h1>io sono il content</h1>
@endsection