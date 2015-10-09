@extends('master')

@section('konten')

	<form method="post" action="">

	{!! csrf_field() !!}
	<input type="hidden" name="id" value="{{$data['id']}}">
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" value="{{$data['nama']}}"/></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td><input type="text" name="nim" value="{{$data['nim']}}"/></td>
		</tr>
		<tr>
			<td>IPK</td>
			<td><input type="text" name="ipk" value="{{$data['ipk']}}"/></td>
		</tr>
		<tr>
			<td><input type="submit" style="btn" value="submit"></td>
			<td></td>
		</tr>
	</table>
		


	</form>
	
@stop