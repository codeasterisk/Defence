@extends('Admin.layout')
@section('title')
  Contacts
@endsection

@section('header')
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Contacts</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li class="active">Contacts</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- row -->
        <div class="row">
            <!-- Left sidebar -->
            <div class="col-md-12">
                <div class="white-box">
                    <!-- row -->
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


                        <div class="col-lg-10 col-md-9 col-sm-12 col-xs-12 mail_listing">
                            <div class="inbox-center">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            Name
                                        </th>

                                        <th>
                                            Email
                                        </th>

                                        <th>
                                            status
                                        </th>

                                        <th class="text-right">
                                            Date
                                        </th>

                                        <th class="text-right">
                                            Opertation
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($contacts as $contact)
                                    <tr class="unread">
                                        <td class="hidden-xs">#{{$contact->id}}</td>
                                        <td class="hidden-xs">{{$contact->name}}</td>
                                        <td class="max-texts">{{$contact->email}}</td>
                                        </td>
                                        <td class="">
                                            @if($contact->status==0)
                                                <span class="label label-danger">UnSeen</span>
                                            @else
                                                <span class="label label-info">Seen</span>
                                            @endif
                                        </td>
                                        <td class="text-right"> {{ date("d M Y", strtotime($contact->created_at))}} </td>
                                        <td class="text-right">
                                            <a href="/dashboard/contact/{{$contact->id}}" data-toggle="tooltip" data-original-title="View"> <i class="fa fa-search text-inverse m-r-10"></i> </a>
                                            <a href="/dashboard/contact/destroy/{{$contact->id}}" id="delete-btn"  data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-trash -o text-danger"></i></a>
                                        </td>
                                    </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-md-12 m-t-20">
                                    <div class="btn-group pull-right">
                                        {{$contacts->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- .right-sidebar -->
        <div class="right-sidebar">
            <div class="slimscrollright">
                <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                <div class="r-panel-body">
                    <ul>
                        <li><b>Layout Options</b></li>
                        <li>
                            <div class="checkbox checkbox-info">
                                <input id="checkbox1" type="checkbox" class="fxhdr">
                                <label for="checkbox1"> Fix Header </label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox checkbox-warning">
                                <input id="checkbox2" type="checkbox" checked="" class="fxsdr">
                                <label for="checkbox2"> Fix Sidebar </label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox checkbox-success">
                                <input id="checkbox4" type="checkbox" class="open-close">
                                <label for="checkbox4"> Toggle Sidebar </label>
                            </div>
                        </li>
                    </ul>
                    <ul id="themecolors" class="m-t-20">
                        <li><b>With Light sidebar</b></li>
                        <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                        <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                        <li><a href="javascript:void(0)" data-theme="gray" class="yellow-theme">3</a></li>
                        <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                        <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                        <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme working">6</a></li>
                        <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                        <br/>
                        <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                        <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                        <li><a href="javascript:void(0)" data-theme="gray-dark" class="yellow-dark-theme">9</a></li>
                        <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                        <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                        <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme">12</a></li>
                    </ul>
                    <ul class="m-t-20 chatonline">
                        <li><b>Chat option</b></li>
                        <li>
                            <a href="javascript:void(0)"><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="..pr/plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /.right-sidebar -->
    </div>

@endsection
@section('footer')
  <script src="/admin/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
  <!-- start - This is for export functionality only -->
  <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
  <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
  <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
  <!-- end - This is for export functionality only -->
  <script>
      $(document).ready(function () {
          $('#myTable').DataTable();
          $(document).ready(function () {
              var table = $('#example').DataTable({
                  "columnDefs": [
                      {
                          "visible": false
                          , "targets": 2
                      }
                  ]
                  , "order": [[2, 'asc']]
                  , "displayLength": 25
                  , "drawCallback": function (settings) {
                      var api = this.api();
                      var rows = api.rows({
                          page: 'current'
                      }).nodes();
                      var last = null;
                      api.column(2, {
                          page: 'current'
                      }).data().each(function (group, i) {
                          if (last !== group) {
                              $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                              last = group;
                          }
                      });
                  }
              });
              // Order by the grouping
              $('#example tbody').on('click', 'tr.group', function () {
                  var currentOrder = table.order()[0];
                  if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                      table.order([2, 'desc']).draw();
                  }
                  else {
                      table.order([2, 'asc']).draw();
                  }
              });
          });
      });
      $('#example23').DataTable({
          dom: 'Bfrtip'
          , buttons: [
              'copy', 'csv', 'excel', 'pdf', 'print'
          ]
      });
  </script>
  <!--Style Switcher -->
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
                  text: "Do you want to Delete This Contact!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
              }).then(function(isConfirm){
                  if(isConfirm){
                      window.location = link.attr('href');
                  }
                  else{
                      swal("cancelled", "Contact Deletion Cancelled", "error");
                  }
              });

          },
      };

      deleter.init();
  </script>

@endsection
