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

@section('imageMenu')
    @foreach($imagesNames as $imagesName)
        <img src="{{Vite::asset('resources/img/footer-'. $imagesName.'.png')}}" alt="ciao"></li>
    @endforeach
 @endsection

 @section('footerMenu')
    @foreach($footerSections as $footerSection)
        <div>
            <h3 class="card-title">{{$footerSection['name']}}</h3>
            <ul>
                @foreach($footerSection['contents'] as $content)
                    <li >
                        <a href="#">{{$content}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endforeach
@endsection