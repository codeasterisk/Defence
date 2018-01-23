
@if (count($errors) > 0)
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<div class="form-group col-md-3 pull-left">
    <label for="exampleInputEmail1">بادئة الخبر</label>
    {!! Form::text("prefix",null,['class'=>'form-control'])!!}
</div>

<div class="form-group col-md-6 pull-left">
    <label for="exampleInputEmail1">عنوان الخبر</label>
    {!! Form::text("title",null,['class'=>'form-control'])!!}
</div>

    <div class="form-group col-md-3 pull-left">
        <label for="exampleInputPassword1">قسم التخصص</label>
        <select class="selectpicker cat" name="cat_id" data-style="btn-info btn-outline" data-placeholder="اختر اقسام التخصص">
            @foreach(\App\Category::where('type','news')->get() as $cat)
                <option value="{{$cat->id}}">{{$cat->title}}</option>
            @endforeach
        </select>
    </div>


<div class="form-group col-md-12 pull-left">
    <label for="exampleInputPassword1">الصورة الرئيسية للخبر</label>
    <input type="file" id="input-file-now-custom-3" name="img" class="dropify" data-height="400"
           @if(isset($new))
           @if($new->img!=null)
           data-default-file="{{getimg($new->img)}}"
           @else
           data-default-file="/upload/default_news.png"
           @endif
           @else
           data-default-file="/upload/default_news.png"
            @endif
    />
</div>


<div class="form-group col-md-9 pull-left">
    <label for="exampleInputEmail1">وصف مبسط للخبر</label>
    {!! Form::text("description",null,['class'=>'form-control'])!!}
</div>



<div class="form-group col-md-3 pull-left">
    <label for="exampleInputPassword1">حالة الخبر</label>
    {!! Form::select("status",status(),null,['class'=>'selectpicker col-md-10','data-style'=>'btn-info btn-outline','width'=>'100'])!!}
</div>

<div class="alert alert-warning col-md-12">
    <strong>تنبيه!</strong> الوصف المبسط ﻻ ينبغي ان يتعدى عن 160 خرف طبقاً لقواعد أرشفة جوجل
</div>

<div class="form-group">
    <label class="col-sm-12">موضوع الخبر</label>
    <div class="col-sm-12">
    {!! Form::textarea("subject",null,['class'=>'textarea_editor form-control'])!!}
    </div>
</div>

<div class="text-center col-md-12">
    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10 ">حفظ</button>
    <button type="reset" class="btn btn-inverse waves-effect waves-light">إعادة</button>
</div>