@extends('layout.market_layout')
@section('title',$key)
@section('body')

    <!-- breadcrumb start -->
    <div class="breadcrumb-main ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-contain">
                        <div>
                            <h2>جستجو</h2>
                            <ul>
                                <li><a href="index.html">خانه</a></li>
                                <li><i class="fa fa-angle-double-left"></i></li>
                                <li><a href="javascript:void(0)">جستجو</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->

    <!--section start-->
    <section class="authentication-page section-big-pt-space b-g-light">
        <div class="custom-containe">
            <section class="search-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <form class="form-header" action="/" method="post">
                                @csrf
                                <div class="input-group">
                                    <input type="hidden" name="category" value="1">
                                    <input type="text" class="form-control" name="key"
                                           placeholder="جستجوی مقاله مورد نظر ...">
                                    <button class="btn btn-normal" type="submit"><i class="fa fa-search"></i>جستجو
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!-- section end -->

    <!-- product section start -->
    <section class="section-big-py-space ratio_asos b-g-light">
        <div class="custom-container">
            <div class="row search-product related-pro1">
                @foreach($articles['items'] as $item)
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="product">
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <a href="/blog/{{$item->id}}">
                                            <img src="../assets/images/marketplace/blog/1.jpg" class="img-fluid  "
                                                 alt="test">
                                        </a>
                                    </div>
                                    <div class="product-back">
                                        <a href="/blog/{{$item->id}}">
                                            <img src="../assets/images/layout-2/product/a1.jpg" class="img-fluid  "
                                                 alt="product">
                                        </a>
                                    </div>
                                </div>
                                <div class="product-detail detail-center ">
                                    <div class="detail-title">
                                        <div class="detail-left">
                                            <div class="rating-star">
                                                <span>Category</span>
                                            </div>
                                            <a href="/blog/{{$item->id}}">
                                                <h6 class="price-title">
                                                    {{$item->title}} - {{$item->GetCategory()}}
                                                </h6>
                                            </a>
                                        </div>
                                        <div class="detail-right">
                                            {{--<div class="check-price">--}}
                                            {{--56,000 تومان--}}
                                            {{--</div>--}}
                                            <div class="price">
                                                <div class="price">
                                                    {{$item->visit}} بازدید
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="icon-detail">
                                        <button class="tooltip-top add-cartnoty"
                                                data-tippy-content="افزودن به سبد خرید">
                                            <i data-feather="shopping-cart"></i>
                                        </button>
                                        <a href="javascript:void(0)" class="add-to-wish tooltip-top"
                                           data-tippy-content="افزودن به لیست علاقه مندی">
                                            <i data-feather="heart"></i>
                                        </a>
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view"
                                           class="tooltip-top"
                                           data-tippy-content="مشاهده سریع">
                                            <i data-feather="eye"></i>
                                        </a>
                                        <a href="compare.html" class="tooltip-top" data-tippy-content="مقایسه">
                                            <i data-feather="refresh-cw"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="row col-12">
                    @for($i=1; $i<$articles['count'];$i++)
                        <form class="col-1" action="/" method="post">
                            @csrf
                            <input type="hidden" name="category" value="1">
                            <input type="hidden" name="key" value="{{$key}}">
                            <input type="hidden" name="page" value="{{$i}}">
                            <button type="submit" class="btn btn-info col-12">{{$i}}</button>
                        </form>
                    @endfor</div>
            </div>
        </div>
    </section>
    <!-- product section end -->

@endsection()
