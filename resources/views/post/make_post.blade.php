@extends('Admin.admin_layout')
@section('content')
</br>
@if(Auth::user())
<Center><h1> Create a post here<h1></Center>

<style>
select {width:400px;}
</style>

<div class="container" style="padding-left:200px; padding-top:100px;">
  <form action="\post_action" method="post">
   <input type="hidden" name="_token" value="{{csrf_token()}}">
	
  <div class="form-group">
   <p><b>Write something for post:</b></p>
   <input type="text" name="content" class="form-control"style="height:100px; width:500px;"  placeholder="comment" required />
  </div>
   </br>
   <center> <button type="submit" style=" width:100px; Color:green;"  class="btn btn-default">Post</button></center>
  </form>
</div>

</body>
@else
  <center><h2> Please logged to get access of this page</h2></center>
@endif
@endsection