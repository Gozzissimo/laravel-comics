@extends('guest.layout.base')

@section('documentTitle')
    DC Comics | Comics
@endsection

@section('content')
    <main class="comics">
        <section class="main-top">
            <div class="jumbotron">
                <h1>
                    CURRENT SERIES
                </h1>
            </div>
            <div class="container">
                <div class="comics flex">
                    @foreach ($comics as $comic)
                        <div class="comic-container">
                            <div class="img">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            </div>
                            <h2>{{ $comic['title'] }}</h2>
                        </div>
                    @endforeach
                </div>
                <div class="button">
                    <a class="load-more" href="#">
                        LOAD MORE
                    </a>
                </div>
            </div>
        </section>
        <section class="main-bottom">
            <div class="container">
                <ul class="flex">
                    <li class="flex">
                        <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="">
                        <a class="flex" href="#">
                            digital comics
                        </a>
                    </li>
                    <li class="flex">
                        <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="">
                        <a class="flex" href="#">
                            dc merchandise
                        </a>
                    </li>
                    <li class="flex">
                        <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="">
                        <a class="flex" href="#">
                            subscription
                        </a>
                    </li>
                    <li class="flex">
                        <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="">
                        <a class="flex" href="#">
                            comic shop locator
                        </a>
                    </li>
                    <li class="flex">
                        <img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="">
                        <a class="flex" href="#">
                            dc power visa
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </main>
@endsection