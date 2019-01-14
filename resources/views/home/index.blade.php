@extends('home.header')

@section('content')



<!-- HOME SLIDER -->
<div class="slider-wrap">
    <div class="fullwidthbanner-container">
        <div class="fullwidthbanner">
            <ul>
                <li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-saveperformance="on">
                    <!--MAIN IMAGE-->
                    <img src="{{ asset('index/img/slider/slider1.jpg ') }}" alt="" data-bgposition="center top" data-duration=""
                        data-ease="Power0.easeInOut" data-bgfit="cover" data-bgrepeat="no-repeat" />
                    <!-- LAYER NR. -->
                    <div class="tp-caption skewfromrightshort skewtorightshort tp-resizeme" data-x="center"
                        data-hoffset="0" data-y="center" data-voffset="-150" data-speed="500" data-start="500"
                        data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0.01"
                        data-endelementdelay="0.1" data-endspeed="500" data-endeasing="Power4.easeIn"
                        style="z-index: 5; color: #fff; text-align: left !important; line-height: 100%;
                        font-size: 60px; letter-spacing: 6px; text-transform: uppercase; font-weight: 900;">
                        我们进口各种型号的三角带,同步带,欧皮特optibelt
                    </div>
                    <!-- LAYERS 3-->
                    <div class="tp-caption skewfromrightshort skewtorightshort tp-resizeme splitted"
                        data-x="center" data-hoffset="0" data-y="center" data-voffset="-30" data-speed="500"
                        data-start="1300" data-easing="Power4.easeInOut" data-splitin="chars" data-splitout="none"
                        data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="500" style="z-index: 4;
                        font-size: 35px; line-height: 30px; text-transform: none; font-weight: 400; letter-spacing: 4px;
                        color: #fff; text-align: right !important; max-width: auto; max-height: auto;
                        white-space: nowrap;">
                        国产三力士三角带,购买的方式非常灵活,可以批量购买,也可以买一个试一下,服务到位
                    </div>
                    <div class="tp-caption tp-fade fadeout tp-resizeme" data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="75" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="500" data-start="1500" data-easing="Power3.easeInOut" data-splitin="none"
                        data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" data-endspeed="500"
                        style="z-index: 7;">
                        <a class="btn btn-default btn-icon" style="font-size: 15px; text-align: left !important;
                            padding: 12px 22px; font-weight: bold; color: #313131; text-transform: uppercase;
                            line-height: 24px;" href="#">欧皮特三力士三角带一级代理经销商<i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </li>
                <li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-saveperformance="on">
                    <!--MAIN IMAGE-->
                    <img src="{{ asset('index/img/slider/slider6_2.jpg ') }}" alt="" data-bgposition="center center" data-duration=""
                        data-ease="Power0.easeInOut" data-bgfit="cover" data-bgrepeat="no-repeat" />
                    <!-- LAYER NR. -->
                    <div class="tp-caption skewfromrightshort skewtorightshort tp-resizeme" data-x="center"
                        data-hoffset="0" data-y="center" data-voffset="-150" data-speed="500" data-start="500"
                        data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0.01"
                        data-endelementdelay="0.1" data-endspeed="500" data-endeasing="Power4.easeIn"
                        style="z-index: 5; color: #fff; text-align: left !important; line-height: 100%;
                        font-size: 60px; letter-spacing: 6px; text-transform: uppercase; font-weight: 900;">
                        零售购方便,批量购买价格优惠
                    </div>
                    <!-- LAYERS 3-->
                    <div class="tp-caption skewfromrightshort skewtorightshort tp-resizeme splitted"
                        data-x="center" data-hoffset="0" data-y="center" data-voffset="-30" data-speed="500"
                        data-start="1300" data-easing="Power4.easeInOut" data-splitin="chars" data-splitout="none"
                        data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="500" style="z-index: 4;
                        font-size: 35px; line-height: 30px; text-transform: none; font-weight: 400; letter-spacing: 4px;
                        color: #fff; text-align: right !important; max-width: auto; max-height: auto;
                        white-space: nowrap;">
                        欧皮特三角带,同步带,活络带,输送带,传送带等各种型号的产品
                    </div>
                    <div class="tp-caption tp-fade fadeout tp-resizeme" data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="65" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="500" data-start="1500" data-easing="Power3.easeInOut" data-splitin="none"
                        data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" data-endspeed="500"
                        style="z-index: 7;">
                        <a class="btn btn-default btn-icon" style="font-size: 15px; text-align: left !important;
                            padding: 12px 22px; font-weight: bold; color: #313131; text-transform: uppercase;
                            line-height: 24px;" href="#">三角带询价<i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- END HOME SLIDER -->


