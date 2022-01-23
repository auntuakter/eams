@extends('main')
@section('content')
<h1>Employee Details</h1>

<p>Employee Name: {{$employee->name}}</p>
<p>Email: {{$employee->email}}</p>
<p>Password: {{$employee->password}}</p>
<p>Address: {{$employee->address}}</p>
<p>Department: {{$employee->department->department_name}}</p>
<p>Designation: {{$employee->designation->designation}}</p>
<p>Gender: {{$employee->gender}}</p>
<p>Joinded on: {{$employee->joined_on}}</p>
<p>Contact no: {{$employee->contact_no}}</p>
<p>Image: {{$employee->image}}</p>



@endsection