@extends('template')
@section('main')
<div id="karyawan">
  <h2>Detail Karyawan</h2>
  <table class="table table-striped">
    <tr>
      <th>Foto</th>
      <td><img src="{{ URL::to('fotoupload/'.$karyawan->foto) }}" alt="" style="width:100px"></td>
    </tr>
    <tr>
      <th>NIP</th>
      <td>{{ $karyawan->nip }}</td>
    </tr>
    <tr>
      <th>Nama</th>
      <td>{{ $karyawan->nama }}</td>
    </tr>
    <tr>
      <th>Tanggal Lahir</th>
      <td>{{ $karyawan->tgl_lahir }}</td>
    </tr>
    <tr>
      <th>Jenis Kelamin</th>
      <td>{{ $karyawan->gender }}</td>
    </tr>
    <tr>
      <th colspan="2">{{ link_to('karyawan','kembali') }}</th>
    </tr>
  </table>
</div>
@stop
@section('footer')
  @include('footer')
@stop