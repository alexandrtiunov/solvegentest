@extends('layouts.main')

@section('content')

    <div class="special">
        <div class="container">
            <div class="w_nav1">
                <ul>
                    <li> <a href="{{action('IndexController@index')}}">Все товары</a></li>
                    @foreach($categories as $category)
                    <li><a href="{{action ('IndexController@index', $category->short_name)}}">{{$category->title}}</a></li>
                    @endforeach
                </ul>
            </div>
            <h3>Товары</h3>
            <div class="specia-top">
                <ul class="grid_2">
                    @foreach($products as $product)
                        <li>
                            @foreach($product->resource as $item)
                                <?php $pathToModel = str_replace(' ', '_', $product->model);?>
                            <a href="{{action('IndexController@detail', [$product->category->short_name, $product->id])}}"><img
                                        src="/images/product/preview/{{$pathToModel}}/{{$item->path}}" class="img-responsive"
                                        alt=""></a>
                            <div class="special-info grid_1 simpleCart_shelfItem">
                                <h5>{{$product->model}}</h5>
                                {{--<div class="item_add"><span class="item_price"><h6>ONLY $40.00</h6></span></div>--}}
                                {{--<div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>--}}
                            </div>
                                @endforeach
                        </li>
                    @endforeach
                    <div class="clearfix"></div>
                </ul>
            </div>
        </div>
    </div>



@stop