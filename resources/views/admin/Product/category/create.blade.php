@extends('layout.layout')
@section('title','Create Product Category')
@section('pageTitle','Product Category')
@section('mainTitle','Admin')
@section('body')


    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">

                    <div class="col-12">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Create Product Category</h5>

                                <!-- Floating Labels Form -->
                                <form class="row g-3" action="/admin/ManageProductCategory" method="post">
                                    @csrf
                                    <div class="col-md-8">
                                        <div class="form-floating">
                                            <input type="text" name="title" class="form-control" id="floatingEmail"
                                                   placeholder="slug...">
                                            <label for="floatingEmail">title</label>
                                        </div>
                                    </div>

                                    <x-ProductCategory/>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                    </div>
                                </form>
                                <!-- End floating Labels Form -->

                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Left side columns -->

            @include('layout._rightNav')
        </div>
    </section>

@endsection
