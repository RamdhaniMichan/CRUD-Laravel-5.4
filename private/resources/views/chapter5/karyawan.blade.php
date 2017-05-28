@extends('template')
@section('main')
<div id="karyawan">
	<h2>Data Karyawan</h2>
	@if(!empty($karyawan))
	<ul>
		@foreach($karyawan as $data)<li>{{ $data }}</li>@endforeach
	</ul>
	@else
		<p>Data tidak ada.</p>
	@endif
</div>
@stop
@section('footer')
	@include('footer')
@stop