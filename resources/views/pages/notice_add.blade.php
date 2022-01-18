@extends('main')
@section('content')
<h1>Add New Notice</h1>

<form action="{{route('notice.store')}}" method='POST'>
    @csrf
  

  <div class="form-group row">
    <label for="inputDate3" class="col-sm-2 col-form-label">Date</label>
    <div class="col-sm-10">
      <input name="date" type="date" class="form-control" id="inputDate3" placeholder="Date">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputHoliday3" class="col-sm-2 col-form-label">Holiday</label>
    <div class="col-sm-10">
      <input name="holiday" type="holiday" class="form-control" id="inputHoliday3" placeholder="Holiday">
    </div>
  </div>
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>

</form>



@endsection