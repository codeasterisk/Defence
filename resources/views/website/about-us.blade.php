@extends('layouts.app')

@section('title')
الصفحة الرئيسية
@endsection

@section('header')

@endsection

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url(/website/img/blog/contact.jpg);">
        <div class="full-overlay"></div>
        <div class="container">
            <div class="page-title__holder">
                <h1 class="page-title__title">عن شبكة الدفاع</h1>
                <p class="lead white">هنا يكتب نص قصير</p>
            </div>
        </div>
    </section>

    <div class="main-container container" id="main-container">

        <!-- Content -->
        <div class="row">

            <!-- post content -->
            <div class="col-lg-12 blog__content mb-30 text-center">
                <div class="row">
                    <div class="col-md-12 mb-30">
                        <h2>هكذا بدأنا</h2>
                        <p class="lead mb-20">هنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصير</p>

                        <p>هنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصير</p>
                    </div>
                    <div class="col-md-6">
                        <img data-src="img/blog/about_img.jpg" src="img/empty.png" class="lazyload" alt="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-30">
                        <h2>أعضاء الفريق</h2>
                        <p class="lead mb-20">فريق ذو كفاءة عالية!</p>

                        <p>هنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصيرهنا يكتب نص قصير</p>
                    </div>
                    <div class="col-md-2">
                        <div style="border: solid 5px #80808059;padding: 15px 0; border-radius: 10px;margin-bottom: 15px">
                            <img style="display: inline-block" data-src="{{ getimg('user.png') }}" src="{{ getimg('user.png') }}" class="lazyload" alt="">
                            <h3 style="display: block; margin-top: 25px">اسم عضو الفريق</h3>
                            <a style="display: block; margin-top: 15px">المنصب</a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div style="border: solid 5px #80808059;padding: 15px 0; border-radius: 10px;margin-bottom: 15px">
                            <img style="display: inline-block" data-src="{{ getimg('user.png') }}" src="{{ getimg('user.png') }}" class="lazyload" alt="">
                            <h3 style="display: block; margin-top: 25px">اسم عضو الفريق</h3>
                            <a style="display: block; margin-top: 15px">المنصب</a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div style="border: solid 5px #80808059;padding: 15px 0; border-radius: 10px;margin-bottom: 15px">
                            <img style="display: inline-block" data-src="{{ getimg('user.png') }}" src="{{ getimg('user.png') }}" class="lazyload" alt="">
                            <h3 style="display: block; margin-top: 25px">اسم عضو الفريق</h3>
                            <a style="display: block; margin-top: 15px">المنصب</a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div style="border: solid 5px #80808059;padding: 15px 0; border-radius: 10px;margin-bottom: 15px">
                            <img style="display: inline-block" data-src="{{ getimg('user.png') }}" src="{{ getimg('user.png') }}" class="lazyload" alt="">
                            <h3 style="display: block; margin-top: 25px">اسم عضو الفريق</h3>
                            <a style="display: block; margin-top: 15px">المنصب</a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div style="border: solid 5px #80808059;padding: 15px 0; border-radius: 10px;margin-bottom: 15px">
                            <img style="display: inline-block" data-src="{{ getimg('user.png') }}" src="{{ getimg('user.png') }}" class="lazyload" alt="">
                            <h3 style="display: block; margin-top: 25px">اسم عضو الفريق</h3>
                            <a style="display: block; margin-top: 15px">المنصب</a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div style="border: solid 5px #80808059;padding: 15px 0; border-radius: 10px;margin-bottom: 15px">
                            <img style="display: inline-block" data-src="{{ getimg('user.png') }}" src="{{ getimg('user.png') }}" class="lazyload" alt="">
                            <h3 style="display: block; margin-top: 25px">اسم عضو الفريق</h3>
                            <a style="display: block; margin-top: 15px">المنصب</a>
                        </div>
                    </div>
                </div>

            </div> <!-- end col -->

        </div> <!-- end content -->
    </div> <!-- end main container -->
@endsection

@section('footer')

@endsection