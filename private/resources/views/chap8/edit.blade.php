@extends('template')
@section('main')
<div id="karyawan">
  <h2>Edit Karyawan</h2>
  <img src="{{ URL::to('fotoupload/'.$karyawan->foto) }}" alt="" style="width:300px">
  {!! Form::model($karyawan,['method'=>'PATCH','action'=>['KaryawanController@update',$karyawan->id],'files'=>true]) !!}
  @include('chap8.form',['submitButton'=>'Edit Karyawan'])
  {!! Form::close() !!}
</div>
@stop
@section('footer')
  @include('footer')
@stop