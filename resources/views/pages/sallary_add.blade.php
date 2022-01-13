@extends('main')
@section('content')

<form action="{{route('sallary.store')}}" method='POST'>
  @csrf

  <h1>Add Sallary</h1>
  

  <div class="form-group row">
    <label for="inputGrade3" class="col-sm-2 col-form-label">Grade</label>
    <div class="col-sm-10">
      <input name="grade" type="grade" class="form-control" id="inputGrade3" placeholder="Grade">
    </div>
  </div>
  

  <div class="form-group row">
    <label for="inputBasic3" class="col-sm-2 col-form-label">Basic</label>
    <div class="col-sm-10">
      <input name="basic" type="basic" class="form-control" id="inputBasic3" placeholder="Basic">
    </div>
  </div>

  
  <div class="form-group row">
    <label for="inputAllowance3" class="col-sm-2 col-form-label">Allowance</label>
    <div class="col-sm-10">
      <input name="allowance" type="allowance" class="form-control" id="inputAllowance3" placeholder="Allowance">
    </div>
  </div>

  


  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form> 

@endsection

