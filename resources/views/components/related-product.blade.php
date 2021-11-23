<!-- related products -->
<section class="section-big-py-space  ratio_asos b-g-light">
    <div class="custom-container">
        <div class="row">
            <div class="col-12 product-related">
                <h2>محصولات مرتبط</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 product">
                <div class="product-slide-6 product-m no-arrow">
                    @foreach($items as $item)
                        <div>
                            <div class="product-box">
                                <div class="product-imgbox">
                                    <div class="product-front">
                                        <a href="/product/{{$item->id}}">
                                            <img src="../assets/images/layout-2/product/a1.jpg" class="img-fluid  "
                                                 alt="product">

                                        </a>
                                    </div>
                                    <div class="product-back">
                                        <a href="/product/{{$item->id}}">
                                            <img src="{{$item->Productgallery->source}}" class="img-fluid  "
                                                 alt="{{$item->ProductGallery->alt}}">
                                        </a>
                                    </div>
                                    <div class="product-icon icon-inline">
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
                                <div class="product-detail detail-inline ">
                                    <div class="detail-title">
                                        <div class="detail-left">
                                            <div class="rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(left-sidebar).html">
                                                <h6 class="price-title">
                                                    {{$item->title}}
                                                </h6>
                                            </a>
                                        </div>
                                        <div class="detail-right">
                                            <div class="check-price">
                                                {{$item->price}} تومان
                                            </div>
                                            <div class="price">
                                                <div class="price">
                                                    {{$item->price *2}} تومان
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- related products -->
