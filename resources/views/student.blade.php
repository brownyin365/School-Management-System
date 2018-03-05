@extends('layouts.app')
@section('content')
<div>
	<a href="{{(url('/student'))}}"></a>
</div>
<h1>Students Information</h1>
<div class="table-responsive">
  <table class="table table-striped">
    		<thead>
    			<th>Name</th>
                <th>Class</th>
                <th>School ID</th>
                <th>Country</th>
            </thead>
    <tbody>
    	     @foreach($students as $student)
        <tr>
	        <td>{{$student ->name}}</td>
            <td>{{$student ->class}}</td>
            <td>{{$student ->school_id}}</td>
            <td>{{$student ->country}}</td>
	    </tr>
           @endforeach
    </tbody>
  </table>
</div>
@endsection