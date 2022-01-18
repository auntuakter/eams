@extends('main')
@section('content')

    
<style>
    .box {
  width: 600px;
  height: 250px;  
  padding: 100px;
  border: 5px solid black;
  background-color:#c6c4cd;
}

</style>


<label for="employees">Employee:</label>
  <select name="employees" id="employees">
    <option value="volvo">admin</option>
    <option value="volvo">Auntu</option>
    <option value="saab">Sadia</option>
    
  </select>

  <label for="months">Month:</label>
  <select name="months" id="months">
    <option value="january">January</option>
    <option value="february">February</option>
    <option value="march">March</option>
    <option value="april">April</option>
    <option value="may">May</option>
    <option value="june">June</option>
    <option value="july">July</option>
    <option value="august">August</option>
    <option value="september">September</option>
    <option value="october">October</option>
    <option value="november">November</option>
    <option value="december">December/option>

    
  </select>


  
<label for="years">Year:</label>
  <select name="years" id="years">
    <option value="2010">2010</option>
    <option value="2011">2011</option>
    <option value="2010">2012</option>
    <option value="2010">2013</option>
    <option value="2010">2014</option>
    <option value="2010">2015</option>
    <option value="2010">2016</option>
    <option value="2010">2017</option>
    <option value="2010">2018</option>
    <option value="2010">2019</option>
    <option value="2010">2020</option>
    <option value="2010">2021</option>
    <option value="2010">2022</option>
    

   
    
  </select>

 

  







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
       @php 
       $total_present=0;
       @endphp
    @for($i=1; $i<=$last_day_this_month; $i++)

    @php 
   
    $date=$i.'-'.date('m-Y');
   $is_matched=false;
   
    @endphp
        <tr>

        <th scope ="row">{{$i}}</th>
        <th scope ="row">{{$date}}</th>
        @foreach($attendances as $data)
       
                @if($i==date('d',strtotime($data->check_in)))

                @php
                $is_matched=true;
                $total_present++;
                
                @endphp

                <td>{{$data->check_in}}</td> 
                <!-- <td>{{date('h:i:s A',strtotime($data->check_in))}}</td> -->
               
                 <td>{{$data->check_out}}</td> 
                <td>Present</td>
                @endif
        @endforeach

        @if(!$is_matched)
        <td>-</td>
                <td>-</td>
                <td>Absent</td>

        @endif

        </tr>
    
    @endfor

    </tbody>
</table>

<h1>Total Present :{{$total_present}}</h1>



@endsection