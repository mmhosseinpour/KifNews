@extends('layout.layout')
@section('title','Product List')
@section('pageTitle','Product')
@section('mainTitle','Admin')
@section('body')
    <section class="section dashboard">
        <div class="row">

            <!-- Recent Sales -->
            <div class="col-8">
                <div class="card recent-sales">

                    <!-- Default Card -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->title}}</h5>
                            <span>category : {{$product->ProductCategory->title}}</span>
                            <br>
                            {{$product->content}}
                            <hr>
                            <a class="btn btn-info" href="/admin/ManageProduct/">List</a>
                        </div>
                    </div>
                    <!-- End Default Card -->

                </div>
            </div>
            <!-- End Recent Sales -->

            @include('layout._rightNav')

        </div>
    </section>
@endsection
