@extends('main')
@section('content')



<form action="{{route('leave.store')}}" method='POST'>
 @csrf
 <h1>Leave Request Form</h1>
 <div class="row ">
        <div class="col-lg-10 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
           
                  


  <div class="form-group row">
    <label for="inputLeave_type3" class="col-sm-2 col-form-label">Leave Type</label>
    <div class="col-sm-10">

<select name="leave_type" type="leave_type" class="form-control" id="inputLeave_type3" placeholder="Leave_type">
  <option value="sick">Sick</option>
  <option value="casual">Casual</option>
  <option value="annaul">Annaul</option>
  <option value="emergency">Emergency</option>
</select>
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
  <input required type="date" value="{{ date('Y-m-d') }}"
                                        min="{{ date('Y-m-d') }}" class="form-control"
                                        id="purchase_date" name="from">
</div>
</div>


<div class="form-group row">
  <label for="inputfrom3" class="col-sm-2 col-form-label">To:</label>
  <div class="col-sm-10">
  <input type="date" class="form-control" id="purchase_date" name="to">
</div>
</div>




<!-- <div class="form-group row">
  <label for="inputto3" class="col-sm-2 col-form-label">To:</label>
  <div class="col-sm-10">
  <input name="to" type="date" class="form_control" id="to3" placeholder="To">
</div>
</div> -->



  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>


</div>
</div>
</div>
</form>  



@endsection

