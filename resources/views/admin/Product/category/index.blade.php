@extends('layout.layout')
@section('title','Product Category List')
@section('pageTitle','Product Category')
@section('mainTitle','Admin')
@section('body')
    <section class="section dashboard">
        <div class="row">

            <!-- Recent Sales -->
            <div class="col-8">
                <div class="card recent-sales">


                    <div class="card-body">
                        <h5 class="card-title">Product Category<span>| list</span></h5>


                        <a href="/admin/ManageProductCategory/create">
                            <button class="btn btn-outline-success">Create</button>
                        </a>

                        <table class="table table-bordered ">
                            <thead>
                            <tr>
                                <th scope="col">
                                    <a href="/admin/ManageProductCategory?orderby=id">
                                        Id
                                    </a>
                                </th>
                                <th scope="col">
                                    <a href="/admin/ManageProductCategory?orderby=title">
                                        title
                                    </a>
                                </th>
                                <th scope="col">
                                    <a href="/admin/ManageProductCategory?orderby=parentId">
                                        parentId
                                    </a>
                                </th>
                                <th scope="col">
                                    Action
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $item)
                                <tr>
                                    <th scope="row">{{$item->id}}</th>
                                    <th scope="row">{{$item->title}}</th>
                                    <td><span>
                                        <?php
                                            if ($item->parentId !== 0) {
                                                echo $categories->firstWhere('id', '==', $item->parentId)->title;
                                            } else {
                                                echo "none";
                                            }
                                            ?>                                        </span></td>
                                    <td class="row col-12">
                                        <form class="col-4" action="/admin/ManageProductCategory/{{$item->id}}"
                                              method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-outline-danger col-12" type="submit">Delete</button>
                                        </form>

                                        <a class="col-4" href="/admin/ManageProductCategory/{{$item->id}}/edit">
                                            <button class="btn btn-outline-warning col-12">Edit</button>

                                        </a>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
            <!-- End Recent Sales -->

            @include('layout._rightNav')

        </div>
    </section>
@endsection

