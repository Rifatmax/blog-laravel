@extends('layout2')
@section('content')

@if(Session::has('success'))
	
<div class="row">
<div class="col-md-12">
<div class="alert alert-success">
{{ Session::get('success')}}
</div>
</div>
</div>
@endif

<div class="main">

<div class="con">

 <form action="register_action" method="post">
 
 <input type="hidden" name="_token" value="{{csrf_token()}}">
 <b>User Name:</b></br>
<input type="text" name="uname" placeholder="User Name"  /></br>
@if($errors->has('uname')) <p>{{$errors->first('uname')}}</p>@endif
<b>Email:</b></br>
<Input type="Email" name="email" placeholder="Email Address"  /></br>
@if($errors->has('email')) <p>{{$errors->first('email')}}</p>@endif
<b>Password:</b></br>
<input type="password" name="password" placeholder="Password"  /></br>
@if($errors->has('password')) <p>{{$errors->first('password')}}</p>@endif
<b>Mobile Number:</b></br>
<Input type="tel" name="mobile_no" placeholder="019******"   /></br>
@if($errors->has('mobile_no')) <p>{{$errors->first('mobile_no')}}</p>@endif

<b>Date of Birth:</b></br>
<input type="Date" name="Date" /></br>
@if($errors->has('Date')) <p>{{$errors->first('Date')}}</p>@endif
<b>Gender:</b></br>
<input type="radio" name="gender" style="width:20px;" value="male" > <b>Male</b>
<input type="radio" name="gender" style="width:20px;"value="Female"><b> Female</b></br>



<b>Select Category:</b></br>
<select name="category">
<option value="Bangla medium" selected>Bangla </option>
<option value="English medium">English </option>
<option value="Arts">Arts</option>
<option value="language learning" > learning</option>
</select></br>

<p style="padding-left:180px;"><input type="submit" name="submit"  style="height:30px;width:100px; color:green;" />
 <input type="reset" style="height:30px; width:100px; color:red;"/></p>
<center>
 <p><b> Already a member??<a href="{{URL::to('/login')}}" style="text-decoration:none;"> Login Here</b></a></p> 
  </center>
  </div>
   </form>
  </div>
 

  
@endsection