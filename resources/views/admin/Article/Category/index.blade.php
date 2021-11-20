@extends('layout.layout')
@section('title','Article Category List')
@section('pageTitle','Article Category')
@section('mainTitle','Admin')
@section('body')

    <section class="section dashboard">
        <div class="row">

            <!-- Recent Sales -->
            <div class="col-lg-8">
                <div class="card recent-sales">


                    <div class="card-body table-responsive">
                        <h5 class="card-title">Articles Category<span>| list</span></h5>

                        <a href="/admin/ManageArticleCategory/create">
                            <button class="btn btn-success">Create</button>
                        </a>

                        <table class="table table-bordered table-hover ">
                            <thead>
                            <tr>
                                <th scope="col">
                                    <a href="/admin/ManageArticleCategory?orderby=id">
                                        Id
                                    </a>
                                </th>
                                <th scope="col">
                                    <a href="/admin/ManageArticleCategory?orderby=title">
                                        title
                                    </a>
                                </th>
                                <th scope="col">
                                    <a href="/admin/ManageArticleCategory/?orderby=parentId">
                                        parent
                                    </a>
                                </th>
                                <th scope="col">action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $item)
                                <tr>
                                    <th scope="row">{{$item->id}}</th>
                                    <td><a href="#" class="text-primary">{{$item->title}}</a></td>
                                    <th scope="row"><?php
                                        if ($item->parentId !== 0) {
                                            echo $categories->firstWhere('id', '==', $item->parentId)->title;
                                        } else {
                                            echo "none";
                                        }
                                        ?>
                                    </th>

                                    <td class="row col-12">
                                        <form class="col-lg-6 inline-block" action="/admin/ManageArticleCategory/{{$item->id}}"
                                              method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-outline-danger col-12">delete</button>
                                        </form>
                                        <a class="col-lg-6 inline-block" href="/admin/ManageArticleCategory/{{$item->id}}/edit">
                                            <button class="btn btn-outline-warning col-12">edit</button>
                                        </a>

                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>


            @include('layout._rightNav')
        </div>
    </section>


    <!-- End Recent Sales -->
@endsection
