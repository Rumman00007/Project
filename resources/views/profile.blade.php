@extends('layout2')
@section('content')
@if(Auth::user())
<div class="container">


	    <ul class="nav navbar-nav">
		    <li class="active"><a href="edit_profile&{{ ucwords(Auth::user()->id) }}">Edit Profile</a></li>  
    </ul>
	
</br></br>

	<div style="clear:right; float:left;padding-left:30px; padding-right:100px;">
	<table>
	<tr>
	<p><b>Your Personal Details</b></p>
	</br>
	<td><b>Name</b></td>
	<td style="padding-right:50px;padding-left:100px; "><b>:</b></td>
	<td>{{ ucwords(Auth::user()->name) }}</td>
	</tr>		
	</table>
	</br>
	<table>
	<tr>
	<td><b>Email</b></td>
	<td style="padding-right:50px;padding-left:100px; "><b>:</b></td>
	<td>{{ ucwords(Auth::user()->email) }}</td>

	</tr>		
	</table>
	</br>
	<table>
	<tr>
	<td ><b>Mobile Number</b></td>
	<td style="padding-right:50px;padding-left:36px; "><b>:</b></td>
	<td>{{ ucwords(Auth::user()->mobile) }}</td>

	</tr>		
	</table>
	</br>
	<table>
	<tr>
	<td><b>Date of Birth</b></td>
	<td style="padding-right:50px;padding-left:53px; "><b>:</b></td>
	<td>{{ ucwords(Auth::user()->birth) }}</td>

	</tr>		
	</table>
			
	</br>
	<table>
	<tr>
	<td ><b>Gender</b></td>
	<td style="padding-right:50px;padding-left:87px; "><b>:</b></td>
	<td>{{ ucwords(Auth::user()->gender) }}</td>

	</tr>		
	</table>
	</br>
	<table>
	<tr>
	<td ><b>Category</b></td>
	<td style="padding-right:50px;padding-left:85px; "><b>:</b></td>
	<td>{{ ucwords(Auth::user()->category) }}</td>

	</tr>		
	</table>
	
	</br>
	
	</br></br></br></br>
					
			
	</div>
	
	<div>
	
	
	</br>
	
	</div>
  </div>
  @else
  <center><h2> Please logged to get access of this page</h2></center>
@endif
@endsection