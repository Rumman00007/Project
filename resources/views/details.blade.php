@extends('view_layout')
@section('content')
</br>
	<div style="clear:right; float:left;padding-left:30px; padding-right:100px;">
	<table>
	<tr>
	<p><b>User Personal Details</b></p>
	</br>
	<td><b>Name</b></td>
	<td style="padding-right:50px;padding-left:100px; "><b>:</b></td>
	<td>{{$Data->name}}</td>
	</tr>		
	</table>
	</br>
	<table>
	<tr>
	<td><b>Email</b></td>
	<td style="padding-right:48px;padding-left:101px; "><b>:</b></td>
	<td>{{$Data->email}}</td>

	</tr>		
	</table>
	</br>
	<table>
	<tr>
	<td ><b>Mobile Number</b></td>
	<td style="padding-right:50px;padding-left:37px; "><b>:</b></td>
	<td>{{$Data->mobile}}</td>

	</tr>		
	</table>
	</br>
	<table>
	<tr>
	<td><b>Date of Birth</b></td>
	<td style="padding-right:50px;padding-left:53px; "><b>:</b></td>
	<td>{{$Data->birth}}</td>

	</tr>		
	</table>
			
	</br>
	<table>
	<tr>
	<td ><b>Gender</b></td>
	<td style="padding-right:50px;padding-left:88px; "><b>:</b></td>
	<td>{{$Data->gender}}</td>

	</tr>		
	</table>
	</br>
	
			
	</br>
	<table>
	<tr>
	<td ><b>Category</b></td>
	<td style="padding-right:50px;padding-left:85px; "><b>:</b></td>
	<td>{{$Data->category}}</td>

	</tr>		
	</table>
	
	</br>
	
	</br></br></br></br>
					
			
	</div>
	
	
	@endsection