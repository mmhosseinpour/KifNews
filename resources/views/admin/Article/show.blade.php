@extends('layout.layout')
@section('title','Article List')
@section('pageTitle','Article')
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
                            <h5 class="card-title">{{$article->title}}</h5>
                            {{$article->content}}
                            <hr>  <a class="btn btn-info" href="/admin/ManageArticle/">back</a>
                        </div>
                    </div><!-- End Default Card -->

                </div>
            </div>
            <!-- End Recent Sales -->

            @include('layout._rightNav')

        </div>
    </section>
@endsection
