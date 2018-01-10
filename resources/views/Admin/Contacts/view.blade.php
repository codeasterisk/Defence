@extends('Admin.layout')
@section('title')
  View {{$contact->name}}
@endsection

@section('header')

@endsection
@section('content')
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">View {{$contact->name}}</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li><a href="/dashboard/contacts">Contacts</a></li>
                    <li class="active">View {{$contact->name}}</li>
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
                            <div> <a href="#" class="btn btn-custom btn-block waves-effect waves-light">Operations</a>
                                <div class="list-group mail-list m-t-20">
                                    <a href="#" class="list-group-item active">Received<span class="label label-rouded label-success pull-right">{{count(\App\Contact::all())}}</span></a>

                                    <a href="#" class="list-group-item active m-t-20">Seen<span class="label label-rouded label-info pull-right">{{count(\App\Contact::where('status',1)->get())}}</span></a>

                                    <a href="#" class="list-group-item active m-t-20">Unseen<span class="label label-rouded label-danger pull-right">{{count(\App\Contact::where('status',0)->get())}}</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-10 col-md-9 col-sm-8 col-xs-12 mail_listing">
                            <div class="media m-b-30 p-t-20">
                                <a class="pull-left" href="#"> <img class="media-object thumb-sm img-circle" src="/admin/plugins/images/users/d1.jpg" alt=""> </a>
                                <div class="media-body">
                                    <span class="media-meta pull-right">{{ date("d M Y", strtotime($contact->created_at))}}</span>
                                    <h4 class="text-danger m-0">{{$contact->name}}</h4> <small class="text-muted">From: {{$contact->email}}</small>
                                    <br>
                                    <small class="text-muted">phone: {{$contact->phone}}</small>
                                    <span class="media-meta pull-right label label-info">{{$contact->type}}</span>
                                </div>
                            </div>

                            <p>subject :
                                <br>
                                {{$contact->subject}}
                            </p>
                            <hr>
                            <strong>Address : {{$contact->address}}</strong>
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


@endsection
