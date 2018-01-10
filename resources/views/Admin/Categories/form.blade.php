
@if (count($errors) > 0)
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<div class="form-group">
    <label for="exampleInputEmail1">Category Title</label>
    {!! Form::text("name",null,['class'=>'form-control'])!!}
</div>

<button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
<button type="reset" class="btn btn-inverse waves-effect waves-light">Reset</button>
</div>