@extends('layout.layout')
@section('title','Article List')
@section('pageTitle','Article')
@section('mainTitle','Admin')
@section('body')
    <section class="section dashboard">
        <div class="row">

            <!-- Recent Sales -->
            <div class="col-lg-8">
                <div class="card recent-sales ">


                    <div class="card-body table-responsive">
                        <h5 class="card-title">Articles <span>| list</span></h5>


                        <a href="/admin/ManageArticle/create">
                            <button class="btn btn-outline-success">Create</button>
                        </a>

                        <table class="table table-bordered table-hover ">
                            <thead>
                            <tr>
                                <th scope="col">
                                    <a href="/admin/ManageArticle?orderby=id">
                                        Id
                                    </a>
                                </th>
                                <th scope="col">
                                    <a href="/admin/ManageArticle?orderby=title">
                                        title
                                    </a></th>
                                <th scope="col">Slug</th>
                                <th scope="col">
                                    <a href="/admin/ManageArticle?orderby=visit">
                                        Visit
                                    </a>
                                </th>
                                <th scope="col">
                                    <a href="/admin/ManageArticle?orderby=ArticleCategory">
                                        Category
                                    </a>
                                </th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($articles as $item)
                                <tr>
                                    <th scope="row">{{$item->id}}</th>
                                    <th scope="row">{{$item->title}}</th>
                                    <td><a href="/admin/ManageArticle/{{$item->id}}"
                                           class="text-primary">{{$item->slug}}</a></td>
                                    <td>{{$item->visit}}</td>
                                    <td><span>
                                            @php
                                                if ($item->ArticleCategory!==null){
                                                   echo $item->ArticleCategory->title;
                                                   }
                                            @endphp
                                        </span></td>
                                    <td class="row col-12">
                                        <form class="col-lg-4 inline-block" action="/admin/ManageArticle/{{$item->id}}"
                                              method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-outline-danger col-12" type="submit">Delete</button>
                                        </form>

                                        <a class="col-lg-4 inline-block" href="/admin/ManageArticle/{{$item->id}}/edit">
                                            <button class="btn btn-outline-warning col-12">Edit</button>

                                        </a>

                                        <a class="col-lg-4 inline-block" href="/admin/ManageArticle/{{$item->id}}">
                                            <button class="btn btn-outline-info col-12">Details</button>
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

