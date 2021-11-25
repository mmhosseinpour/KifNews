<?php $counter = 2; ?>
<!--tab product-->
<section class="section-big-py-space b-g-white ">
    <div class="tab-product-main tab-four">
        <div class="tab-prodcut-contain">
            <ul class="tabs tab-title">
                <li class="current"><a href="tab-1">همه دسته بندی ها</a></li>
                @foreach($categories as $category)
                    <li class=""><a href="tab-{{$counter}}">{{$category->title}}</a></li>
                    <?php $counter = $counter+1; ?>
                @endforeach
            </ul>
        </div>
    </div>
</section>
<!--tab product-->

<!-- product box start -->
<section class="our-gallery b-g-white section-big-pb-space">
    <div class="custom-container">
        <div class="row  ">
            <div class="col-12 p-0">
                <div class="theme-tab">
                    <div class="tab-content-cls">
                        <div id="tab-1" class="tab-content active default  product-block2">
                            <x-ProductTabBox categoryId=0 />
                        </div>
                        @for ($i = 2; $i <=  $categories->count()+1; $i++)
                            <div id="tab-{{$i}}" class="tab-content  product-block2">
                                <?php
                                $categoryId= $categories[$i-2]->id;
                                ?>
                                <x-ProductTabBox categoryId={{$categoryId}} />
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product box end -->

