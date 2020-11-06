@extends('layout')
@section('content')
	<!--product-detail-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center">
                        <div class="item">
                            <figure>
                                <img src="{{('public/Frontend/image/petit/couple-cup-FL.jpg')}}" alt="">
                                <figcaption>
                                    <div class="grid-album">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="grid-item"><img src="{{('public/Frontend/image/petit/couple-cup-FL-dt.jpg')}}" alt=""></div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="grid-item"><img src="{{('public/Frontend/image/petit/couple-cup-FL-dt1.jpg')}}" alt=""></div>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="item-infor" style="color: lightcoral;">
                            <h2>Couple-Cup-FL</h2>
                                <p>Desc: ...</p>
                                <p>Price: 100000</p>
                                <p>Quantity:</p>
                                <button type="button" class="btn btn-fefault cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        Add to cart
                                </button>
                        </div>
                    </div>
                </div>
            </div>
@endsection