@extends('master')

@section('konten')

	<form method="post" action="">

	{!! csrf_field() !!}

	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"/></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td><input type="text" name="nim"/></td>
		</tr>
		<tr>
			<td>IPK</td>
			<td><input type="text" name="ipk"/></td>
		</tr>
		<tr>
			<td><input type="submit" style="btn" value="submit"></td>
			<td></td>
		</tr>
	</table>
		


	</form>
	
@stop