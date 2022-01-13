@extends('main')
@section('content')
<h1>Hello</h1>
    
<style>
    .box {
  width: 600px;
  height: 250px;  
  padding: 100px;
  border: 5px solid black;
  background-color:#c6c4cd;
}

</style>


@php 

$last_day_this_month  = date('t');
@endphp



<h1>Attendance List</h1>

<table class="table table-dark" action="{{route('attendance.store')}}" method='POST'>
@csrf
    <thead>
        <tr>
            <th scope="col">#</th>
        
            <th scope="col">Date</th>
            <th scope="col">Check In </th>
            <th scope="col">Check Out</th>
            <th scope="col">Status</th>
        </tr>
    </thead>

    <tbody>
    @for($i=1; $i<=$last_day_this_month; $i++)

    @php 
$date=$i.'-'.date('m-Y');
    @endphp
        <tr>

        <th scope ="row">{{$i}}</th>
        <th scope ="row">{{$date}}</th>
        <td></td>
        <td></td>
     
      <td></td>


            <td>
         


            </td>


        </tr>
        @endfor

    </tbody>
</table>





@endsection