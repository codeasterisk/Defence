
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
    <label for="exampleInputEmail1">Career Title</label>
    {!! Form::text("title",null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
    <label for="exampleInputEmail1">Job Type</label>
    <select name="job_type" class="form-control select2">
        <option value="freelancer">FreeLancer</option>
        <option value="remotely">Remotely</option>
        <option value="full-time">Full-time</option>
    </select>
</div>

<div class="form-group">
    <label for="exampleInputEmail1">Career Category</label>
    {!! Form::text("job_cat",null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
    <label for="exampleInputEmail1">City</label>
    {!! Form::text("city",null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
    <label for="exampleInputEmail1">Career Small Description</label>
    {!! Form::text("small_desc",null,['class'=>'form-control'])!!}
    <br>
    <div class="alert alert-info">
        <strong>Attention:</strong> small Desciprtion shouldn't be more than 170 words due to Google meta tags.
    </div>
</div>

<div class="form-group">
    <label class="col-sm-12">Career Description</label>
    <div class="col-sm-12">
    {!! Form::textarea("long_desc",null,['class'=>'textarea_editor form-control'])!!}
    </div>
</div>


<button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
<button type="reset" class="btn btn-inverse waves-effect waves-light">Reset</button>
