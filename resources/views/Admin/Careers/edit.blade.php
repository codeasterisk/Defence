@extends('Admin.layout')
@section('title')
Edit
{{ $career->title }}
@endsection

@section('header')

    <link rel="stylesheet" href="/admin/plugins/bower_components/html5-editor/bootstrap-wysihtml5.css" />

    <link href="/admin/plugins/bower_components/custom-select/custom-select.css" rel="stylesheet" type="text/css" />
    <link href="/admin/plugins/bower_components/switchery/dist/switchery.min.css" rel="stylesheet" />
    <link href="/admin/plugins/bower_components/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />


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
                    <li><a href="/dashboard/careers">Careers</a></li>
                    <li class="active">Edit {{$career->title}}</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title m-b-0">Edit {{$career->title}}</h3>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">

                            {!!Form::model($career , ['route' => ['careers.update' , $career->id] , 'method' => 'PATCH']) !!}
                            @include('Admin.Careers.form')
                            {!!Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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


    <script src="/admin/plugins/bower_components/custom-select/custom-select.min.js" type="text/javascript"></script>
    <script src="/admin/plugins/bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="/admin/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="/admin/plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/admin/plugins/bower_components/multiselect/js/jquery.multi-select.js"></script>
    <script>
        jQuery(document).ready(function () {
            // Switchery
            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
            $('.js-switch').each(function () {
                new Switchery($(this)[0], $(this).data());
            });
            // For select 2
            $(".select2").select2();
            $('.select2').val('{{$career->job_type}}').trigger('change');
            $('.selectpicker').selectpicker();
            //Bootstrap-TouchSpin
            $(".vertical-spin").TouchSpin({
                verticalbuttons: true
                , verticalupclass: 'ti-plus'
                , verticaldownclass: 'ti-minus'
            });
            var vspinTrue = $(".vertical-spin").TouchSpin({
                verticalbuttons: true
            });
            if (vspinTrue) {
                $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
            }
            $("input[name='tch1']").TouchSpin({
                min: 0
                , max: 100
                , step: 0.1
                , decimals: 2
                , boostat: 5
                , maxboostedstep: 10
                , postfix: '%'
            });
            $("input[name='tch2']").TouchSpin({
                min: -1000000000
                , max: 1000000000
                , stepinterval: 50
                , maxboostedstep: 10000000
                , prefix: '$'
            });
            $("input[name='tch3']").TouchSpin();
            $("input[name='tch3_22']").TouchSpin({
                initval: 40
            });
            $("input[name='tch5']").TouchSpin({
                prefix: "pre"
                , postfix: "post"
            });
            // For multiselect
            $('#pre-selected-options').multiSelect();
            $('#optgroup').multiSelect({
                selectableOptgroup: true
            });
            $('#public-methods').multiSelect();
            $('#select-all').click(function () {
                $('#public-methods').multiSelect('select_all');
                return false;
            });
            $('#deselect-all').click(function () {
                $('#public-methods').multiSelect('deselect_all');
                return false;
            });
            $('#refresh').on('click', function () {
                $('#public-methods').multiSelect('refresh');
                return false;
            });
            $('#add-option').on('click', function () {
                $('#public-methods').multiSelect('addOption', {
                    value: 42
                    , text: 'test 42'
                    , index: 0
                });
                return false;
            });
        });
    </script>


@endsection

