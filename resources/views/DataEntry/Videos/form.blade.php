
@if (count($errors) > 0)
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif


<div class="form-group col-md-6 pull-left">
    <label for="exampleInputEmail1">عنوان الفيديو</label>
    {!! Form::text("title",null,['class'=>'form-control'])!!}
</div>

<div class="form-group col-md-6 pull-left">
    <label for="exampleInputPassword1">قسم التخصص</label>
    <select class="selectpicker cat col-md-12" name="cat_id" data-style="btn-info btn-outline" data-placeholder="اختر اقسام التخصص">
        @foreach(\App\Category::where('type','video')->get() as $cat)
            <option value="{{$cat->id}}">{{$cat->title}}</option>
        @endforeach
    </select>
</div>

<div class="form-group col-md-12 pull-left">
    <label for="exampleInputEmail1">رابط الفيديو على اليوتيوب</label>
    {!! Form::text("url",null,['class'=>'form-control'])!!}
</div>


<div class="form-group">
    <label class="col-sm-12">وصف الفيديو</label>
    <div class="col-sm-12">
    {!! Form::textarea("description",null,['class'=>'textarea_editor form-control'])!!}
    </div>
</div>

<div class="text-center col-md-12">
    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10 ">حفظ</button>
    <button type="reset" class="btn btn-inverse waves-effect waves-light">إعادة</button>
</div>