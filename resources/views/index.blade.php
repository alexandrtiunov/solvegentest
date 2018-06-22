@extends('layouts.main')

@section('content')

    <div class="special">
        <div class="container">
            <div class="w_nav1">
                <h4>All</h4>
                <ul>
                    @foreach($categories as $category)
                    <li><a href="women.html">{{$category->title}}</a></li>
                    @endforeach
                </ul>
            </div>
            <h3>Товары</h3>
            <div class="specia-top">
                <ul class="grid_2">
                    @foreach($products as $product)
                        <li>
                            <a href="{{action('IndexController@detail', [$product->category->short_name, $product->id])}}"><img
                                        src="/images/product-foto-main/{{$product->img_path}}" class="img-responsive"
                                        alt=""></a>
                            <div class="special-info grid_1 simpleCart_shelfItem">
                                <h5>{{mb_strimwidth($product->model, 0,100)}}</h5>
                                {{--<div class="item_add"><span class="item_price"><h6>ONLY $40.00</h6></span></div>--}}
                                {{--<div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>--}}
                            </div>
                        </li>
                    @endforeach
                    <div class="clearfix"></div>
                </ul>
            </div>
        </div>
    </div>



@stop