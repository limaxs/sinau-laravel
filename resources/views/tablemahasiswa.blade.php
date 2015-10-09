@extends('master')

		<?php $jum = 0;?>
		@foreach($datas as $data)
			<?php $jum = $jum + $data['ipk']; ?>
		@endforeach
		<?php $avg = $jum / count($datas); ?>


@section('konten')

	<table>
		<tr>
			<td>Nama</td>
			<td>NIM</td>
			<td>ipk</td>
			<td colspan="2">action</td>
		</tr>

		@foreach($datas as $data)
		<tr>
			<td>{{$data['nama']}}</td>			
			<td>{{$data['nim']}}</td>
			<td>{{$data['ipk']}}</td>
			<td><a href="/list/edit/{{$data['id']}}">Edit</a></td>
			<td><a href="/list/delete/{{$data['id']}}">Delete</a></td>
		</tr>
		@endforeach


		<tr>
			<td colspan="4">Ipk rata-rata</td>
			<td>{{$avg}}</td>

		</tr>
	</table>

@stop