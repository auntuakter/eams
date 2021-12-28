@extends('main')
@section('content')
<form action="{{route('department.store')}}" method='POST'>
  @csrf

  <h1>Add New Department</h1>
  <div class="form-group row">
    <label for="inputDepartment_code3" class="col-sm-2 col-form-label">Department_code</label>
    <div class="col-sm-10">
      <input name="department_code" type="department_code" class="form-control" id="inputDepartment_code3" placeholder="Department_code">
    </div>
  </div>
  

  <div class="form-group row">
    <label for="inputDepartment_name3" class="col-sm-2 col-form-label">Department_name</label>
    <div class="col-sm-10">
      <input name="department_name" type="department_name" class="form-control" id="inputDepartment_name3" placeholder="Department_name">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form> 
@endsection