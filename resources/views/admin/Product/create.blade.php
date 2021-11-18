@extends('layout.layout')
@section('title','Create Article')
@section('pageTitle','Article')
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
                                <h5 class="card-title">create Article</h5>

                                <!-- Floating Labels Form -->
                                <form class="row g-3" action="/admin/ManageProduct" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="text" name="title" class="form-control" id="floatingEmail"
                                                   placeholder="title..." required>
                                            <label for="floatingEmail">title</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="number" name="inventory" class="form-control"
                                                   id="floatingPassword"
                                                   placeholder="inventory..." required>
                                            <label for="floatingPassword">inventory</label>
                                        </div>
                                    </div>


                                    <x-ProductCategory/>


                                    <div class="col-8">
                                        <div class="form-floating">
                                            <!-- Quill Editor Default -->
                                            <textarea class="col-12" id="content" name="content" required>
                                                put Content here...
                                            </textarea>

                                            <!-- End Quill Editor Default -->
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="number" name="price" class="form-control"
                                                   id="floatingPassword"
                                                   placeholder="price..." required>
                                            <label for="floatingPassword">price</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-floating">
                                            <!-- Quill Editor Default -->
                                            <input type="file" name="img" required>
                                            <!-- End Quill Editor Default -->
                                        </div>
                                    </div>
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
