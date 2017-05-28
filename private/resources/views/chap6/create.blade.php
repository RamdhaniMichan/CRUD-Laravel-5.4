@extends('template')
@section('main')
<div id="karyawan">
	<h2>Tambah Karyawan</h2>
	<form action="{{url('karyawan') }}" method="POST">
	
		<div class="form-group">
			<label for="nip" class="control-label">NIP</label>
			<input name="nip" id="nip" type="text" class="form-control"/>
		</div>
		<div class="form-group">
			<label for="nama" class="control-label">Nama</label>
			<input type="text" name="nama" id="nama" class="form-control"/>
		</div>
		<div class="form-group">
			<label for="tgl_lahir" class="control-label">Tanggal Lahir</label>
			<input type="text" name="tgl_lahir" id="tgl_lahir" class="form-control"/>
		</div>
		<div class="form-group">
			<label for="gender" class="control-label">Jenis Kelamin</label>
			<div class="radio">
				<label><input type="radio" name="gender" id="gender" value="L">Laki-Laki</label>
			</div>
			<div class="radio">
				<label><input type="radio" name="gender" id="gender" value="P">Perempuan</label>
			</div>
		</div>
		<div class="form-group">
			<input type="submit" class="btn-primary form-control" value="Tambah Karyawan"/>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		</div>
	</form>
</div>
@stop
@section('footer')
	<div id="footer">
	<p>&copy; 2017 Framework Programming DIV TI</p>
	</div>
@stop