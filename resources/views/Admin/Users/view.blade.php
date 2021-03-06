@extends('Admin.layout')
@section('title')
    عرض العضو {{$user->id}}
@endsection

@section('header')
    <!-- morris CSS -->
    <link href="/admin/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="/admin/assets/css/animate.css" rel="stylesheet">
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">الصفحة الرئيسية</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="/dashboard/users">الاعضاء</a></li>
                    <li class="active">{{$user->name}}عرض</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- .row -->


        <div class="row">
            <div class="col-md-12 col-lg-12 col-xs-12">
                <div class="white-box">
                    <div class="user-bg"> <img src="{{getimg($user->profile_img)}}" alt="user" style="100%">
                        <div class="overlay-box">
                            <div class="user-content">
                                <a href="javascript:void(0)"><img alt="img" class="thumb-lg img-circle" src="{{getimg($user->profile_img)}}"></a>
                                <h4 class="text-white">{{$user->name}}</h4>
                                <h5 class="text-white">{{$user->email}}</h5> </div>
                        </div>
                    </div>
                    <div class="user-btm-box">
                        @if($user->role == 0)
                        <div class="row">
                            <div class="stats-row col-md-6 m-t-20 m-b-0 text-center">
                                <div class="stat-item">
                                    <h6>الأقسام المسئول عنها</h6>
                                    @foreach($user->Categories as $cat)
                                        <b><i class="fa fa-folder"></i> {{$cat->title}}  </b>
                                    @endforeach
                                </div>
                            </div>
                            <div class="stats-row col-md-6 m-t-20 m-b-0 text-center">
                                <div class="stat-item">
                                    <h6>صلاحيات الميديا</h6>
                                    @foreach($user->permissions as $permission)
                                        <b><i class="fa fa-folder"></i> {{$permission->name}}  </b>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                            @elseif($user->role == 1)
                            <div class="user-btm-box">
                                <div class="row">
                                    <div class="stats-row col-md-12 m-t-20 m-b-0 text-center">
                                        <div class="stat-item">
                                            <h6>الصلاحيات</h6>
                                            <b><i class="fa fa-folder"></i> مدير الموقع </b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                    </div>

                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <h4>بعض الاحصائيات<a class="get-code" data-toggle="collapse" href="#pgr1" aria-expanded="true"><i class="fa fa-code" title="Get Code" data-toggle="tooltip"></i></a></h4>
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">عدد مقاﻻتي</h3>
                            <ul class="list-inline two-part">
                                <li><i class="fa fa-newspaper-o text-info"></i></li>
                                <li class="text-right"><span class="counter">{{$user->news->count()}}</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">عدد فيديوهاتي</h3>
                            <ul class="list-inline two-part">
                                <li><i class="fa fa-file-video-o text-purple"></i></li>
                                <li class="text-right"><span class="counter">{{$user->videos->count()}}</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">عدد الانفوجرافيكس</h3>
                            <ul class="list-inline two-part">
                                <li><i class="fa fa-file-image-o text-danger"></i></li>
                                <li class="text-right"><span class="counter">{{$user->infographics->count()}}</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">عدد زيارات مقالاتي </h3>
                            <ul class="list-inline two-part">
                                <li><i class="fa fa-users text-success"></i></li>
                                <li class="text-right"><span class="counter">{{$user->news->pluck('clicks')->sum()}}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.row -->
        <!-- .row -->

        <!-- .row -->

        <div class="row">
            @if($user->role != 1)
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="white-box">
                    <h3 class="box-title">آخر نشاطات العضو في لوحة التحكم</h3>
                    <div class="steamline">
                        @foreach(\Spatie\Activitylog\Models\Activity::where('causer_id',$user->id)->orderby('id','desc')->get()->take(5) as $activity)
                            <div class="sl-item">
                                <div class="sl-left"> <img class="img-circle" alt="user" src="{{getimg($user->profile_img)}}"></div>
                                <div class="sl-right">
                                    <div><a href="#">{{$user->name}}</a> <span class="sl-date"> {{date("d M Y H", strtotime($activity->created_at)) }}</span></div>
                                    <p>{{$activity->description}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
                @endif
        </div>
        <!--/.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title">آخر الأخبار المضافة</h3>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>اسم الخبر</th>
                                <th>القسم</th>
                                <th>العنوان</th>
                                <th>الزيارات</th>
                                <th class="text-center">العمليات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($user->news()->orderby('id','desc')->get() as $new)
                                <tr>
                                    <td><a href="#" class="btn-link">{{$new->id}}</a></td>
                                    <td>{{$new->title}}</td>
                                    <td> <div class="label label-table label-info">{{$new->category->title}}</div></td>
                                    <td><span class="text-muted"><i class="fa fa-clock-o"></i>{{date("d M Y H", strtotime($new->created_at)) }}</span></td>
                                    <td>{{$new->clicks}}</td>
                                    <td class="text-center">
                                        <a href="/dashboard/news/{{$new->id}}/edit" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/.row -->

        <!--/.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title">آخر الفيديوهات المضافة</h3>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>اسم الفيديو</th>
                                <th>القسم</th>
                                <th>العنوان</th>
                                <th class="text-center">العمليات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($user->videos()->orderby('id','desc')->get() as $video)
                                <tr>
                                    <td><a href="#" class="btn-link">{{$new->id}}</a></td>
                                    <td>{{$video->title}}</td>
                                    <td> <div class="label label-table label-info">{{$new->category->title}}</div></td>
                                    <td><span class="text-muted"><i class="fa fa-clock-o"></i>{{date("d M Y H", strtotime($new->created_at)) }}</span></td>
                                    <td class="text-center">
                                        <a href="/dashboard/videos/{{$new->id}}/edit" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/.row -->

        <!--/.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title">آخر الانفوجراف المضافة</h3>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>اسم الانفوجراف</th>
                                <th>القسم</th>
                                <th>العنوان</th>
                                <th class="text-center">العمليات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($user->infographics()->orderby('id','desc')->get() as $info)
                                <tr>
                                    <td><a href="#" class="btn-link">{{$info->id}}</a></td>
                                    <td>{{$info->title}}</td>
                                    <td> <div class="label label-table label-info">{{$info->category->title}}</div></td>
                                    <td><span class="text-muted"><i class="fa fa-clock-o"></i>{{date("d M Y H", strtotime($info->created_at)) }}</span></td>
                                    <td class="text-center">
                                        <a href="/dashboard/infographics/{{$info->id}}/edit" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/.row -->
    </div>
@endsection
@section('footer')
    <!--weather icon -->
    <script src="/admin/plugins/bower_components/skycons/skycons.js"></script>
    <!--Counter js -->
    <script src="/admin/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="/admin/plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!--Morris JavaScript -->
    <script src="/admin/plugins/bower_components/raphael/raphael-min.js"></script>
    <!--Morris JavaScript -->
    <!-- Custom Theme JavaScript -->
    <script src="/admin/assets/js/custom.min.js"></script>
    <script src="/admin/assets/js/dashboard4.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="/admin/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="/admin/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>

@endsection
