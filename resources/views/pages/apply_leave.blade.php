@extends('main')
@section('content')

<form action="{{route('leave.store')}}" method='POST'>
  @csrf

  <h1>Apply for leave</h1>
  <div class="form-group row">
    <label for="inputEmployee_name3" class="col-sm-2 col-form-label">Employee_name</label>
    <div class="col-sm-10">
      <input name="employee_name" type="employee_name" class="form-control" id="inputEmployee_name3" placeholder="Employee_name">
    </div>
  </div>
  

  <div class="form-group row">
    <label for="inputDepartment_name3" class="col-sm-2 col-form-label">Department_name</label>
    <div class="col-sm-10">
      <input name="department_name" type="department_name" class="form-control" id="inputDepartment_name3" placeholder="Department_name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputLeave_type3" class="col-sm-2 col-form-label">Leave_Type</label>
    <div class="col-sm-10">
      <input name="leave_type" type="leave_type" class="form-control" id="inputLeave_type3" placeholder="Leave_type">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputDescription3" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      <input name="description" type="description" class="form-control" id="inputDescription3" placeholder="Description">
    </div>
  </div>

  
  <div class="form-group row">
  <label for="inputfrom3" class="col-sm-2 col-form-label">From:</label>
  <div class="col-sm-10">
  <input name="from" type="date" class="form_control" id="from3" placeholder="From">
</div>
</div>

<div class="form-group row">
  <label for="inputto3" class="col-sm-2 col-form-label">To:</label>
  <div class="col-sm-10">
  <input name="to" type="date" class="form_control" id="to3" placeholder="To">
</div>
</div>





  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form> 
@endsection

