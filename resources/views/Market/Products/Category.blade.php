@extends('.layout.market_layout')
@section('title','محصولات '.$category->title)
@section('body')
    <!-- breadcrumb start -->
    <div class="breadcrumb-main ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-contain">
                        <div>
                            <h2>دسته بندی {{$category->title}}</h2>
                            <ul>
                                <li><a href="index.html">خانه</a></li>
                                <li><i class="fa fa-angle-double-left"></i></li>
                                <li><a href="javascript:void(0)">محصولات</a></li>
                                <li><i class="fa fa-angle-double-left"></i></li>
                                <li><a href="javascript:void(0)">{{$category->title}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->

    <!-- section start -->
    <section class="section-big-pt-space ratio_asos b-g-light">
        <div class="collection-wrapper">
            <div class="custom-container">
                <div class="row">
                    <div class="collection-content col">
                        <div class="page-main-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="top-banner-wrapper">
                                        <a href="product-page(left-sidebar).html"><img
                                                src="/assets/images/category/1.jpg"
                                                class="img-fluid  w-100" alt=""></a>
                                        <div class="top-banner-content small-section">
                                            <h4>مُد</h4>
                                            <h5>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن ساختگی
                                            </h5>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن ساختگی با
                                                تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم
                                                ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید
                                                سادگی نامفهوم، لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم
                                                متن ساختگی با تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی با تولید سادگی
                                                نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن
                                                ساختگی با تولید سادگی نامفهوم.</p>
                                        </div>
                                    </div>
                                    <div class="collection-product-wrapper">
                                        <div class="product-wrapper-grid product">
                                            <div class="row">
                                                @foreach($products as $item)
                                                    <div class="col-xl-2 col-lg-3 col-md-4 col-6 col-grid-box">
                                                        <div class="product-box">
                                                            <div class="product-imgbox">
                                                                <div class="product-front">
                                                                    <a href="/products/{{$item->id}}"> <img
                                                                            src="/assets/images/layout-4/product/1.jpg"
                                                                            class="img-fluid  " alt="product">
                                                                    </a>
                                                                </div>
                                                                <div class="product-back">
                                                                    <a href="/products/{{$item->id}}"> <img
                                                                            src="/assets/images/layout-4/product/a1.jpg"
                                                                            class="img-fluid  " alt="product">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-detail detail-center detail-inverse">
                                                                <div class="detail-title">
                                                                    <div class="detail-left">
                                                                        <div class="rating-star"><i
                                                                                class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i> <i
                                                                                class="fa fa-star"></i> <i
                                                                                class="fa fa-star"></i> <i
                                                                                class="fa fa-star"></i>
                                                                        </div>
                                                                        <a href="product-page(left-sidebar).html">
                                                                            <h6 class="price-title">
                                                                                {{$item->title}}
                                                                            </h6>
                                                                            <p>
                                                                            </p>
                                                                        </a>
                                                                        {{str_limit($item->content,70)}}

                                                                    </div>
                                                                    <div class="detail-right">
                                                                        <div class="check-price"> {{$item->price *2}}
                                                                            تومان
                                                                        </div>
                                                                        <div class="price">
                                                                            <div class="price"> {{$item->price}}تومان
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="icon-detail">
                                                                    <button class="tooltip-top add-cartnoty"
                                                                            data-tippy-content="افزودن به سبد خرید"><i
                                                                            data-feather="shopping-cart"></i></button>
                                                                    <a href="javascript:void(0)"
                                                                       class="add-to-wish tooltip-top"
                                                                       data-tippy-content="افزودن به لیست علاقه مندی">
                                                                        <i
                                                                            data-feather="heart"></i> </a>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                       data-bs-target="#quick-view"
                                                                       class="tooltip-top"
                                                                       data-tippy-content="مشاهده سریع">
                                                                        <i data-feather="eye"></i> </a>
                                                                    <a href="compare.html" class="tooltip-top"
                                                                       data-tippy-content="مقایسه"> <i
                                                                            data-feather="refresh-cw"></i> </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach()
                                            </div>
                                        </div>
                                        <div class="product-pagination">
                                            <div class="theme-paggination-block">
                                                <div class="container-fluid p-0">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-md-6 col-sm-12">
                                                            <nav aria-label="Page navigation">
                                                                <ul class="pagination">
                                                                    @for($i=1; $i<=$pageCount;$i++)
                                                                        <li class="page-item ">
                                                                            <a class="page-link"
                                                                               href="/product/category/{{$category->id}}/{{$i}}/{{$take}}">
                                                                                {{$i}}
                                                                            </a>
                                                                        </li>
                                                                    @endfor

                                                                </ul>
                                                            </nav>
                                                        </div>
                                                        <div class="col-xl-6 col-md-6 col-sm-12">
                                                            <div class="product-search-count-bottom">
                                                                <h5>نمایش 1-12 محصول از {{$count}} نتیجه</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section End -->
@endsection()
