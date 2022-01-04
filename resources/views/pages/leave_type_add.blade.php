@extends('main')
@section('content')

<form>
    @csrf
    <h1>Leave Type</h1>
    
    <div class="form-group row">
    <label for="inputLeave_type3" class="col-sm-2 col-form-label">Leave_type</label>
    <div class="col-sm-10">

<select name="leave_type" type="leave_type" class="form-control" id="inputLeave_type3" placeholder="Leave_type">
  <option value="sick">Sick</option>
  <option value="annaul">Annaul</option>
  <option value="casual">Casual</option>
  <option value="emergency">Emergency</option>
</select>
     
    </div>
  </div>
  

  <div class="form-group row">
    <label for="inputDay_of_amount3" class="col-sm-2 col-form-label">Day_of_amount</label>
    <div class="col-sm-10">
      <input name="day_of_amount" type="day_of-amount" class="form-control" id="inputDay_of_amount3" placeholder="Day_of_amount">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputStatus3" class="col-sm-2 col-form-label">Status</label>
    <div class="col-sm-10">
      <input name="status" type="status" class="form-control" id="inputStatus3" placeholder="Status">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputDescription3" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      <input name="description" type="description" class="form-control" id="inputDescription3" placeholder="Status">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>

</form>
@endsection
