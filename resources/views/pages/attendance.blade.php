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
    <!-- @if(auth()->user()->role=='user')
<a href="{{route('attendance_check')}}" class="btn btn-primary" type="button">Check In</a>
@endif -->
<a href="{{route('attendance_check')}}" class="btn btn-primary" type="button">Check In</a>
<!-- <a href="{{route('attendance_view')}}" class="btn btn-primary" type="button">Attendance View</a>  -->



</div>


@endsection