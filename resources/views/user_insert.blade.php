
<style>
input{width:600px; height:30px;border:1px solid black; border-radius: 10px;padding:2px; }
.con{background-color:#ff9999; width:55%;  border-radius:5px;}
select{width:600px; height:30px; border:1px solid black; border-radius:5px;}
</style>
@extends('view_layout')
@section('content')
<div class="container">
  <h2>Fill up the requirements</h2>
  <form action="admin_insert" method="post">
 
 <input type="hidden" name="_token" value="{{csrf_token()}}">
 <b>User Name:</b></br>
<input type="text" name="uname" placeholder="User Name" required /></br>
<b>Email:</b></br>
<Input type="Email" name="email" placeholder="Email Address" required /></br>
<b>Password:</b></br>
<input type="password" name="password" placeholder="Password" required||min ="6" /></br>
<b>Mobile Number:</b></br>
<Input type="tel" name="mobile_no" placeholder="017******" required /></br>
<b>Date of Birth:</b></br>
<input type="Date" name="Date"/></br>
<b>Gender:</b></br>
<input type="radio" name="gender" style="width:20px;" value="male"  > <b>Male</b>
<input type="radio" name="gender" style="width:20px;"value="Female"><b> Female</b></br>
@if($errors->has('gender')) <p>{{$errors->first('gender')}}</p>@endif




<p style="padding-left:230px;"><input type="submit" name="submit" value="Insert" style="height:30px;width:100px; color:green;" />
 

  </div>
   </form>
  </div>
</div>

</body>
@endsection
