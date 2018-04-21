
<style>
input{width:700px; height:35px;border:1px solid black; border-radius: 10px;padding:2px; }

select{width:700px; height:35px; border:1px solid black; border-radius:5px;}
</style>

<div class="main">

<div class="con">

 <form action="update&<?php echo $Data->id?>" method="post">
 
 <input type="hidden" name="_token" value="{{csrf_token()}}">
 <b>User Name:</b></br>
<input type="text" name="uname" placeholder="User Name" value="{{$Data->name}}" required /></br>

<b>Email:</b></br>
<Input type="Email" name="email" placeholder="Email Address" value="{{$Data->email}}" required /></br>

<b>Password:</b></br>
<input type="password" name="password" placeholder="Password" value="{{$Data->password}}"required /></br>

<b>Mobile Number:</b></br>
<Input type="tel" name="mobile_no" placeholder="017******" value="{{$Data->mobile}}" required /></br>



<b>Select Category:</b></br>
<select name="category">
<option value="Newes" selected>vegetable</option>
<option value="sports">fruit</option>
<option value="Philosophy">milk</option>
<option value="language learning" >fish</option>
</select></br>

<p style="padding-left:270px;"><input type="submit" name="Update" value="Update" style="height:30px;width:100px; color:green;" />
 </p>

  </div>
   </form>
  </div>
 

  
