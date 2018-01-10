@extends('Admin.layout')
@section('title')
إعدادات الموقع
@endsection

@section('header')

    <link rel="stylesheet" href="/admin/plugins/bower_components/html5-editor/bootstrap-wysihtml5.css" />
@endsection

@section('content')

<!-- Basic Validation -->

<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">{{$type}} Setting</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="/">Dashboard</a></li>
                <li class="active"><a href="/dashboard/setting/{{$type}}">   {{$type}} Setting</a></li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>

<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">{{$type}} Setting</h3>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    {!!Form::open( ['url' => '/dashboard/setting/' , 'method' => 'Post']) !!}
                    @foreach($settings as $setting)
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                @if($setting->field == 0)
                                    <label for="exampleInputEmail1">{{$setting->name}}</label>
                                    {!! Form::text($setting->name,$setting->value,['class'=>'form-control'])!!}
                                @if($setting->name=="MetaTags")
                                    <br>
                                    <div class="alert alert-success">
                                        <strong>Attention :</strong> Meta tags words That you Pepole Can find this website through Search Engines.
                                    </div>
                                        @elseif($setting->name=="SiteDesciprtion")
                                        <br>
                                        <div class="alert alert-info">
                                            <strong>Attention :</strong> Site Desciprtion shouldn't be more than 170 words due to Google.
                                        </div>
                                        @endif

                                @else
                                    <label for="exampleInputEmail1">{{$setting->name}}</label>
                                    {!! Form::textarea($setting->name,$setting->value,['class'=>'textarea_editor form-control'])!!}
                                @endif
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <br>
                    @endforeach
                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                    <button type="reset" class="btn btn-inverse waves-effect waves-light">Reset</button>
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
    <!-- wysuhtml5 Plugin JavaScript -->
    <script src="/admin/plugins/bower_components/html5-editor/wysihtml5-0.3.0.js"></script>
    <script src="/admin/plugins/bower_components/html5-editor/bootstrap-wysihtml5.js"></script>
    <script>
        $(document).ready(function () {
            $('.textarea_editor').wysihtml5();
        });
    </script>
    <!--Style Switcher -->
    <script src="/admin/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>



@endsection
