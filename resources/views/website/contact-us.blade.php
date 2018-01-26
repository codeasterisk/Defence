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
                <h1 class="page-title__title">اتصل بنا</h1>
                <p class="lead white">نسعد بخدمتكم على مدار الساعة.</p>
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
                        <form id="contact-form" class="contact-form mt-30 mb-30" method="post" action="{{ route('submit-contact-us') }}">

                            {{ csrf_field() }}
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="contact-name">
                                        <label for="name">الإسم <abbr title="required" class="required">*</abbr></label>
                                        <input name="name" id="name" required type="text">
                                    </div>
                                    <div class="contact-email">
                                        <label for="email">البريد الإلكتروني <abbr title="required" class="required">*</abbr></label>
                                        <input name="email" id="email" required type="email">
                                    </div>
                                    <div class="contact-subject">
                                        <label for="email">عنوان الرسالة<abbr title="required" class="required">*</abbr></label>
                                        <input name="subject" id="subject" required type="text">
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="contact-message">
                                        <label for="message">الرسالة <abbr title="required" class="required">*</abbr></label>
                                        <textarea id="message" name="message" rows="7" required="required"></textarea>
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