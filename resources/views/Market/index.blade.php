@extends('layout.market_layout')
@section('title',"Home")
@section('body')
    #TODO Dynamic Components

    @include('market.sections.homeSlider')

    <!-- title start -->
    <div class="title7 section-big-pt-space">
        <h3>محصولات برجسته</h3>
        <div class="line">
        </div>
    </div>
    <!-- title end -->

    <!-- key-feature start -->
    <section class="key-feature b-g-white ">
        <div class="container">
            <div class="row">
                <div class="col-12 pr-0">
                    <div class="feature-slide no-arrow mb--5">
                        <div>
                            <div class="key-feature-contain">
                                <img src="../assets/images/marketplace/key-feature/1.jpg" alt="marketplace"
                                     class="img-fluid">
                            </div>
                        </div>
                        <div>
                            <div class="key-feature-contain">
                                <img src="../assets/images/marketplace/key-feature/2.jpg" alt="marketplace"
                                     class="img-fluid">
                            </div>
                        </div>
                        <div>
                            <div class="key-feature-contain">
                                <img src="../assets/images/marketplace/key-feature/3.jpg" alt="marketplace"
                                     class="img-fluid">
                            </div>
                        </div>
                        <div>
                            <div class="key-feature-contain">
                                <img src="../assets/images/marketplace/key-feature/4.jpg" alt="marketplace"
                                     class="img-fluid">
                            </div>
                        </div>
                        <div>
                            <div class="key-feature-contain">
                                <img src="../assets/images/marketplace/key-feature/5.jpg" alt="marketplace"
                                     class="img-fluid">
                            </div>
                        </div>
                        <div>
                            <div class="key-feature-contain">
                                <img src="../assets/images/marketplace/key-feature/6.jpg" alt="marketplace"
                                     class="img-fluid">
                            </div>
                        </div>
                        <div>
                            <div class="key-feature-contain">
                                <img src="../assets/images/marketplace/key-feature/7.jpg" alt="marketplace"
                                     class="img-fluid">
                            </div>
                        </div>
                        <div>
                            <div class="key-feature-contain">
                                <img src="../assets/images/marketplace/key-feature/8.jpg" alt="marketplace"
                                     class="img-fluid">
                            </div>
                        </div>
                        <div>
                            <div class="key-feature-contain">
                                <img src="../assets/images/marketplace/key-feature/9.jpg" alt="marketplace"
                                     class="img-fluid">
                            </div>
                        </div>
                        <div>
                            <div class="key-feature-contain">
                                <img src="../assets/images/marketplace/key-feature/10.jpg" alt="marketplace"
                                     class="img-fluid">
                            </div>
                        </div>
                        <div>
                            <div class="key-feature-contain">
                                <img src="../assets/images/marketplace/key-feature/11.jpg" alt="marketplace"
                                     class="img-fluid">
                            </div>
                        </div>
                        <div>
                            <div class="key-feature-contain">
                                <img src="../assets/images/marketplace/key-feature/12.jpg" alt="marketplace"
                                     class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- key-feature end -->
    <x-ProductTab/>

    @include('market.sections.testimonial')

    @include('market.sections.Statics')

    @include('market.sections.services')

    <x-NewArticleTab/>


@endsection()
