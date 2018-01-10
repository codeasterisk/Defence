
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
    <label for="exampleInputEmail1">Product Title</label>
    {!! Form::text("title",null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
    <label for="exampleInputEmail1">Product Category</label>
    <select name="cat_id" class="form-control select2">
        @foreach(\App\Category::all() as $cat)
        <option value="{{$cat->id}}">{{$cat->name}}</option>
            @endforeach
    </select>
</div>

<div class="form-group">
    <label for="exampleInputEmail1">Product Small Description</label>
    {!! Form::text("small_desc",null,['class'=>'form-control'])!!}
    <br>
    <div class="alert alert-info">
        <strong>Attention:</strong> small Desciprtion shouldn't be more than 170 words due to Google meta tags.
    </div>
</div>

<div class="form-group">
    <label class="col-sm-12">Product Image</label>

    <div class="col-sm-12 ol-md-12 col-xs-12">
        <div class="white-box">
            <h3 class="box-title">Product Image</h3>
                <label for="input-file-now-custom-1">You can upload product image</label>
            <input type="file" name="img" id="input-file-now-custom-1" class="dropify"
                   @if(isset($product))
                   @if($product->img!='')
                   data-default-file="{{ Request::root().'/upload/'.$product->img }}"
                   @endif
                   @endif
            /> </div>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-12">Product Description</label>
    <div class="col-sm-12">
    {!! Form::textarea("description",null,['class'=>'textarea_editor form-control'])!!}
    </div>
</div>


<button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
<button type="reset" class="btn btn-inverse waves-effect waves-light">Reset</button>
