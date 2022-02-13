@extends('main')
@section('content')



@if(session()->has('success'))
<p class="alert alert-success">
    {{session()->get('success')}}
</p>
@endif

<h1>Student List</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Date Of Birth</th>
        <th scope="col">Father Name</th>
        <th scope="col">Mother Name</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
        {{-- <th scope="col">Password</th> --}}
      </tr>
    </thead>
    <tbody>

        @foreach($students as $key=>$student)
      <tr>
        <th scope ="row">{{$key+1}}</th>
        <td>{{$student->name}}</td>
        <td>{{$student->email}}</td>
        <td>{{ date('d-m-Y', strtotime($student->date_of_birth)) }}</td>


        <td>{{$student->father_name}}</td>
        <td>{{$student->mother_name}}</td>
        <td>
            <img style="border-radius: 4px;" width="50px;" height="50px;" src="{{url('/students/'.$student->image)}}" alt="no image">

           </td>
           <td>

           <a class="btn btn-danger" href="{{route('student.delete',$student->id)}}">Delete</a>
           <a class="btn btn-warning" href="{{route('student.edit',$student->id)}}">Edit</a>


        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <a href="{{route('movement_add')}}" class="btn btn-secondary" type="button">Add New Student</a>
@endsection
