@extends('main')
@section('content')


<h1> Attendance</h1>
<hr>
<style>
    .box {
  width: 600px;
  height: 250px;  
  padding: 100px;
  border: 5px solid black;
  background-color:#c6c4cd;
}

</style>
<div class="box">
    <h1> Daily Attendance</h1>
    <br>

<a href="{{route('attendance_check')}}" class="btn btn-primary" type="button">Check In</a>
<a href="{{route('checkout')}}" class="btn btn-secondary" type="button">Check Out</a>


</div>


@endsection