<!-- banner-area start -->
<div class="banner-area">
    <div class="container">
        <div class="row">
            <!-- single-banner start -->
            <div class="col-lg-4 col-md-4 col-sm-4">
                <a href="#">
                    <div class="single-banner">
                        <img src="{{ asset('index/img/banner/2.jpg ') }}" alt="" />
                        <div class="banner-details">
                            <div class="mask">                                    
                                <p>
                                    A wonderful serenity has taken possession of my entire soul, like these sweet mornings
                                    of spring which I enjoy with my whole heart.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- single-banner end -->
            <!-- single-banner start -->
            <div class="col-lg-4 col-md-4 col-sm-4">
                <a href="#">
                    <div class="single-banner">
                        <img src="{{ asset('index/img/banner/3.jpg ') }}" alt="" />
                        <div class="banner-details">
                            <div class="banner-details">
                                <div class="mask">                                       
                                    <p>
                                        A wonderful serenity has taken possession of my entire soul, like these sweet mornings
                                        of spring which I enjoy with my whole heart.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- single-banner end -->
            <!-- single-banner start -->
            <div class="col-lg-4 col-md-4 col-sm-4">
                <a href="#">
                    <div class="single-banner">
                        <img src="{{ asset('index/img/banner/5.jpg ') }}" alt="" />
                        <div class="banner-details">
                            <div class="mask">                                   
                                <p>
                                    A wonderful serenity has taken possession of my entire soul, like these sweet mornings
                                    of spring which I enjoy with my whole heart.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- single-banner end -->
        </div>
    </div>
</div>
<!-- banner-area end -->
<!-- service-area start -->
<div class="service-area pad-top">
    <div class="container">
        <div class="row">
            <!-- single-service start -->
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single-service">
                    <div class="service-icon">
                        <i class="fa fa-comments"></i>
                    </div>
                    <div class="service-text">
                        <h2>
                            三角带批发联系方式</h2>
                        <p>
                            我们的工厂在山东泰安,同时经营其他品牌传送带代理optibelt,derco,芬纳等</p>
                    </div>
                </div>
            </div>
            <!-- single-service end -->
            <!-- single-service start -->
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single-service">
                    <div class="service-icon">
                        <i class="fa fa-truck"></i>                            
                    </div>
                    <div class="service-text">
                        <h2>
                            输送带物流政策</h2>
                        <p>
                            零售物流带等皮带都有现货,批发代理动力带需要提前预定,工厂定做都要提前预定</p>
                    </div>
                </div>
            </div>
            <!-- single-service end -->
            <!-- single-service start -->
            <div class="col-lg-4 col-md-4 hidden-sm">
                <div class="single-service">
                    <div class="service-icon">
                        <i class="fa fa-money"></i>
                    </div>
                    <div class="service-text">
                        <h2>
                            传送带问题</h2>
                        <p>
                            动力带输送带等日产使用遇到问题,需要提前联系,维修费用由客户自己承担</p>
                    </div>
                </div>
            </div>
            <!-- single-service end -->
        </div>
    </div>
