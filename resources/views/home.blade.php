@extends('layouts.app')

@section('page-title', 'Home Page')


@section('content')
    <div class="cards">
        @foreach($comicsList as $comic)
            <div class="card">
                <div class="image-wrapper">
                    <img src="{{$comic['thumb']}}" alt="title">
                </div>
                <h5>{{$comic['series']}}</h5>
            </div>
        @endforeach
    </div>
    <div class="button-container">
        <a href="#">LOAD MORE</a>
    </div>
@endsection


