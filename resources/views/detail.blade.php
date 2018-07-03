@extends('layouts.main')

@section ('title')

    <title>{{$title}}</title>
    @stop

@section('content')
    <div class="col-md-9 det">
        <div class="single_left">
            <div class="grid images_3_of_2">
                <ul id="etalage">
                    <li>
                        <a href="optionallink.html">
                            <img class="etalage_thumb_image" src="/images/product-foto-main/{{$product->img_path}}" class="img-responsive"/>
                            <img class="etalage_source_image" src="images/d1.jpg" class="img-responsive" title=""/>
                        </a>
                    </li>
                    {{--<li>--}}
                        {{--<img class="etalage_thumb_image" src="images/d2.jpg" class="img-responsive"/>--}}
                        {{--<img class="etalage_source_image" src="images/d2.jpg" class="img-responsive" title=""/>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<img class="etalage_thumb_image" src="images/d3.jpg" class="img-responsive"/>--}}
                        {{--<img class="etalage_source_image" src="images/d3.jpg" class="img-responsive"/>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<img class="etalage_thumb_image" src="images/d4.jpg" class="img-responsive"/>--}}
                        {{--<img class="etalage_source_image" src="images/d4.jpg" class="img-responsive"/>--}}
                    {{--</li>--}}
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="desc1 span_3_of_2">
                <h3>{{$product->model}}</h3>
                <span class="brand">Brand: <a href="#">{{$product->manufacturer}} </a></span>
                <br>
                <span class="code">Product Code: {{$product->id}}</span>
                {{--<p>when an unknown printer took a galley of type and scrambled it to make</p>--}}
                {{--<div class="price">--}}
                    {{--<span class="text">Price:</span>--}}
                    {{--<span class="price-new">$110.00</span><span class="price-old">$100.00</span>--}}
                    {{--<span class="price-tax">Ex Tax: $90.00</span><br>--}}
                    {{--<span class="points"><small>Price in reward points: 400</small></span><br>--}}
                {{--</div>--}}
                {{--<div class="det_nav1">--}}
                    {{--<h4>Select a size :</h4>--}}
                    {{--<div class=" sky-form col col-4">--}}
                        {{--<ul>--}}
                            {{--<li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>L</label></li>--}}
                            {{--<li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>S</label></li>--}}
                            {{--<li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>M</label></li>--}}
                            {{--<li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>XL</label></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="btn_form">--}}
                    {{--<a href="checkout.html">buy</a>--}}
                {{--</div>--}}
                {{--<a href="#"><span>login to save in wishlist </span></a>--}}

            </div>
            <div class="clearfix"></div>
        </div>
        <div class="single-bottom1">
            <h6>Описание</h6>
            <p class="prod-desc">{{$product->discription}}</p>
        </div>
    </div>

@stop