</div>
<!-- service-area end -->
<!-- features-area start -->
<div class="features-area pad-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2>
                        三角带厂家种类</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="product-tab">
                    <!-- Nav tabs -->
                    <ul class="tab-menu" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                            data-toggle="tab">传送带品牌列表</a></li>
                        <li role="presentation"><a href="#men" aria-controls="men" role="tab" data-toggle="tab">
                            三角带品牌列表</a></li>
                        <li role="presentation"><a href="#women" aria-controls="women" role="tab" data-toggle="tab">
                            同步带</a></li>
                        <li role="presentation"><a href="#kids" aria-controls="kids" role="tab" data-toggle="tab">
                            硅胶带</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <div class="row">
                                <div class="product-curosel">
                                    <!-- single-product start -->
                                    <div class="col-lg-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="{{asset('index/img/product/1.jpg') }}" alt="" />
                                                    <img class="secondary-img" src="{{asset('index/img/product/2.jpg') }}" alt="" />
                                                </a><span class="sale">sale</span>
                                                <div class="product-action">
                                                    <div class="pro-button-top">
                                                        <a href="#">add to cart</a>
                                                    </div>
                                                    <div class="pro-button-bottom">
                                                        <a href="#"><i class="fa fa-heart"></i></a><a href="#"><i class="fa fa-retweet"></i>
                                                        </a><a href="#"><i class="fa fa-search-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3>
                                                    <a href="single-product.html">Dolor Sir Amet Percpectum</a></h3>
                                                <div class="pro-price">
                                                    <span class="normal">$150</span> <span class="old">$180</span>
                                                </div>
                                                <div class="pro-rating">
                                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-lg-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="{{asset('index/img/product/12.jpg') }}" alt="" />
                                                    <img class="secondary-img" src="{{asset('index/img/product/13.jpg') }}" alt="" />
                                                </a>
                                                <div class="product-action">
                                                    <div class="pro-button-top">
                                                        <a href="#">add to cart</a>
                                                    </div>
                                                    <div class="pro-button-bottom">
                                                        <a href="#"><i class="fa fa-heart"></i></a><a href="#"><i class="fa fa-retweet"></i>
                                                        </a><a href="#"><i class="fa fa-search-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3>
                                                    <a href="single-product.html">Dolor Sir Amet Percpectum</a></h3>
                                                <div class="pro-price">
                                                    <span class="normal">$150</span> <span class="old">$180</span>
                                                </div>
                                                <div class="pro-rating">
                                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-lg-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="{{asset('index/img/product/5.jpg') }}" alt="" />
                                                    <img class="secondary-img" src="{{asset('index/img/product/6.jpg') }}" alt="" />
                                                </a><span class="sale">sale</span>
                                                <div class="product-action">
                                                    <div class="pro-button-top">
                                                        <a href="#">add to cart</a>
                                                    </div>
                                                    <div class="pro-button-bottom">
                                                        <a href="#"><i class="fa fa-heart"></i></a><a href="#"><i class="fa fa-retweet"></i>
                                                        </a><a href="#"><i class="fa fa-search-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3>
                                                    <a href="single-product.html">Dolor Sir Amet Percpectum</a></h3>
                                                <div class="pro-price">
                                                    <span class="normal">$150</span> <span class="old">$180</span>
                                                </div>
                                                <div class="pro-rating">
                                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-lg-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="{{asset('index/img/product/14.jpg') }}" alt="" />
                                                    <img class="secondary-img" src="{{asset('index/img/product/15.jpg') }}" alt="" />
                                                </a>
                                                <div class="product-action">
                                                    <div class="pro-button-top">
                                                        <a href="#">add to cart</a>
                                                    </div>
                                                    <div class="pro-button-bottom">
                                                        <a href="#"><i class="fa fa-heart"></i></a><a href="#"><i class="fa fa-retweet"></i>
                                                        </a><a href="#"><i class="fa fa-search-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3>
                                                    <a href="single-product.html">Dolor Sir Amet Percpectum</a></h3>
                                                <div class="pro-price">
                                                    <span class="normal">$150</span> <span class="old">$180</span>
                                                </div>
                                                <div class="pro-rating">
                                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-lg-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="img/product/9.jpg" alt="" />
                                                    <img class="secondary-img" src="img/product/10.jpg" alt="" />
                                                </a><span class="sale">sale</span>
                                                <div class="product-action">
                                                    <div class="pro-button-top">
                                                        <a href="#">add to cart</a>
                                                    </div>
                                                    <div class="pro-button-bottom">
                                                        <a href="#"><i class="fa fa-heart"></i></a><a href="#"><i class="fa fa-retweet"></i>
                                                        </a><a href="#"><i class="fa fa-search-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3>
                                                    <a href="single-product.html">Dolor Sir Amet Percpectum</a></h3>
                                                <div class="pro-price">
                                                    <span class="normal">$150</span> <span class="old">$180</span>
                                                </div>
                                                <div class="pro-rating">
                                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="men">
                            <div class="row">
                                <div class="product-curosel">
                                    <!-- single-product start -->
                                    <div class="col-lg-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="img/product/11.jpg" alt="" />
                                                    <img class="secondary-img" src="img/product/12.jpg" alt="" />
                                                </a><span class="sale">三角带分类</span>
                                                <div class="product-action">
                                                    <div class="pro-button-top">
                                                        <a href="#">add to cart</a>
                                                    </div>
                                                    <div class="pro-button-bottom">
                                                        <a href="#"><i class="fa fa-heart"></i></a><a href="#"><i class="fa fa-retweet"></i>
                                                        </a><a href="#"><i class="fa fa-search-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3>
                                                    <a href="single-product.html">Dolor Sir Amet Percpectum</a></h3>
                                                <div class="pro-price">
                                                    <span class="normal">$150</span> <span class="old">$180</span>
                                                </div>
                                                <div class="pro-rating">
                                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-lg-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="img/product/13.jpg" alt="" />
                                                    <img class="secondary-img" src="img/product/14.jpg" alt="" />
                                                </a>
                                                <div class="product-action">
                                                    <div class="pro-button-top">
                                                        <a href="#">add to cart</a>
                                                    </div>
                                                    <div class="pro-button-bottom">
                                                        <a href="#"><i class="fa fa-heart"></i></a><a href="#"><i class="fa fa-retweet"></i>
                                                        </a><a href="#"><i class="fa fa-search-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3>
                                                    <a href="single-product.html">Dolor Sir Amet Percpectum</a></h3>
                                                <div class="pro-price">
                                                    <span class="normal">$150</span> <span class="old">$180</span>
                                                </div>
                                                <div class="pro-rating">
                                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-lg-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="img/product/15.jpg" alt="" />
                                                    <img class="secondary-img" src="img/product/16.jpg" alt="" />
                                                </a><span class="sale">sale</span>
                                                <div class="product-action">
                                                    <div class="pro-button-top">
                                                        <a href="#">add to cart</a>
                                                    </div>
                                                    <div class="pro-button-bottom">
                                                        <a href="#"><i class="fa fa-heart"></i></a><a href="#"><i class="fa fa-retweet"></i>
                                                        </a><a href="#"><i class="fa fa-search-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3>
                                                    <a href="single-product.html">Dolor Sir Amet Percpectum</a></h3>
                                                <div class="pro-price">
                                                    <span class="normal">$150</span> <span class="old">$180</span>
                                                </div>
                                                <div class="pro-rating">
                                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-lg-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="img/product/1.jpg" alt="" />
                                                    <img class="secondary-img" src="img/product/2.jpg" alt="" />
                                                </a>
                                                <div class="product-action">
                                                    <div class="pro-button-top">
                                                        <a href="#">add to cart</a>
                                                    </div>
                                                    <div class="pro-button-bottom">
                                                        <a href="#"><i class="fa fa-heart"></i></a><a href="#"><i class="fa fa-retweet"></i>
                                                        </a><a href="#"><i class="fa fa-search-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3>
                                                    <a href="single-product.html">Dolor Sir Amet Percpectum</a></h3>
                                                <div class="pro-price">
                                                    <span class="normal">$150</span> <span class="old">$180</span>
                                                </div>
                                                <div class="pro-rating">
                                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-lg-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="img/product/6.jpg" alt="" />
                                                    <img class="secondary-img" src="img/product/7.jpg" alt="" />
                                                </a><span class="sale">sale</span>
                                                <div class="product-action">
                                                    <div class="pro-button-top">
                                                        <a href="#">add to cart</a>
                                                    </div>
                                                    <div class="pro-button-bottom">
                                                        <a href="#"><i class="fa fa-heart"></i></a><a href="#"><i class="fa fa-retweet"></i>
                                                        </a><a href="#"><i class="fa fa-search-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3>
                                                    <a href="single-product.html">Dolor Sir Amet Percpectum</a></h3>
                                                <div class="pro-price">
                                                    <span class="normal">$150</span> <span class="old">$180</span>
                                                </div>
                                                <div class="pro-rating">
                                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="women">
                            <div class="row">
                                <div class="product-curosel">
                                    <!-- single-product start -->
                                    <div class="col-lg-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="img/product/8.jpg" alt="" />
                                                    <img class="secondary-img" src="img/product/2.jpg" alt="" />
                                                </a><span class="sale">sale</span>
                                                <div class="product-action">
                                                    <div class="pro-button-top">
                                                        <a href="#">add to cart</a>
                                                    </div>
                                                    <div class="pro-button-bottom">
                                                        <a href="#"><i class="fa fa-heart"></i></a><a href="#"><i class="fa fa-retweet"></i>
                                                        </a><a href="#"><i class="fa fa-search-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3>
                                                    <a href="single-product.html">Dolor Sir Amet Percpectum</a></h3>
                                                <div class="pro-price">
                                                    <span class="normal">$150</span> <span class="old">$180</span>
                                                </div>
                                                <div class="pro-rating">
                                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-lg-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="img/product/12.jpg" alt="" />
                                                    <img class="secondary-img" src="img/product/13.jpg" alt="" />
                                                </a>
                                                <div class="product-action">
                                                    <div class="pro-button-top">
                                                        <a href="#">add to cart</a>
                                                    </div>
                                                    <div class="pro-button-bottom">
                                                        <a href="#"><i class="fa fa-heart"></i></a><a href="#"><i class="fa fa-retweet"></i>
                                                        </a><a href="#"><i class="fa fa-search-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3>
                                                    <a href="single-product.html">Dolor Sir Amet Percpectum</a></h3>
                                                <div class="pro-price">
                                                    <span class="normal">$150</span> <span class="old">$180</span>
                                                </div>
                                                <div class="pro-rating">
                                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-lg-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="img/product/9.jpg" alt="" />
                                                    <img class="secondary-img" src="img/product/16.jpg" alt="" />
                                                </a>
                                                <div class="product-action">
                                                    <div class="pro-button-top">
                                                        <a href="#">add to cart</a>
                                                    </div>
                                                    <div class="pro-button-bottom">
                                                        <a href="#"><i class="fa fa-heart"></i></a><a href="#"><i class="fa fa-retweet"></i>
                                                        </a><a href="#"><i class="fa fa-search-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3>
                                                    <a href="single-product.html">Dolor Sir Amet Percpectum</a></h3>
                                                <div class="pro-price">
                                                    <span class="normal">$150</span> <span class="old">$180</span>
                                                </div>
                                                <div class="pro-rating">
                                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-lg-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="img/product/15.jpg" alt="" />
                                                    <img class="secondary-img" src="img/product/3.jpg" alt="" />
                                                </a><span class="sale">sale</span>
                                                <div class="product-action">
                                                    <div class="pro-button-top">
                                                        <a href="#">add to cart</a>
                                                    </div>
                                                    <div class="pro-button-bottom">
                                                        <a href="#"><i class="fa fa-heart"></i></a><a href="#"><i class="fa fa-retweet"></i>
                                                        </a><a href="#"><i class="fa fa-search-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3>
                                                    <a href="single-product.html">Dolor Sir Amet Percpectum</a></h3>
                                                <div class="pro-price">
                                                    <span class="normal">$150</span> <span class="old">$180</span>
                                                </div>
                                                <div class="pro-rating">
                                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-lg-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="img/product/5.jpg" alt="" />
                                                    <img class="secondary-img" src="img/product/10.jpg" alt="" />
                                                </a>
                                                <div class="product-action">
                                                    <div class="pro-button-top">
                                                        <a href="#">add to cart</a>
                                                    </div>
                                                    <div class="pro-button-bottom">
                                                        <a href="#"><i class="fa fa-heart"></i></a><a href="#"><i class="fa fa-retweet"></i>
                                                        </a><a href="#"><i class="fa fa-search-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3>
                                                    <a href="single-product.html">Dolor Sir Amet Percpectum</a></h3>
                                                <div class="pro-price">
                                                    <span class="normal">$150</span> <span class="old">$180</span>
                                                </div>
                                                <div class="pro-rating">
                                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="kids">
                            <div class="row">
                                <div class="product-curosel">
                                    <!-- single-product start -->
                                    <div class="col-lg-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="img/product/11.jpg" alt="" />
                                                    <img class="secondary-img" src="img/product/4.jpg" alt="" />
                                                </a><span class="sale">sale</span>
                                                <div class="product-action">
                                                    <div class="pro-button-top">
                                                        <a href="#">add to cart</a>
                                                    </div>
                                                    <div class="pro-button-bottom">
                                                        <a href="#"><i class="fa fa-heart"></i></a><a href="#"><i class="fa fa-retweet"></i>
                                                        </a><a href="#"><i class="fa fa-search-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3>
                                                    <a href="single-product.html">Dolor Sir Amet Percpectum</a></h3>
                                                <div class="pro-price">
                                                    <span class="normal">$150</span> <span class="old">$180</span>
                                                </div>
                                                <div class="pro-rating">
                                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-lg-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="img/product/3.jpg" alt="" />
                                                    <img class="secondary-img" src="img/product/9.jpg" alt="" />
                                                </a>
                                                <div class="product-action">
                                                    <div class="pro-button-top">
                                                        <a href="#">add to cart</a>
                                                    </div>
                                                    <div class="pro-button-bottom">
                                                        <a href="#"><i class="fa fa-heart"></i></a><a href="#"><i class="fa fa-retweet"></i>
                                                        </a><a href="#"><i class="fa fa-search-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3>
                                                    <a href="single-product.html">Dolor Sir Amet Percpectum</a></h3>
                                                <div class="pro-price">
                                                    <span class="normal">$150</span> <span class="old">$180</span>
                                                </div>
                                                <div class="pro-rating">
                                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-lg-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="img/product/7.jpg" alt="" />
                                                    <img class="secondary-img" src="img/product/6.jpg" alt="" />
                                                </a>
                                                <div class="product-action">
                                                    <div class="pro-button-top">
                                                        <a href="#">add to cart</a>
                                                    </div>
                                                    <div class="pro-button-bottom">
                                                        <a href="#"><i class="fa fa-heart"></i></a><a href="#"><i class="fa fa-retweet"></i>
                                                        </a><a href="#"><i class="fa fa-search-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3>
                                                    <a href="single-product.html">Dolor Sir Amet Percpectum</a></h3>
                                                <div class="pro-price">
                                                    <span class="normal">$150</span> <span class="old">$180</span>
                                                </div>
                                                <div class="pro-rating">
                                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-lg-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="img/product/11.jpg" alt="" />
                                                    <img class="secondary-img" src="img/product/12.jpg" alt="" />
                                                </a><span class="sale">sale</span>
                                                <div class="product-action">
                                                    <div class="pro-button-top">
                                                        <a href="#">add to cart</a>
                                                    </div>
                                                    <div class="pro-button-bottom">
                                                        <a href="#"><i class="fa fa-heart"></i></a><a href="#"><i class="fa fa-retweet"></i>
                                                        </a><a href="#"><i class="fa fa-search-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3>
                                                    <a href="single-product.html">Dolor Sir Amet Percpectum</a></h3>
                                                <div class="pro-price">
                                                    <span class="normal">$150</span> <span class="old">$180</span>
                                                </div>
                                                <div class="pro-rating">
                                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-lg-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="img/product/1.jpg" alt="" />
                                                    <img class="secondary-img" src="img/product/7.jpg" alt="" />
                                                </a>
                                                <div class="product-action">
                                                    <div class="pro-button-top">
                                                        <a href="#">add to cart</a>
                                                    </div>
                                                    <div class="pro-button-bottom">
                                                        <a href="#"><i class="fa fa-heart"></i></a><a href="#"><i class="fa fa-retweet"></i>
                                                        </a><a href="#"><i class="fa fa-search-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3>
                                                    <a href="single-product.html">Dolor Sir Amet Percpectum</a></h3>
                                                <div class="pro-price">
                                                    <span class="normal">$150</span> <span class="old">#180</span>
                                                </div>
                                                <div class="pro-rating">
                                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- features-area end -->
