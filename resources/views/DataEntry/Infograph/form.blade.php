
@if (count($errors) > 0)
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<div class="form-group col-md-12 pull-left">
    <label for="exampleInputEmail1">عنوان الانفوجراف</label>
    {!! Form::text("title",null,['class'=>'form-control'])!!}
</div>

<div class="form-group col-md-12 pull-left">
    <label for="exampleInputPassword1">الصورة الشخصية</label>
    <input type="file" id="input-file-now-custom-3" name="img" class="dropify" data-height="400"
           @if(isset($graph))
           @if($graph->img!=null)
           data-default-file="{{getimg($graph->img)}}"
           @else
           data-default-file="/upload/infograph.jpg"
           @endif
           @else
           data-default-file="/upload/infograph.jpg"
            @endif
    />
</div>

<div class="form-group">
    <label class="col-sm-12">وصف الانفوجراف</label>
    <div class="col-sm-12">
    {!! Form::textarea("description",null,['class'=>'textarea_editor form-control'])!!}
    </div>
</div>

<div class="text-center col-md-12">
    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10 ">حفظ</button>
    <button type="reset" class="btn btn-inverse waves-effect waves-light">إعادة</button>
</div>