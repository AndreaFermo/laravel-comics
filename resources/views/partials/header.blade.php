<header>
    <nav>
        <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="dc logo small">
        <ul class="nav-bar">
            @foreach($headerSections as $headerSection)
                <li><a href="#">{{$headerSection}}</a></li>
            @endforeach
        </ul>
    </nav>
</header>