<!-- new-product-area start -->
<div class="new-product-area pad-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2>
                        New Products</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="product-curosel">
                <!-- single-product start -->
                <div class="col-lg-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img class="primary-img" src="img/product/19.jpg" alt="" />
                                <img class="secondary-img" src="img/product/20.jpg" alt="" />
                            </a><span class="sale">sale</span>
                            <div class="product-action">
                                <div class="pro-button-top">
                                    <a href="#">add to cart</a>
                                </div>
                                <div class="pro-button-bottom">
                                    <a href="#"><i class="fa fa-heart"></i></a><a href="#"><i class="fa fa-retweet"></i>
                                    </a><a href="#"><i class="fa fa-search-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3>
                                <a href="single-product.html">Feugiat justo lacinia</a></h3>
                            <div class="pro-price">
                                <span class="normal">$150</span> <span class="old">$180</span>
                            </div>
                            <div class="pro-rating">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-product end -->
                <!-- single-product start -->
                <div class="col-lg-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img class="primary-img" src="img/product/21.jpg" alt="" />
                                <img class="secondary-img" src="img/product/22.jpg" alt="" />
                            </a>
                            <div class="product-action">
                                <div class="pro-button-top">
                                    <a href="#">add to cart</a>
                                </div>
                                <div class="pro-button-bottom">
                                    <a href="#"><i class="fa fa-heart"></i></a><a href="#"><i class="fa fa-retweet"></i>
                                    </a><a href="#"><i class="fa fa-search-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3>
                                <a href="single-product.html">Feugiat justo lacinia</a></h3>
                            <div class="pro-price">
                                <span class="normal">$150</span> <span class="old">$180</span>
                            </div>
                            <div class="pro-rating">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-product end -->
                <!-- single-product start -->
                <div class="col-lg-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img class="primary-img" src="img/product/23.jpg" alt="" />
                                <img class="secondary-img" src="img/product/24.jpg" alt="" />
                            </a><span class="sale">sale</span>
                            <div class="product-action">
                                <div class="pro-button-top">
                                    <a href="#">add to cart</a>
                                </div>
                                <div class="pro-button-bottom">
                                    <a href="#"><i class="fa fa-heart"></i></a><a href="#"><i class="fa fa-retweet"></i>
                                    </a><a href="#"><i class="fa fa-search-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3>
                                <a href="single-product.html">Feugiat justo lacinia</a></h3>
                            <div class="pro-price">
                                <span class="normal">$150</span> <span class="old">$180</span>
                            </div>
                            <div class="pro-rating">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-product end -->
                <!-- single-product start -->
                <div class="col-lg-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img class="primary-img" src="img/product/25.jpg" alt="" />
                                <img class="secondary-img" src="img/product/26.jpg" alt="" />
                            </a><span class="sale">sale</span>
                            <div class="product-action">
                                <div class="pro-button-top">
                                    <a href="#">add to cart</a>
                                </div>
                                <div class="pro-button-bottom">
                                    <a href="#"><i class="fa fa-heart"></i></a><a href="#"><i class="fa fa-retweet"></i>
                                    </a><a href="#"><i class="fa fa-search-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3>
                                <a href="single-product.html">Feugiat justo lacinia</a></h3>
                            <div class="pro-price">
                                <span class="normal">$150</span> <span class="old">$180</span>
                            </div>
                            <div class="pro-rating">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-product end -->
                <!-- single-product start -->
                <div class="col-lg-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img class="primary-img" src="img/product/27.jpg" alt="" />
                                <img class="secondary-img" src="img/product/28.jpg" alt="" />
                            </a>
                            <div class="product-action">
                                <div class="pro-button-top">
                                    <a href="#">add to cart</a>
                                </div>
                                <div class="pro-button-bottom">
                                    <a href="#"><i class="fa fa-heart"></i></a><a href="#"><i class="fa fa-retweet"></i>
                                    </a><a href="#"><i class="fa fa-search-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3>
                                <a href="single-product.html">Feugiat justo lacinia</a></h3>
                            <div class="pro-price">
                                <span class="normal">$150</span> <span class="old">$180</span>
                            </div>
                            <div class="pro-rating">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-product end -->
            </div>
        </div>
    </div>
