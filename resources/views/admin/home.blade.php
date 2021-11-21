@extends('admin.layout.auth')

@section('body')
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Dashboard</div>

            <div class="panel-body">
                You are logged in as Admin! <br>
                <a href="/admin/" class="btn btn-success">Panel Admin</a>
            </div>
        </div>
    </div>
@endsection
