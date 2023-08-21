<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>

<body>
    <header>
        <div class="h-40 bgc-black"></div>
        <div class="container header-nav">
            <figure>
                <img class="p-10" src="{{ asset('img/dc-logo.png') }}" alt="dc-logo">
            </figure>
            <div class="r-header-nav">
                <ul class="d-flex">
                    <li>
                        <a class="color-black px-55 py-5 " href="#">Characters</a>
                    </li>
                    <li>
                        <a class="color-black px-55 py-5 " href="#">Comics</a>
                    </li>
                    <li>
                        <a class="color-black px-55 py-5 " href="#">Movies</a>
                    </li>
                    <li>
                        <a class="color-black px-55 py-5 " href="#">TV</a>
                    </li>
                    <li>
                        <a class="color-black px-55 py-5 " href="#">Games</a>
                    </li>
                    <li>
                        <a class="color-black px-55 py-5 " href="#">Collectibles</a>
                    </li>
                    <li>
                        <a class="color-black px-55 py-5 " href="#">Videos</a>
                    </li>
                    <li>
                        <a class="color-black px-55 py-5 " href="#">Fans</a>
                    </li>
                    <li>
                        <a class="color-black px-55 py-5 " href="#">News</a>
                    </li>
                    <li>
                        <a class="color-black px-55 py-5 " href="#">Shop</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="bgc-black">
            <div class="jumbotron"></div>
            <div class="container card-container ">
                @foreach ($ComicBooks as $ComicBook)
                    <div class="card">
                        <a href="{{ route('combook') }}">
                            <img :src="{{ $ComicBook['thumb'] }}">
                            <h3>{{ $ComicBook['title'] }}</h3>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <main>
            <div class="bgc-l-blue">
                <div class="container nav-main">
                    <ul class="d-flex">
                        <li class="nav-main-li">
                            <img class="nav-main-img" src="{{ asset('img/buy-comics-digital-comics.png') }}"
                                alt="">
                            <a class="nav-main-a" href="#">DIGITAL COMICS</a>
                        </li>
                        <li class="nav-main-li">
                            <img class="nav-main-img" src="{{ asset('img/buy-comics-merchandise.png') }}"
                                alt="">
                            <a class="nav-main-a" href="#">DC MERCHANDISE</a>
                        </li>
                        <li class="nav-main-li">
                            <img class="nav-main-img" src="{{ asset('img/buy-comics-subscriptions.png') }}"
                                alt="">
                            <a class="nav-main-a" href="#">SUBSCRIPTION</a>
                        </li>
                        <li class="nav-main-li">
                            <img class="nav-main-img" src="{{ asset('img/buy-comics-shop-locator.png') }}"
                                alt="">
                            <a class="nav-main-a" href="#">COMIC SHOP LOCATOR</a>
                        </li>
                        <li class="nav-main-li">
                            <img class="nav-main-img" src="{{ asset('img/buy-dc-power-visa.png') }}" alt="">
                            <a class="nav-main-a" href="#">DC POWER VISA</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="dc-bg">
                <div class="container d-flex">
                    <div class="main-container">
                        <div class="main-list-name">DC COMICS</div>
                        <ul>
                            <li><a class="main-a" href="#">lorem</a></li>
                            <li><a class="main-a" href="#">lorem</a></li>
                            <li><a class="main-a" href="#">lorem</a></li>
                            <li><a class="main-a" href="#">lorem</a></li>
                            <li><a class="main-a" href="#">lorem</a></li>
                        </ul>
                        <div class="main-list-name">SHOP</div>
                        <ul>
                            <li><a class="main-a" href="#">lorem</a></li>
                            <li><a class="main-a" href="#">lorem</a></li>
                        </ul>
                    </div>
                    <div class="main-container">
                        <div class="main-list-name">DC</div>
                        <ul>

                            <li><a class="main-a" href="#">lorem</a></li>
                            <li><a class="main-a" href="#">lorem</a></li>
                            <li><a class="main-a" href="#">lorem</a></li>
                            <li><a class="main-a" href="#">lorem</a></li>
                            <li><a class="main-a" href="#">lorem</a></li>
                            <li><a class="main-a" href="#">lorem</a></li>
                        </ul>
                    </div>
                    <div class="main-container">
                        <div class="main-list-name">SITES</div>
                        <ul>
                            <li><a class="main-a" href="#">lorem</a></li>
                            <li><a class="main-a" href="#">lorem</a></li>
                            <li><a class="main-a" href="#">lorem</a></li>
                            <li><a class="main-a" href="#">lorem</a></li>
                            <li><a class="main-a" href="#">lorem</a></li>
                        </ul>
                    </div>
                    <img class="img-main" src="{{ asset('img/dc-logo-bg.png') }}" alt="">

                </div>
            </div>
        </main>
        <footer></footer>
</body>

</html>
