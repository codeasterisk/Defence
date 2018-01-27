@extends('layouts.app')

@section('title')
الصفحة الرئيسية
@endsection

@section('header')

@endsection
@section('meta')
    <meta name="keywords" content="شارك, اكتب, صحفي, صحافة, شبكة, اخبار, الدفاع">
    <meta name="description" content='كن انت الصحفي واكتب مقالك على شبكة اخبار الدفاع'>
@endsection
@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url(/website/img/blog/contact.jpg);">
        <div class="full-overlay"></div>
        <div class="container">
            <div class="page-title__holder">
                <h1 class="page-title__title">شارك معنا</h1>
                <p class="lead white">كنت أنت الصحفي وشارك معنا بمقالك!</p>
            </div>
        </div>
    </section>

    <div class="main-container container" id="main-container">

        <!-- Content -->
        <div class="row">

            <!-- post content -->
            <div class="col-lg-12 blog__content mb-30">
                <div class="row justify-content-md-center">
                    <div class="col-lg-8">
                        <!-- Contact Form -->
                        <form id="contact-form" class="contact-form mt-30 mb-30" enctype="multipart/form-data" method="post" action="{{ route('submit-write') }}">

                            {{ csrf_field() }}
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="contact-name">
                                        <label for="prefix"> بادئة الخبر <abbr title="required" class="required">*</abbr></label>
                                        <input name="prefix" id="prefix" required type="text" placeholder="مثال: حصري">
                                    </div>
                                    <div class="contact-name">
                                        <label for="writer"> اسم الكاتب <abbr title="required" class="required">*</abbr></label>
                                        <input name="writer" id="writer" required type="text" placeholder="">
                                    </div>
                                    <div class="contact-name">
                                        <label for="title"> عنوان الخبر <abbr title="required" class="required">*</abbr></label>
                                        <input name="title" id="title" required type="text" placeholder="">
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="contact-name" style="max-width: 100%">
                                        <label for="description"> وصف مختصر <abbr title="required" class="required">*</abbr></label>
                                        <input name="description" style="width: 100%" id="description" required type="text" max="255" placeholder="بحد أقصى 255 حرف">
                                    </div>
                                    <div class="contact-message">
                                        <label for="subject">الموضوع <abbr title="required" class="required">*</abbr></label>
                                        <textarea name="subject" id="subject" rows="7" required="required"></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6">
                                            <div class="contact-name">
                                                <label for="category">إختر قسماً إخبارياً</label>
                                                <select name="category" required style="background-position: 5% 50%;">
                                                    @foreach($categories as $category)<option value="{{ $category->id }}">{{ $category->title }}</option>@endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <div class="contact-name">
                                                <label for="img">صورة <abbr title="required" class="required">*</abbr></label>
                                                <input name="img" id="img" required type="file" accept="image/*" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-lg btn-color btn-button" style="margin: 0 auto" value="أرسل">
                                <div id="" class="">@if($errors->any())@foreach($errors->all() as $error){!! $error !!}@endforeach @endif</div>
                            </div>
                        </form>

                    </div>
                </div>
            </div> <!-- end col -->

        </div> <!-- end content -->
    </div> <!-- end main container -->
@endsection

@section('footer')

@endsection