@extends('index')

@section('content')
        @foreach($all_product as $key => $product)
            <!-- Start Single List  -->
            <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">
                    <div class="single-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="list-image overlay">
                                    <img src="{{URL::to('uploads/product/'.$product->product_image)}}" alt="#">
                                    <a data-toggle="modal" data-target="#{{($product->product_id)}}" class="buy"><i class="fa fa-shopping-bag"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 no-padding">
                                <div class="content">
                                    <h5 class="title"><a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">{{$product->product_name}}</a></h5>
                                    <p class="price with-discount">{{number_format($product->product_price).' '.'VNĐ'}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </a> 
         @endforeach
@endsection
