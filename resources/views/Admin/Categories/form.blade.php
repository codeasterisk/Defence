
@if (count($errors) > 0)
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
<row>
<div class="form-group col-md-6 pull-left">
    <label for="exampleInputEmail1">اسم القسم</label>
    {!! Form::text("title",null,['class'=>'form-control'])!!}
</div>


<div class="form-group col-md-6 pull-left">
    <label for="exampleInputPassword1">نوع القسم</label>
    {!! Form::select("type",cat_type(),null,['class'=>'selectpicker col-md-12','data-style'=>'btn-info btn-outline','width'=>'100'])!!}
</div>
</row>


<div class="text-center col-md-12">
    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10 ">حفظ</button>
    <button type="reset" class="btn btn-inverse waves-effect waves-light">إعادة</button>
</div>