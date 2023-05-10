@extends('layouts.app')

<header>
    <nav>
        <img :src="" alt="">
        <ul class="nav-bar">
            @foreach($lists['headerSections'] as $headerSection)
                <li><a href="#">{{ $headerSection }}</a></li>
            @endforeach
        </ul>
    </nav>
</header>