@extends('Admin.layout')
@section('title')
  عرض {{$applicant->name}}
@endsection

@section('header')

@endsection
@section('content')
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">عرض {{$applicant->name}} </h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="/dashboard">لوحة التحكم</a></li>
                    <li><a href="/dashboard/applicants">السير الذاتية</a></li>
                    <li class="active">عرض {{$applicant->name}}</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- row -->
        <div class="row">
            <!-- Left sidebar -->
            <div class="col-md-12">
                <div class="white-box">
                    <div class="row">

                        <div class="col-lg-2 col-md-3  col-sm-12 col-xs-12 inbox-panel">
                            <div> <a href="#" class="btn btn-custom btn-block waves-effect waves-light">العمليات</a>
                                <div class="list-group mail-list m-t-20">
                                    <a href="#" class="list-group-item active">السير المستقبلة<span class="label label-rouded label-success pull-right">{{count(\App\Joinus::all())}}</span></a>

                                    <a href="#" class="list-group-item active m-t-20">المقروء<span class="label label-rouded label-info pull-right">{{count(\App\Joinus::where('status',1)->get())}}</span></a>

                                    <a href="#" class="list-group-item active m-t-20">الغبر مقروء<span class="label label-rouded label-danger pull-right">{{count(\App\Joinus::where('status',0)->get())}}</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-10 col-md-9 col-sm-8 col-xs-12 mail_listing">
                            <div class="media m-b-30 p-t-20">
                                <a class="pull-left" href="#"> <img class="media-object thumb-sm img-circle" src="/admin/plugins/images/users/d1.jpg" alt=""> </a>
                                <div class="media-body">
                                    <span class="media-meta pull-right">{{ date("d M Y", strtotime($applicant->created_at))}}</span>
                                    <h4 class="text-danger m-0">{{$applicant->name}}</h4> <small class="text-muted"> من : {{$applicant->email}}</small>
                                    <br>
                                    <small class="text-muted">المسمى الوظيفي : {{$applicant->job_title}}</small>
                                </div>
                            </div>
                            <Br>
                            <p>{{$applicant->about}}</p>
                            <hr>
                            <p>يمكنك تحميل او عرض السيرة الذاتية من <a href="/cvs/{{$applicant->cv}}">هنا</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>

@endsection
@section('footer')

  <script src="/admin/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>

  <script>
      var deleter = {

          linkSelector : "a#delete-btn",

          init: function() {
              $(this.linkSelector).on('click', {self:this}, this.handleClick);
          },

          handleClick: function(event) {
              event.preventDefault();

              var self = event.data.self;
              var link = $(this);

              swal({
                  title: "Are you sure?",
                  text: "Do you want to Delete This Category!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
              }).then(function(isConfirm){
                  if(isConfirm){
                      window.location = link.attr('href');
                  }
                  else{
                      swal("cancelled", "Category Deletion Cancelled", "error");
                  }
              });

          },
      };

      deleter.init();
  </script>

@endsection
