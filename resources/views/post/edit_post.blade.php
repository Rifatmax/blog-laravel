@extends('Admin.admin_layout')
@section('content')
</br>



<style>
select {width:400px;}
</style>

<div class="container" style="padding-left:200px;">
  <form action="\update_post&<?php echo $Data->id?>" method="post">
   <input type="hidden" name="_token" value="{{csrf_token()}}">
	<div>
   <p><b>Describes Address in Details</b></p>
   <input type="text" name="content" value="{{$Data->content}}" class="form-control"style="height:100px; width:500px;"  placeholder="comment" required />
  </div>
   </br>
   <center> <button type="submit" style=" width:100px; Color:green;"  class="btn btn-default">Post</button></center>
  </form>
</div>

</body>

@endsection