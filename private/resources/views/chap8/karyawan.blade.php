@extends('template')
@section('main')
<div id="main">
  <h2>Data Karyawan</h2>
  <div class="tombol-nav">
    <div>
      <a href="{{ URL::to('karyawan/create') }}" class="btn btn-primary">Tambah Karyawan</a>
      <div class="pull-right">
        <form class="form-signin" action="{{ URL::to('karyawan/cari') }}" method="post">
          {!! csrf_field() !!}
          <input type="text" name="cari" placeholder="Cari....">
          <button type="submit">Cari</button>
        </form>
      </div>
    </div>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Foto</th>
        <th>NIP</th>
        <th>Nama</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Tanggal Input</th>
        <th>Aksi</th>
      </tr>
    </thead>
    @if(!empty($karyawan_list))
    <tbody>
      @foreach($karyawan_list as $karyawan)
        <tr>
          <td>{{ $karyawan->id}}</td>
          <td style="width:100px"><img src="{{ URL::to('fotoupload/'.$karyawan->foto) }}" alt="" style="width:100%"></td>
          <td>{{ $karyawan->nip}}</td>
          <td>{{ $karyawan->nama}}</td>
          <td>{{ $karyawan->tgl_lahir}}</td>
          <td>{{ $karyawan->gender}}</td>
          <td>{{ $karyawan->created_at}}</td>
          <td>
            <div class="box-button">
              {{ link_to('karyawan/'.$karyawan->id,'Detail',['class'=>'btn btn-success btn-sm']) }}
            </div>
            <div class="box-button">
              {{ link_to('karyawan/'.$karyawan->id.'/edit','Edit',['class'=>'btn btn-warning btn-sm']) }}
            </div>
            <div class="box-button">
              {!! Form::open(['method'=>'DELETE','action'=>['KaryawanController@destroy',$karyawan->id]]) !!}
              {!! Form::submit('Hapus',['class'=>'btn btn-danger btn-sm']) !!}
              {!! Form::close() !!}
            </div>
          </td>
        </tr>
      @endforeach
    </tbody>
    @else
      <tr>
        <td>Data Tidak Ada</td>
      </tr>
    @endif
  </table>
  <div class="table-nav">
    <div class="jumlah-data">
      <strong>Jumlah Karyawan : {{ $jumlah_karyawan }}</strong>
    </div>
    <div class="paging">
      {{ $karyawan_list->links() }}
    </div>
  </div>
</div>
@stop
@section('footer')
  @include('footer')
@stop