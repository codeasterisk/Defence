@extends('Admin.layout')
@section('title')
Add New User
@endsection

@section('header')



@endsection

@section('content')

<!-- Basic Validation -->

<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Users</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="/">Dashboard</a></li>
                <li><a href="/dashboard/users">Users</a></li>
                <li class="active">Add new user</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>

<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">Add New User</h3>
            <div class="row">
                <div class="col-sm-12 col-xs-12">

                    {!!Form::open( ['url' => '/dashboard/users/' , 'method' => 'Post']) !!}
                    @include('Admin.Users.form')
                    {!!Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
</div>



<!-- #END# Basic Validation -->
@endsection

@section('footer')

@endsection
