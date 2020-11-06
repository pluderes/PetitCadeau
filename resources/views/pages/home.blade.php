@extends('layout')
@section('content')
		<section id="introduce" class="section-padding">
            <div class="container text-center">
                <h2 class="title" style="color: lightcoral;">HOT DEAL</h2>
                <p class="sub-title" style="color: lightcoral;">----------</p>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="item">
                            <figure>
                                <img src="{{('public/Frontend/image/petit/couple-cup-FL.jpg')}}" alt="">
                                <figcaption>
                                    <h3>Bag</h3>
                                    <a href="{{URL::TO('/detail')}}" class="btn-WN">Watch now</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="introduce2" class="section-padding">
            <div class="container text-center">
                <h2 class="title" style="color: pink;">SALE OFF</h2>
                <p class="sub-title" style="color: pink;">----------</p>
            </div>
        </section>
        <section id="introduce" class="section-padding">
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="item">
                            <figure>
                                <img src="{{('public/Frontend/image/petit/duck.jpg')}}" alt="">
                                <figcaption>
                                    <h3>Duck</h3>
                                    <p>Combo 2 big, 5 small</p>
                                    <p class="product-price">300.000đ</p>
                                    <p class="product-price-old">400.000đ</p>
                                    <a href="#" class="btn-WN">Watch now</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="introduce2" class="section-padding">
            <div class="container text-center">
                <h2 class="title" style="color: pink;">LASTEST PRODUCTS</h2>
                <p class="sub-title" style="color: pink;">----------</p>
            </div>
        </section>
        <section id="introduce" class="section-padding">
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="item">
                            <figure>
                                <img src="{{('public/Frontend/image/petit/glass-pink.jpg')}}" alt="">
                                <figcaption>
                                    <h3>Glass pink</h3>
                                    <p>Beautiful glass for Lady</p>
                                    <p class="product-price">300.000đ</p>
                                    <a href="#" class="btn-WN">Watch now</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="introduce2" class="section-padding">
            <div class="container text-center">
                <h2 class="title" style="color: pink;">COLLECTION</h2>
                <p class="sub-title" style="color: pink;">Our product pictures</p>
            </div>
        </section>
        <section id="album-picture" class="section-padding text-center">
            <div class="grid-album">
                <div class="grid-item"><img src="{{('public/Frontend/image/petit/bag.jpg')}}" alt=""></div>
                <div class="grid-item"><img src="{{('public/Frontend/image/petit/bracelet.jpg')}}" alt=""></div>
                <div class="grid-item"><img src="{{('public/Frontend/image/petit/cb-cuppot.jpg')}}" alt=""></div>
                <div class="grid-item"><img src="{{('public/Frontend/image/petit/circle-clock.jpg')}}" alt=""></div>
                <div class="grid-item"><img src="{{('public/Frontend/image/petit/duck.jpg')}}" alt=""></div>
                <div class="grid-item"><img src="{{('public/Frontend/image/petit/usblamp-dt.jpg')}}" alt=""></div>
                <div class="grid-item"><img src="{{('public/Frontend/image/petit/scissor.jpg')}}" alt=""></div>
                <div class="grid-item"><img src="{{('public/Frontend/image/petit/gift.jpg')}}" alt=""></div>
            </div>
        </section>
@endsection