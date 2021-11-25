<div class="row section-big-pb-space blog-advance ">
    @foreach($articles  as $item)
        <div class="col-lg-3 ">
            <div class="creative-card">
                <img src="/assets/images/blog/2.jpg" class="img-fluid  " alt="blog">
               <p> {{$item->id}} -
                    {{str_limit($item->content,120)}}
                </p>
            </div>
        </div>
    @endforeach
</div>
