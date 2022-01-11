@extends('main')
@section('content')
<h1>Designation</h1>

@if(session()->has('success'))
        <p class="alert alert-success">
            {{session()->get('success')}}
        </p>
    @endif
<form action=" {{route('designation.update',$designation->id )}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
<div class="form-group row">
    <label for="inputDesignation3" class="col-sm-2 col-form-label">Designation</label>
    <div class="col-sm-10">
      <input name="designation" type="designation" class="form-control" id="inputDesignation3" value="{{$designation->designation}}" >
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
@endsection