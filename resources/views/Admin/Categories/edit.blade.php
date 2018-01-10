@extends('Admin.layout')
@section('title')
Edit
{{ $category->name }}
@endsection

@section('header')

@endsection

@section('content')

    <!-- Basic Validation -->

    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Categories</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="/">Dashboard</a></li>
                    <li><a href="/dashboard/categories">Categories</a></li>
                    <li class="active">Edit {{$category->name}}</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title m-b-0">Edit {{$category->name}}</h3>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">

                            {!!Form::model($category , ['route' => ['categories.update' , $category->id] , 'method' => 'PATCH']) !!}
                            @include('Admin.Categories.form')
                            {!!Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer')


@endsection
