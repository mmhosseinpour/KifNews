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


                    <div class="card-body">
                        <h5 class="card-title">Product <span>| list</span></h5>


                        <a href="/admin/ManageProduct/create">
                            <button class="btn btn-outline-success">Create</button>
                        </a>

                        <table class="table table-bordered table-hover table-responsive">
                            <thead>
                            <tr>
                                <th scope="col">
                                    <a href="/admin/ManageProduct?orderby=id">
                                        Id
                                    </a>
                                </th>
                                <th scope="col">
                                    <a href="/admin/ManageProduct?orderby=title">
                                        title
                                    </a></th>
                                <th scope="col">
                                    category
                                </th>
                                <th scope="col">
                                    <a href="/admin/ManageProduct?orderby=inventory">
                                        inventory
                                    </a>
                                </th>
                                <th scope="col">
                                    <a href="/admin/ManageProduct?orderby=price">
                                        price
                                    </a>
                                </th>
                                <th scope="col">
                                    Action
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $item)
                                <tr>
                                    <th scope="row">{{$item->id}}</th>
                                    <th scope="row">{{$item->title}}</th>
                                    <td>
                                        {{$item->GetCategory()}}
                                        </span></td>
                                    <td><a href="/admin/ManageArticle/{{$item->id}}"
                                           class="text-primary">{{$item->inventory}}</a></td>
                                    <td>{{$item->price}}</td>

                                    <td class="row col-12">
                                        <form class="col-lg-4 inline-block" action="/admin/ManageProduct/{{$item->id}}"
                                              method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-outline-danger col-12" type="submit">Delete</button>
                                        </form>

                                        <a class="col-lg-4 inline-block" href="/admin/ManageProduct/{{$item->id}}/edit">
                                            <button class="btn btn-outline-warning col-12">Edit</button>

                                        </a>

                                        <a class="col-lg-4 inline-block" href="/admin/ManageProduct/{{$item->id}}">
                                            <button class="btn btn-outline-info col-12">Details</button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @for($i=1; $i<=$count;$i++)
                            <a class="btn btn-outline-info" href="/admin/ManageProduct?page={{$i}}">{{$i}}</a>
                        @endfor
                    </div>

                </div>
            </div>
            <!-- End Recent Sales -->

            @include('layout._rightNav')

        </div>
    </section>
@endsection