</div>
<!-- new-product-area end -->
<!-- subscribe-area start -->
<div class="subscribe-area">
    <div class="container">
        <div class="subscribe-title">
            <h3>
                <span>订购询价</span>传送带,三角带,同步带,毛毡带</h3>
            <p>
                如果需要订购,询价各种产品,请打电话给我们,我们会第一时间对你进行联系,并报价</p>
            <form action="#">
            <div class="subscribe-form">
                <input type="text" placeholder="Your Email........." />
                <button>
                    确定询价</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- subscribe-area end -->
<!-- latest-blog-area start -->
<div class="latest-blog-area pad-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2>
                        最新传送带文章</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="latest-blog-curosel">
                <!-- single-latest-blog start -->
                <div class="col-lg-12">
                    <div class="single-latest-blog">
                        <div class="latest-blog-img">
                            <a href="#">
                                <img src="img/blog/blog1.jpg" alt="" /></a>
                        </div>
                        <div class="latest-blog-content">
                            <h3>
                                <a href="#">三角带根据什么定价的</a></h3>
                            <div class="meta">
                                <span class="post-category">in <a href="#">三角带价格</a></span> <span class="meta-border">
                                    |</span> <span class="time"><i class="fa fa-clock-o"></i>Oct 31, 2014</span>
                            </div>
                            <p>
                                严格来说,三角带属于动力带,而不属于传送带,国内流行的三角带品牌有欧皮特OPTIBLET,芬纳,三力士等
                            </p>
                        </div>
                    </div>
                </div>
                <!-- single-latest-blog end -->
                <!-- single-latest-blog start -->
                <div class="col-lg-12">
                    <div class="single-latest-blog">
                        <div class="latest-blog-img">
                            <a href="#">
                                <img src="img/blog/blog2.jpg" alt="" /></a>
                        </div>
                        <div class="latest-blog-content">
                            <h3>
                                <a href="#">国内著名传送带厂家哪里可以找到</a></h3>
                            <div class="meta">
                                <span class="post-category">in <a href="#">传送带厂家</a></span> <span class="meta-border">
                                    |</span> <span class="time"><i class="fa fa-clock-o"></i>Oct 31, 2014</span>
                            </div>
                            <p>
                                不管是国内资产的传送带,还是国外的传送带,采购在选购的时候,总是挑选成本最低的那一个选择
                            </p>
                        </div>
                    </div>
                </div>
                <!-- single-latest-blog end -->
                <!-- single-latest-blog start -->
                <div class="col-lg-12">
                    <div class="single-latest-blog">
                        <div class="latest-blog-img">
                            <a href="#">
                                <img src="img/blog/blog3.jpg" alt="" /></a>
                        </div>
                        <div class="latest-blog-content">
                            <h3>
                                <a href="#">毛毡传送带在国内发展的怎么样</a></h3>
                            <div class="meta">
                                <span class="post-category">in <a href="#">Uncategorized</a></span> <span class="meta-border">
                                    |</span> <span class="time"><i class="fa fa-clock-o"></i>Oct 31, 2014</span>
                            </div>
                            <p>
                                毛毡传送带又称毛毡带,毛毡垫,可以作为传送带使用,也可以作为切割机垫,具有很多优良 的性能,分为单面毛毡带和多面毛毡带等
                            </p>
                        </div>
                    </div>
                </div>
                <!-- single-latest-blog end -->
                <!-- single-latest-blog start -->
                <div class="col-lg-12">
                    <div class="single-latest-blog">
                        <div class="latest-blog-img">
                            <a href="#">
                                <img src="img/blog/blog2.jpg" alt="" /></a>
                        </div>
                        <div class="latest-blog-content">
                            <h3>
                                <a href="#">Nam liber tempor cum soluta</a></h3>
                            <div class="meta">
                                <span class="post-category">in <a href="#">Uncategorized</a></span> <span class="meta-border">
                                    |</span> <span class="time"><i class="fa fa-clock-o"></i>Oct 31, 2014</span>
                            </div>
                            <p>
                                Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming
                                id quod mazim placerat facer possim assum. ...
                            </p>
                        </div>
                    </div>
                </div>
                <!-- single-latest-blog end -->
                <!-- single-latest-blog start -->
                <div class="col-lg-12">
                    <div class="single-latest-blog">
                        <div class="latest-blog-img">
                            <a href="#">
                                <img src="img/blog/blog1.jpg" alt="" /></a>
                        </div>
                        <div class="latest-blog-content">
                            <h3>
                                <a href="#">Nam liber tempor cum soluta</a></h3>
                            <div class="meta">
                                <span class="post-category">in <a href="#">Uncategorized</a></span> <span class="meta-border">
                                    |</span> <span class="time"><i class="fa fa-clock-o"></i>Oct 31, 2014</span>
                            </div>
                            <p>
                                Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming
                                id quod mazim placerat facer possim assum. ...
                            </p>
                        </div>
                    </div>
                </div>
                <!-- single-latest-blog end -->
            </div>
        </div>
    </div>
</div>
<!-- latest-blog-area end -->
<!-- brand-area start -->
<div class="brand-area pad-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2>
                         我们合作代理生产品牌</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="brand-carousel">
                <div class="col-lg-12">
                    <div class="single-brand">
                        <a href="#">
                            <img src="{{ asset('index/img/brand/1.png') }}" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-brand">
                        <a href="#">
                            <img src="{{ asset('index/img/brand/1.png') }}" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-brand">
                        <a href="#">
                            <img src="{{ asset('index/img/brand/1.png') }}" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-brand">
                        <a href="#">
                            <img src="{{ asset('index/img/brand/1.png') }}" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-brand">
                        <a href="#">
                            <img src="{{ asset('index/img/brand/1.png') }}" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-brand">
                        <a href="#">
                            <img src="{{ asset('index/img/brand/1.png') }}" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-brand">
                        <a href="#">
                            <img src="{{ asset('index/img/brand/1.png') }}" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-brand">
                        <a href="#">
                            <img src="{{ asset('index/img/brand/1.png') }}" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-brand">
                        <a href="#">
                            <img src="{{ asset('index/img/brand/1.png') }}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brand-area end -->

@endsection


