@extends('layouts.app')

@section('title', 'Crear propuesta')

@section('content')
	<h1>Crear propuesta</h1>

	<form action="{{ route('proposals.store') }}" method="POST">
		{{ csrf_field() }}
		{{-- <input type="text" name="situacion" placeholder="Situacion" value="{{ old('situacion', 'situacion')}}"><br> --}}
		<textarea name="situacion" id="" cols="30" rows="3">{{ old('situacion', 'situacion')}}</textarea><br>
		{!! $errors->first('situacion', '<small>:message</small><br>') !!}

		<input type="text" name="descripcion" placeholder="Descripción" value="{{ old('descripcion', 'descripcion')}}"><br>
		{!! $errors->first('descripcion', '<small>:message</small><br>') !!}

		<input type="text" name="propuesta" placeholder="Propuesta" value="{{ old('propuesta', 'propuesta')}}"><br>
		{!! $errors->first('propuesta', '<small>:message</small><br>') !!}

		<input type="text" name="acciones" placeholder="acciones" value="acciones"><br>
		<input type="text" name="involucrados" placeholder="involucrados" value="involucrados"><br>
		<input type="text" name="presupuesto" placeholder="presupuesto" value="presupuesto"><br>
		<input type="text" name="documentacion" placeholder="documentacion" value="documentacion"><br>
		<button>Enviar</button>
	</form>
@endsection