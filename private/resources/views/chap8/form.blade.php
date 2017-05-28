@if(isset($karyawan))
{!! Form::hidden('id',$karyawan->id) !!}
@endif
@if($errors->any())
  <div class="form-group {{ $errors->has('foto') ? 'has-error' : 'has-success'}}">
@else
  <div class="form-group">
@endif
{!! Form::label('foto','Foto',['class'=>'control-label'])!!}
{!! Form::file('foto') !!}
@if($errors->has('foto',['class'=>'form-control']))
  <span class="help-block">{{ $errors->first('foto')}}</span>
@endif
</div>
@if($errors->any())
  <div class="form-group {{ $errors->has('nip') ? 'has-error' : 'has-success'}}">
@else
  <div class="form-group">
@endif
{!! Form::label('nip','NIP', ['class'=>'control-label'])!!}
{!! Form::text('nip',null, ['class'=>'form-control'])!!}
@if ($errors->has('nip'))
  <p class="alert alert-danger">{!!$errors->first('nip')!!}</p>
@endif
</div>
@if($errors->any())
  <div class="form-group {{ $errors->has('nama') ? 'has-error' : 'has-success'}}">
@else
  <div class="form-group">
@endif
{!! Form::label('nama', 'Nama', ['class'=>'control-label'])!!}
{!! Form::text('nama',null, ['class'=>'form-control'])!!}
@if ($errors->has('nama'))
  <p class="alert alert-danger">{!!$errors->first('nama')!!}</p>
@endif
</div>
@if($errors->any())
  <div class="form-group {{ $errors->has('tgl_lahir') ? 'has-error' : 'has-success'}}">
@else
  <div class="form-group">
@endif
{!! Form::label('tgl_lahir', 'Tanggal Lahir', ['class'=>'control-label'])!!}
{!! Form::date('tgl_lahir',null, ['class'=>'form-control'])!!}
</div>
@if($errors->any())
  <div class="form-group {{ $errors->has('gender') ? 'has-error' : 'has-success'}}">
@else
  <div class="form-group">
@endif
{!! Form::label('gender', 'Jenis Kelamin', ['class'=>'control-label'])!!}
<div class="radio">
  <label>{!! Form::radio('gender','L')!!}Laki - Laki</label>
  <label>{!! Form::radio('gender','P')!!}Perempuan</label>
</div>
@if ($errors->has('gender'))
  <p class="help-block">{{ $errors->first('gender') }}</p>
@endif
</div>
<div class="form-group @if ($errors->has('nip')) has-error @endif">
{!! Form::submit($submitButton, ['class'=>'btn btn-primary form-control'])!!}
</div>