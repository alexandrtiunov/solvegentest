
<!DOCTYPE HTML>
<html>
<head>
    @section ('title')

        <title>Products</title>

    @show

    @section('link')
        <link href="{{ URL::to('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary JavaScript plugins) -->
        <script type='text/javascript' src="{{ URL::to('js/jquery-1.11.1.min.js')}}"></script>
        <!-- Custom Theme files -->
        <link href="{{ URL::to('css/style.css')}}" rel='stylesheet' type='text/css' />
        <link href="{{ URL::to('css/main.css')}}" rel='stylesheet' type='text/css' />
        <!-- Custom Theme files -->
        <!--//theme-style-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
        <!-- start menu -->
        <link href="{{ URL::to('css/megamenu.css')}}" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="{{ URL::to('js/megamenu.js')}}"></script>
        <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
        <script src="{{ URL::to('js/menu_jquery.js')}}"></script>
        <script src="{{ URL::to('js/simpleCart.min.js')}}"> </script>
        <script src="{{ URL::to('js/main.js')}}"> </script>
    @show

    @section('style')

        @show


</head>
<body>
<!-- header_top -->
<div class="top_bg">
    <div class="container">
        <div class="header_top">
            <div class="top_right">
                <a href="/products"> На главную </a>
                {{--<ul>--}}
                    {{--<li><a href="#">help</a></li>|--}}
                    {{--<li><a href="contact.html">Contact</a></li>|--}}
                    {{--<li><a href="#">Delivery information</a></li>--}}
                {{--</ul>--}}
            </div>
            <div class="top_left">
                {{--<h2><span></span> Call us : 032 2352 782</h2>--}}
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- header -->
<div class="header_bg">
    <div class="container">
        <div class="header">
            <div class="head-t">
                <div class="logo">
                    {{--<a href="index.html"><img src="images/logo.png" class="img-responsive" alt=""/> </a>--}}
                </div>
                <!-- start header_right -->
                <div class="header_right">
                    @guest
                    Здраствуйте, гость
                    <div class="rgt-bottom">
                        <div class="log">
                            <div class="login" >
                                <div id="loginContainer">
                                    <a href="{{ route('login') }}" id="loginButton"><span>Войти</span></a>
                                    {{--<div id="loginBox">--}}
                                        {{--<form id="loginForm">--}}
                                            {{--<fieldset id="body">--}}
                                                {{--<fieldset>--}}
                                                    {{--<label for="email">Email Address</label>--}}
                                                    {{--<input type="text" name="email" id="email">--}}
                                                {{--</fieldset>--}}
                                                {{--<fieldset>--}}
                                                    {{--<label for="password">Password</label>--}}
                                                    {{--<input type="password" name="password" id="password">--}}
                                                {{--</fieldset>--}}
                                                {{--<input type="submit" id="login" value="Sign in">--}}
                                                {{--<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>--}}
                                            {{--</fieldset>--}}
                                            {{--<span><a href="#">Forgot your password?</a></span>--}}
                                        {{--</form>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>
                        {{--<div class="reg">--}}
                            {{--<a href="{{ route('register') }}">Зарегистрироваться</a>--}}
                        {{--</div>--}}
                        @else
                                <h5>
                                    Вы вошли как, {{ Auth::user()->name }}
                                </h5>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="{{action('Admin\ProductController@index')}}" class="btn btn-primary">Управление товарами</a></td>
                                        <td><a href="{{action ('Admin\CategoryController@index')}}" class="btn btn-primary">Упраление категориями</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{action ('Admin\ProductController@create')}}" class="btn btn-primary">Добавить товар</a></td>
                                        <td><a href="{{action ('Admin\CategoryController@create')}}" class="btn btn-primary">Добавить категорию</a></td>
                                    </tr>
                                </table>
                            </div>
                            <div >
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Выйти
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                            @endguest
                        {{--<div class="cart box_1">--}}
                            {{--<a href="checkout.html">--}}
                                {{--<h3> <span class="simpleCart_total">$0.00</span> (<span id="simpleCart_quantity" class="simpleCart_quantity">0</span> items)<img src="images/bag.png" alt=""></h3>--}}
                            {{--</a>--}}
                            {{--<p><a href="javascript:;" class="simpleCart_empty">(empty card)</a></p>--}}
                            {{--<div class="clearfix"> </div>--}}
                        {{--</div>--}}
                        {{--<div class="create_btn">--}}
                            {{--<a href="checkout.html">CHECKOUT</a>--}}
                        {{--</div>--}}
                        {{--<div class="clearfix"> </div>--}}
                    </div>
                    {{--<div class="search">--}}
                        {{--<form>--}}
                            {{--<input type="text" value="" placeholder="search...">--}}
                            {{--<input type="submit" value="">--}}
                        {{--</form>--}}
                    {{--</div>--}}
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<div class="arriv">
    {{--<div class="container">--}}
        {{--<div class="arriv-top">--}}
            {{--<div class="col-md-6 arriv-left">--}}
                {{--<img src="images/1.jpg" class="img-responsive" alt="">--}}
                {{--<div class="arriv-info">--}}
                    {{--<h3>NEW ARRIVALS</h3>--}}
                    {{--<p>REVIVE YOUR WARDROBE WITH CHIC KNITS</p>--}}
                    {{--<div class="crt-btn">--}}
                        {{--<a href="details.html">TAKE A LOOK</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-6 arriv-right">--}}
                {{--<img src="images/2.jpg" class="img-responsive" alt="">--}}
                {{--<div class="arriv-info">--}}
                    {{--<h3>TUXEDO</h3>--}}
                    {{--<p>REVIVE YOUR WARDROBE WITH CHIC KNITS</p>--}}
                    {{--<div class="crt-btn">--}}
                        {{--<a href="details.html">SHOP NOW</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="clearfix"> </div>--}}
        {{--</div>--}}
        {{--<div class="arriv-bottm">--}}
            {{--<div class="col-md-8 arriv-left1">--}}
                {{--<img src="images/3.jpg" class="img-responsive" alt="">--}}
                {{--<div class="arriv-info1">--}}
                    {{--<h3>SWEATER</h3>--}}
                    {{--<p>REVIVE YOUR WARDROBE WITH CHIC KNITS</p>--}}
                    {{--<div class="crt-btn">--}}
                        {{--<a href="details.html">SHOP NOW</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-4 arriv-right1">--}}
                {{--<img src="images/4.jpg" class="img-responsive" alt="">--}}
                {{--<div class="arriv-info2">--}}
                    {{--<a href="details.html"><h3>Trekking Shoes<i class="ars"></i></h3></a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="clearfix"> </div>--}}
        {{--</div>--}}
        {{--<div class="arriv-las">--}}
            {{--<div class="col-md-4 arriv-left2">--}}
                {{--<img src="images/5.jpg" class="img-responsive" alt="">--}}
                {{--<div class="arriv-info2">--}}
                    {{--<a href="details.html"><h3>Casual Glasses<i class="ars"></i></h3></a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-4 arriv-middle">--}}
                {{--<img src="images/6.jpg" class="img-responsive" alt="">--}}
                {{--<div class="arriv-info3">--}}
                    {{--<h3>FRESH LOOK T-SHIRT</h3>--}}
                    {{--<div class="crt-btn">--}}
                        {{--<a href="details.html">SHOP NOW</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-4 arriv-right2">--}}
                {{--<img src="images/7.jpg" class="img-responsive" alt="">--}}
                {{--<div class="arriv-info2">--}}
                    {{--<a href="details.html"><h3>Elegant Watches<i class="ars"></i></h3></a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="clearfix"> </div>--}}
        {{--</div>--}}
    {{--</div>--}}
</div>

    @yield('content')

{{--<div class="foot-top">--}}
    {{--<div class="container">--}}
        {{--<div class="col-md-6 s-c">--}}
            {{--<li>--}}
                {{--<div class="fooll">--}}
                    {{--<h5>follow us on</h5>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<div class="social-ic">--}}
                    {{--<ul>--}}
                        {{--<li><a href="#"><i class="facebok"> </i></a></li>--}}
                        {{--<li><a href="#"><i class="twiter"> </i></a></li>--}}
                        {{--<li><a href="#"><i class="goog"> </i></a></li>--}}
                        {{--<li><a href="#"><i class="be"> </i></a></li>--}}
                        {{--<li><a href="#"><i class="pp"> </i></a></li>--}}
                        {{--<div class="clearfix"></div>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<div class="clearfix"> </div>--}}
        {{--</div>--}}
        {{--<div class="col-md-6 s-c">--}}
            {{--<div class="stay">--}}
                {{--<div class="stay-left">--}}
                    {{--<form>--}}
                        {{--<input type="text" placeholder="Enter your email to join our newsletter" required="">--}}
                    {{--</form>--}}
                {{--</div>--}}
                {{--<div class="btn-1">--}}
                    {{--<form>--}}
                        {{--<input type="submit" value="join">--}}
                    {{--</form>--}}
                {{--</div>--}}
                {{--<div class="clearfix"> </div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="clearfix"> </div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="footer">--}}
    {{--<div class="container">--}}
        {{--<div class="col-md-3 cust">--}}
            {{--<h4>CUSTOMER CARE</h4>--}}
            {{--<li><a href="#">Help Center</a></li>--}}
            {{--<li><a href="#">FAQ</a></li>--}}
            {{--<li><a href="buy.html">How To Buy</a></li>--}}
            {{--<li><a href="#">Delivery</a></li>--}}
        {{--</div>--}}
        {{--<div class="col-md-2 abt">--}}
            {{--<h4>ABOUT US</h4>--}}
            {{--<li><a href="#">Our Stories</a></li>--}}
            {{--<li><a href="#">Press</a></li>--}}
            {{--<li><a href="#">Career</a></li>--}}
            {{--<li><a href="contact.html">Contact</a></li>--}}
        {{--</div>--}}
        {{--<div class="col-md-2 myac">--}}
            {{--<h4>MY ACCOUNT</h4>--}}
            {{--<li><a href="register.html">Register</a></li>--}}
            {{--<li><a href="#">My Cart</a></li>--}}
            {{--<li><a href="#">Order History</a></li>--}}
            {{--<li><a href="buy.html">Payment</a></li>--}}
        {{--</div>--}}
        {{--<div class="col-md-5 our-st">--}}
            {{--<div class="our-left">--}}
                {{--<h4>OUR STORES</h4>--}}
            {{--</div>--}}
            {{--<div class="our-left1">--}}
                {{--<div class="cr_btn">--}}
                    {{--<a href="#">SOLO</a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="our-left1">--}}
                {{--<div class="cr_btn1">--}}
                    {{--<a href="#">BOGOR</a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="clearfix"> </div>--}}
            {{--<li><i class="add"> </i>Jl. Haji Muhidin, Blok G no.69</li>--}}
            {{--<li><i class="phone"> </i>025-2839341</li>--}}
            {{--<li><a href="mailto:info@example.com"><i class="mail"> </i>info@sitename.com </a></li>--}}

        {{--</div>--}}
        {{--<div class="clearfix"> </div>--}}
        {{--<p>Copyrights © 2015 Gretong. All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>--}}
    {{--</div>--}}
{{--</div>--}}
</body>
</html>