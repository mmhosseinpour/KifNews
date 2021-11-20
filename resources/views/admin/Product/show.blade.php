@extends('layout.layout')
@section('title','Product List')
@section('pageTitle','Product')
@section('mainTitle','Admin')
@section('body')
    <section class="section dashboard">
        <div class="row">

            <!-- Recent Sales -->
            <div class="col-lg-8">
                <div class="card recent-sales">


                    <div class="card">
                        <img src="{{$product->ProductGallery->source}}" class="card-img-top"
                             alt="{{$product->ProductGallery->alt}}">
                        <div class="card-img-overlay">
                            <h5 class="card-title">{{$product->title}}</h5>
                            <span>category : {{$product->GetCategory()}}</span>
                            <br>
                            {{$product->content}}
                            <hr>
                            <a class="btn btn-info" href="/admin/ManageProduct/">List</a>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End Recent Sales -->

            @include('layout._rightNav')

        </div>
    </section>
@endsection
