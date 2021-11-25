@extends('layout.market_layout')
@section('title',$item->title)

@section('body')
    <!-- breadcrumb start -->
    <div class="breadcrumb-main ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-contain">
                        <div>
                            <h2>جزئیات مقاله</h2>
                            <ul>
                                <li><a href="javascript:void(0)">خانه</a></li>
                                <li><i class="fa fa-angle-double-left"></i></li>
                                <li><a href="javascript:void(0)">جزئیات خبر</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->
    <!--section start-->
    <section class="blog-detail-page section-big-py-space ratio2_3">
        <div class="container">
            <div class="row section-big-pb-space">
                <div class="col-sm-12 blog-detail">
                    <div class="creative-card">
                        <img src="../assets/images/blog/main.jpg" class="img-fluid w-100 " alt="blog">
                        <h3>{{$item->title}}</h3>
                        <ul class="post-social">
                            <li>25 فروردین 1400</li>
                            <li>نویسنده : مدیر سایت</li>
                            <li><i class="fa fa-heart"></i> 5 پسند</li>
                            <li><i class="fa fa-comments"></i> 10 دیدگاه</li>
                        </ul>
                        {{$item->content}}
                    </div>
                </div>
            </div>
            <!-- Related Article -->
            <?php $categoryId = $item->categoryId ?>
            <x-RelatedArticle id={{$categoryId}}/>

            <div class="row section-big-pb-space">
                <div class="col-sm-12 ">
                    <div class="creative-card">
                        <ul class="comment-section">
                            <li>
                                <div class="media"><img src="../assets/images/avtar/1.jpg"
                                                        alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h6>رضا افشار <span>( 12 فروردین 1400 در 01:30 عصر )</span></h6>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی با
                                            تولید سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم
                                            ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید
                                            سادگی نامفهوم، لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media"><img src="../assets/images/avtar/2.jpg"
                                                        alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h6>رضا افشار <span>( 12 فروردین 1400 در 01:30 عصر )</span></h6>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی با
                                            تولید سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم
                                            ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید
                                            سادگی نامفهوم، لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media"><img src="../assets/images/avtar/3.jpg"
                                                        alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h6>رضا افشار <span>( 12 فروردین 1400 در 01:30 عصر )</span></h6>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی با
                                            تولید سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم
                                            ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن ساختگی با تولید
                                            سادگی نامفهوم، لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=" row blog-contact">
                <div class="col-sm-12  ">
                    <div class="creative-card">
                        <h2>دیدگاه خود را ارسال کنید</h2>
                        <form class="theme-form">
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <label for="name">نام</label>
                                    <input type="text" class="form-control" id="name" placeholder="نام خود را وارد کنید"
                                           required="">
                                </div>
                                <div class="col-md-12">
                                    <label for="email">ایمیل</label>
                                    <input type="text" class="form-control" id="email" placeholder="ایمیل" required="">
                                </div>
                                <div class="col-md-12">
                                    <label for="exampleFormControlTextarea1">دیگاه</label>
                                    <textarea class="form-control" placeholder="دیدگاه خود را بنویسید"
                                              id="exampleFormControlTextarea1"
                                              rows="6"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-normal" type="submit">ارسال دیدگاه</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->

@endsection
