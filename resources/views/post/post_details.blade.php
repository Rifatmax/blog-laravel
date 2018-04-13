@extends('Admin.admin_layout')
@section('content')
</br>
</br></br>
</br>
	<div style="clear:right; float:left;padding-left:200px; padding-right:100px;">
	<table>
	<tr>
	<p><b>Post Details</b></p>
	</br>
	
	</br>
	
	<table>
	<tr>
	<td ><b> Detail Informations</b></td>
	<td style="padding-right:50px;padding-left:67px; "><b>:</b></td>
	<td>{{$Data->content}}</td>

	</tr>		
	</table>
	
	
	
	</br></br></br></br>
					
			
	</div>
	
	@endsection