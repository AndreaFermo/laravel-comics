<div class="bluebar-container">
    <div class="cards">
        @foreach($bluebar as $icon)
            <div class="card">
                <img src="{{Vite::asset('resources/img/'. $icon['image'])}}" alt="">
                <span>{{ $icon['text'] }}</span>
            </div>
        @endforeach
    </div>
</div>