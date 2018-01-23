@extends('DataEntry.layout')
@section('title')
    تعديل
    {{ $graph->title }}
@endsection

@section('header')

    <link rel="stylesheet" href="/admin/plugins/bower_components/html5-editor/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" href="/admin/plugins/bower_components/dropify/dist/css/dropify.min.css">

@endsection

@section('content')

    <!-- Basic Validation -->

    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Users</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="/editors">لوحة التحكم</a></li>
                    <li><a href="/editors/infographics">الانفوجرافيكس</a></li>
                    <li class="active">تعديل {{$graph->title}}</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title m-b-0">تعديل {{$graph->title}}</h3>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">

                            {!!Form::model($graph , ['url' => ['/editors/infographics/'. $graph->id] , 'method' => 'PATCH','files'=>'true']) !!}
                            @include('DataEntry.Infograph.form')
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

    <script src="/admin/plugins/bower_components/dropify/dist/js/dropify.min.js"></script>
    <script>
        $(document).ready(function() {
            // Basic
            $('.dropify').dropify();

            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove: 'Supprimer',
                    error: 'Désolé, le fichier trop volumineux'
                }
            });

            // Used events
            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function(event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element) {
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function(event, element) {
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function(e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });
    </script>


@endsection

