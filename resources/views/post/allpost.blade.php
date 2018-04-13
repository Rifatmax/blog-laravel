@extends('Admin.admin_layout')
@section('content')
</br>
</br></br>
</br>
<div class=  "table" style="padding-left:200px;">
<table>
 @foreach($post as $data)
 <tr>
  <td><h3>Post Id:<h3></td>
 <td></h3>{{ $data->id }}</h3></td>

</tr>


  <tr>
 <td><b>Description:<b></td>
 <td>{{ $data->content }}</td>
 </tr>

 @endforeach
</table>
</div>
 {!! $post ->render() !!}
 @endsection
 