@extends('template')
@section('main')
<div id="karyawan">
  <h2>Tambah Karyawan</h2>
  <!--@include('errors.form_error_list')-->
  {!! Form::open(['url'=>'karyawan','files'=>true]) !!}
  @include('chap8.form',['submitButton'=>'Tambah Karyawan'])
  {!! Form::close() !!}
</div>
@stop
@section('footer')
  @include('footer')
@stop