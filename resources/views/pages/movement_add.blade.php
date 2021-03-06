@extends('main')
@section('content')
<form action="{{route('movement.store')}}" method='POST' enctype="multipart/form-data" >
    @csrf

    @if(session()->has('success'))
    <p class="alert alert-success">
        {{session()->get('success')}}
    </p>
    @endif

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

    <h1>Student List</h1>

    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
    <label for="fname">First name:</label>
    <input type="text" id="fname" name="fname">
    <label for="lname">Last name:</label>
    <input type="text" id="lname" name="lname"><br><br>
        </div>
   </div>

    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input name="email" type="email" class="form-control" id="inputEmail3" placeholder="Email" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputDate_of_birth3" class="col-sm-2 col-form-label">Date Of Birth</label>
        <div class="col-sm-10">

            <label for="year">Year:</label>
            <select name="year">
                <option value="1990">1990</option>
                <option value="1991">1991</option>
                <option value="1992">1992</option>
                <option value="1993">1993</option>
                <option value="1994">1994</option>
                <option value="1995">1995</option>
                <option value="1996">1996</option>
                <option value="1997">1997</option>
                <option value="1998">1998</option>
                <option value="1999">1999</option>
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
                <option value="2004">2004</option>
                <option value="2005">2005</option>
                <option value="2006">2006</option>
                <option value="2007">2007</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
         </select>


         <label for="month">Month:</label>
        <select name="month">
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
         </select>

            <label for="date">Date:</label>
            <select name="date">
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>

         </select>
            <br><br>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputFathe_name3" class="col-sm-2 col-form-label">Father Name</label>
        <div class="col-sm-10">

          <input  pattern="[a-z A-Z]+" name="father_name" type="text" class="form-control" id="inputFather_name3" >
        </div>
      </div>


      <div class="form-group row">
        <label for="inputMother_name3" class="col-sm-2 col-form-label">Mother Name</label>
        <div class="col-sm-10">
          <input pattern="[a-z A-Z]+" name="mother_name" type="text" class="form-control" id="inputMother_name3" >
        </div>
      </div>


 <div class="form-group row">
    <label for="inputImage3" class="col-sm-2 col-form-label">Image</label>
    <div class="col-sm-10">
    <input name="image" type="file" class="form-control" id="inputImage" aria-describedby="emailHelp">
</div>
</div>

<div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input pattern="[A-Za-z0-9]}.{6,}" name="password" type="password" class="form-control" id="inputPassword3" placeholder="Password" >
    </div>
  </div>
      <input type="submit" value="Submit">
  </form>
@endsection
