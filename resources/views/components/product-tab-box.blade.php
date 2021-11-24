<div class="col-12">
    <div class="product-slide-4 no-arrow mb--5">

        @foreach($products as $item)
            <div>
                <div class="digipro-box">
                    <div class="img-wrraper">
                        <a href="javascript:void(0)">
                            <img src="../assets/images/marketplace/product/1.jpg"
                                 alt="product"
                                 class="img-fluid">
                        </a>
                    </div>
                    <div class="product-detail">
                        <a href="javascript:void(0)">
                            <h4>{{$item->title}}</h4>
                        </a>
                        <a href="javascript:void(0)">
                            <h5>{{$item->GetCategory()}}</h5>
                        </a>
                        <div class="sale-box">
                            <div class="rating-box">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                </ul>
                                <h4 class="price">
                                    {{$item->price}} تومان
                                </h4>
                            </div>
                            <!--
                                       <div class="pro-sale">
                                            <h4>426 فروش</h4>
                                        </div>
                                    </div>
                                 -->
                            <div class="pro-btn">
                                <a href="javascript:void(0)" class="btn btn-normal btn-sm"> پیش
                                    نمایش زنده </a>
                                <a href="javascript:void(0)"
                                   class="btn btn-normal btn-sm tooltip-top"
                                   data-tippy-content="افزودن به سبد خرید"> افزودن به سبد
                                    خرید</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
