@extends('Admin.layout')
@section('title')
    الانفوجراف
@endsection

@section('header')
  <link href="/admin/plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
  <div class="container-fluid">
    <div class="row bg-title">
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">الفيديوهات</h4> </div>
      <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
          <li><a href="/">لوحة التحكم</a></li>
          <li><a href="/dashboard/infographics">الانفوجراف</a></li>
          <li class="active">كل الانفوجراف</li>
        </ol>
      </div>
      <!-- /.col-lg-12 -->
    </div>
    <!-- /row -->
    <div class="row">

      <div class="col-sm-12">
        <div class="white-box">
          <h3 class="box-title m-b-0">الانفوجراف</h3>
          <p class="text-muted m-b-30">التحكم بالانفوجراف</p>
          <div class="table-responsive">
            <table id="example23" class="display nowrap" cellspacing="0" width="100%">
              <thead>
              <tr>
                <th>#</th>
                <th>عنوان الانفوجراف</th>
                  <th>القسم</th>
                  <th>الكاتب</th>
                  <th>تاريخ الإضافة</th>
                  <th>العمليات</th>
              </tr>
              </thead>
              <tfoot>
              <tr>
                  <th>#</th>
                  <th>عنوان الانفوجراف</th>
                  <th>القسم</th>
                  <th>الكاتب</th>
                  <th>تاريخ الإضافة</th>
                  <th>العمليات</th>
              </tr>
              </tfoot>
              <tbody>
              @foreach($graphs as $graph)
              <tr>
                <td>{{$graph->id}}</td>
                <td>{{$graph->title}}</td>
                  <td> <span class="label label-primary">{{$graph->category->title}}</span></td>
                  <td>
                  <span class="label label-info">{{$graph->writer->name}}</span>
                  </td>
                  <td> {{date("d M Y", strtotime($graph->created_at)) }}</td>
                <td class="text-nowrap">
                  <a href="/dashboard/infographics/{{$graph->id}}/edit" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                    <a href="/dashboard/infographics/destroy/{{$graph->id}}" id="delete-btn"  data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-trash -o text-danger"></i></a>
                </td>
              </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

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
                  title: "هل أنت متأكد ؟",
                  text: "هل تريد حذف هذا الانفوجراف ؟",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
              }).then(function(isConfirm){
                  if(isConfirm){
                      window.location = link.attr('href');
                  }
                  else{
                      swal("تم الإلغاء", "حذف الانفوجراف تم الغاؤه", "جيد");
                  }
              });

          },
      };

      deleter.init();
  </script>

@endsection
