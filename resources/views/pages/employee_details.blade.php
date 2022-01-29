@extends('main')
@section('content')
<h1>Employee Details</h1>
<br>


<p>
    <img style=" display: block; margin-left: auto;margin-right: auto;width:; border-radius:15%" src="{{url('/employees/'.$employee->image)}}" style="border-radius:4px" width="200px" alt="employee image">
</p>
<hr>

<p style="margin-left:200px;">Employee Name: {{$employee->name}}</p>
<p style="margin-left:200px;">Email: {{$employee->email}}</p>
<!-- <p style="margin-left:200px;">Password: {{$employee->password}}</p> -->
<p style="margin-left:200px;">Address: {{$employee->address}}</p>
<p style="margin-left:200px;">Department: {{$employee->department->department_name}}</p>
<p style="margin-left:200px;">Designation: {{$employee->designation->designation}}</p>
<p style="margin-left:200px;">Gender: {{$employee->gender}}</p>
<p style="margin-left:200px;">Joinded on: {{$employee->joined_on}}</p>
<p style="margin-left:200px;">Contact no: {{$employee->contact_no}}</p>


@endsection