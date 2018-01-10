@extends('Admin.layout')
@section('title')
الرئيسية
@endsection

@section('header')

@endsection
@section('content')
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">الصفحة الرئيسية</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">بلغنا بمشكلة</a>
                <ol class="breadcrumb">
                    <li><a href="#">لوحة التحكم</a></li>
                    <li class="active"> الصفحة الرئيسية</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title">محتوى الصفحة الرئيسية</h3>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')

@endsection
