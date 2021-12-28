@extends('main')
@section('content')
<form action="{{route('designation.store')}}" method='POST'>
@csrf
<h1>Add New Designation</h1>
  <div class="form-group row">
    <label for="inputDesignation3" class="col-sm-2 col-form-label">Designation</label>
    <div class="col-sm-10">
      <input name="designation" type="designation" class="form-control" id="inputDesignation3" placeholder="Designation">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form> 
@endsection 



