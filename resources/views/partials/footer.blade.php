<footer>
    <div class="footer-top">
        <div class="image-wrapper">
    
        </div>
        <div class="cards">
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
        </div>
    </div>

    <div class="footer-bottom">
        <div class="footer-wrapper">
            <div class="sign-up-button">SIGN-UP NOW!</div>
            <div class="socials">
                <a href="#">FOLLOW US</a>
                <ul>
                    @foreach($imagesNames as $imagesName)
                        <li><img src="{{Vite::asset('resources/img/footer-'. $imagesName.'.png')}}" alt=""></li>
                     @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>