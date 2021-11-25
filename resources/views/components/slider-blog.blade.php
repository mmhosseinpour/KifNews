<!--Blog sidebar start-->
<div class="col-xl-3 col-lg-4 col-md-5">
    <div class="blog-sidebar">
        <div class="theme-card">
            <h4>جدیدترین مقالات</h4>
            <ul class="recent-blog">
                @foreach($newest as $item)
                    <li class="col-12">
                        <a href="/blog/{{$item->id}}">

                            <div class="media"><img class="img-fluid " src="/assets/images/blog/1.jpg"
                                                    alt="Generic placeholder image">
                                <div class="media-body align-self-center">
                                    <h6>{{$item->title}}</h6>
                                    <!-- #TODO persian time -->
                                    <p>5 تیر</p>
                                <!--  <p>{{$item->created_at}}</p> -->

                                    <p>{{$item->visit}} بازدید</p>
                                </div>
                            </div>
                        </a>
                    </li>
                @endforeach()
            </ul>
        </div>
        <div class="theme-card">
            <h4>محبوب ترین اخبار</h4>
            <ul class="popular-blog">
                @foreach($popular as $item)
                    <li>
                        <a href="/blog/{{$item->id}}">

                            <div class="media">
                                <div class="blog-date">
                                    <p>5 تیر</p>
                                <!--  <p>{{$item->created_at}}</p> -->
                                </div>
                                <div class="media-body align-self-center">
                                    <h6>{{$item->title}}</h6>
                                    <p>{{$item->visit}} بازدید</p>
                                </div>
                            </div>
                         <p>
                             {{str_limit( $item->content,80)}}
                         </p>
                        </a>
                    </li>
                @endforeach()
            </ul>
        </div>
    </div>
</div>
<!--Blog sidebar start-->
