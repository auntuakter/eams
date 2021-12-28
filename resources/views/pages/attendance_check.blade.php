@extends('main')
@section('content')





<h1>Attendace List</h1>

<table class="table table-dark" action="{{route('attendance.store')}}" method='POST'>
@csrf
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Employee_name</th>
            <th scope="col">Department_name</th>
            <th scope="col">Date</th>
            <th scope="col">Check In </th>
            <th scope="col">Check Out</th>
            <th scope="col">Status</th>
        </tr>
    </thead>

    <tbody>
    @foreach($attendances as $key=>$attendance)
        <tr>

        <th scope ="row">{{$key+1}}</th>
      <td>{{$attendance->name}}</td>
      <td>{{$attendance->department}}</td>
      <td>{{$attendance->date}}</td>
      <td>{{$attendance->check_in}}</td>
      <td>{{$attendance->check_out}}</td>



           
            <td>
                
               <a href="" class="btm btn-danger">checkout</a>
               <a href="" class="btm btn-info">checkin</a>




            </td>


        </tr>
        @endforeach

    </tbody>
</table>






@endsection
