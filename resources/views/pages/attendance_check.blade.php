@extends('main')
@section('content')





<h1>Attendance List</h1>

<table class="table table-dark" action="{{route('attendance.store')}}" method='POST'>
@csrf
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Employee_id</th>
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
      <td>{{$attendance->employee_id}}</td>
      <td>{{date('Y-m-d',strtotime($attendance->check_in))}}</td>
      <td>{{date('h:i:m A',strtotime($attendance->check_in))}}</td>
      <!-- <td>{{date('Y-m-d',strtotime($attendance->check_out))}}</td> -->
      <td>{{$attendance->check_out?date('h:i:m A',strtotime($attendance->check_out)):''}}</td>


            <td>
                
            @if($attendance->check_in)

            <span class="badge badge-primary">Present</span>

            @else
            <span class="badge badge-danger">Absent</span>

            @endif


            </td>



            <!-- <td>
                
                @if($attendance->check_out)
    
                <span class="badge badge-primary">Present</span>
    
                @else
                <span class="badge badge-danger">Absent</span>
    
                @endif
    
    
                </td> -->


        </tr>
        @endforeach

    </tbody>
</table>






@endsection
