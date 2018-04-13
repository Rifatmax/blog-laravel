@extends('view_layout')
@section('content')

<Center><h1> Create a post here<h1></Center>

<style>
select {width:400px;}
</style>

<div class="container">
  <form action="\admin_post_insert" method="post">

   <p><b>new post</b></p>
   <input type="text" name="content"  class="form-control"style="height:100px; width:500px;"  placeholder="comment" required />
  </div>
   </br>
   <center> <button type="submit" style=" width:100px; Color:green;"  class="btn btn-default">Post</button></center>
  </form>
</div>

</body>

@endsection