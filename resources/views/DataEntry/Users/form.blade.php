
@if (count($errors) > 0)
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

@if(isset($user))
  <input type="hidden" value="{{ $user->id }}" name="id">
@endif

<div class="form-group col-md-6 pull-left">
    <label for="exampleInputEmail1">إسم العضو</label>
    {!! Form::text("name",null,['class'=>'form-control','placeholder'=>'أكتب هنا اسم العضو'])!!}
</div>
<div class="form-group col-md-6 pull-left">
    <label for="exampleInputEmail1">الإيميل</label>
    {!! Form::email("email",null,['class'=>'form-control','placeholder'=>'أكتب هنا اسم الايميل'])!!}
</div>
<div class="form-group col-md-6 pull-left">
    <label for="exampleInputPassword1">باسورد</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="اكتب هنا الباسورد">
</div>
<div class="form-group col-md-6 pull-left">
    <label for="exampleInputPassword1">إعادة كتابة الباسورد</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation" placeholder="أعد هنا كتابة الباسورد">
</div>

<div class="form-group col-md-12 pull-left">
    <label for="exampleInputPassword1">الصورة الشخصية</label>
    <input type="file" id="input-file-now-custom-3" name="profile_img" class="dropify" data-height="200"
           @if(isset($user))
         @if($user->profile_img!=null)
           data-default-file="{{getimg($user->profile_img)}}"
           @else
           data-default-file="/upload/user.png"
           @endif
            @else
           data-default-file="/upload/user.png"
         @endif
    />
</div>




<div class="text-center col-md-12">
<button type="submit" class="btn btn-success waves-effect waves-light m-r-10 ">حفظ</button>
<button type="reset" class="btn btn-inverse waves-effect waves-light">إعادة</button>
</div>