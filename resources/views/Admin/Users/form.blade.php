
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

<div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    {!! Form::text("name",null,['class'=>'form-control'])!!}
</div>
    <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    {!! Form::email("email",null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password"> </div>
<div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation" placeholder="Confirm Password"> </div>
<button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
<button type="reset" class="btn btn-inverse waves-effect waves-light">Reset</button>
