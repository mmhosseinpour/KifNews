@extends('.layout.market_layout')
@section('title','Article - '.$category->title)
@section('body')
    <!-- breadcrumb start -->
    <div class="breadcrumb-main ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-contain">
                        <div>
                            <h2>مقالات {{$category->title}} </h2>
                            <ul>
                                <li><a href="javascript:void(0)">دست بندی</a></li>
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
    <section class="section-big-py-space blog-page ratio2_3">
        <div class="custom-container">
            <div class="row">
                <x-SliderBlog/>
                <!--Blog List start-->
                <div class="col-xl-9 col-lg-8 col-md-7 order-sec">
                    @foreach($articles as $item)
                        <div class="row blog-media">
                            <div class="col-xl-6">
                                <div class="blog-left">
                                    <a href="/blog/{{$item->id}}">
                                        <img src="/assets/images/blog/1.jpg"
                                             class="img-fluid  "
                                             alt="blog-left">
                                    </a>
                                    <div class="label-block">
                                        <div class="date-label">
                                            {{$item->created_at}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 ">
                                <div class="blog-right">
                                    <div>
                                        <a href="/blog/{{$item->id}}">
                                            <h4>{{$item->title}}.</h4>
                                        </a>
                                        <ul class="post-social">
                                            <!-- #TODO Interaction -->
                                            <li>نویسنده : مدیر سایت</li>
                                            <li><i class="fa fa-heart"></i> 5 پسند</li>
                                            <li><i class="fa fa-comments"></i> 10 دیدگاه</li>

                                        </ul>
                                        <p>
                                            {{str_limit($item->content,370)}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach()
                    <div class="row">
                        @for($i=1; $i<=$pageCount;$i++)
                            <a class="btn btn-outline-info  col-1"
                               href="/blog/category/{{$category->id}}/{{$i}}/{{$take}}">{{$i}}</a>
                        @endfor
                        <span class="text-primary"> نمایش {{$articles->count()}}
                            محصول از {{$count}}</span>
                    </div>
                </div>
                <!--Blog List start-->


            </div>
        </div>
    </section>
    <!-- Section ends -->
@endsection()
