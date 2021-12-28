@extends('main')
@section('content')
<h1>Employee Details</h1>

<p>Employee_Name: {{$employee->name}}</p>
<p>Email: {{$employee->email}}</p>
<p>Password: {{$employee->password}}</p>
<p>Address: {{$employee->address}}</p>
<p>Department: {{$employee->department}}</p>
<p>Gender: {{$employee->gender}}</p>
<p>Joinded_on: {{$employee->joined_on}}</p>
<p>Contact_no: {{$employee->contact_no}}</p>
<p>Image: {{$employee->image}}</p>



@endsection