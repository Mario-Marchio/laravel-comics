<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>Document</title>
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
        <div class="jumbotron"></div>
        <div class="container card-container">
            @foreach ($ComicBooks as $ComicBook)
                <div class="card">
                    <a href="{{ route('combook') }}">
                        <img :src="{{ $ComicBook['thumb'] }}">
                        <h3>{{ $ComicBook['title'] }}</h3>
                    </a>
                </div>
            @endforeach
        </div>
        <main></main>
        <footer></footer>
</body>

</html>
