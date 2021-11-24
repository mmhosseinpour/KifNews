<!-- title start -->
<div class="title7 section-big-pt-space">
    <h3>آخرین مقالات ما</h3>
    <div class="line">
    </div>
</div>
<!-- title end -->

<!--blog start-->
<section class="blog  section-big-pb-space b-g-white blog-inverce">
    <div class="custom-container">
        <div class="row blog-block">
            <div class="col-12 ">
                <div class="blog-slide-4 no-arrow">
                    @foreach($articles as $item)
                        <div>
                            <div class="blog-contain blog-border">
                                <div class="blog-img">
                                    <a href="blog/{{$item->id}}">
                                        <img src="../assets/images/marketplace/blog/1.jpg" alt="blog"
                                             class="img-fluid w-100">
                                    </a>
                                </div>
                                <div class="blog-details-2">
                                    <a href="blog/{{$item->id}}">
                                        <h4>{{$item->title}} </h4>
                                    </a>
                                    {{str_limit($item->contennt,30)}}
                                    <a href="blog/{{$item->id}}" class=" btn btn-rounded  btn-xs">
                                        مطالعه بیشتر
                                    </a>
                                </div>
                                <div class="blog-label1">{{$item->created_at}}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--blog end-->
