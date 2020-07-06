@extends('layouts.app')

@section('title', 'Propuesta')

@section('content')
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<h1>Propuestas</h1>
			<a href="{{ route('proposals.create')}}">Nueva propuesta</a>
			{{-- <pre>{{ dump($proposals) }}</pre> --}}
			@forelse($proposals as $proposal)
				<div class="panel panel-default">
					<div class="panel-heading">
						{{ $proposal->titulo }}
					</div>
					<div class="panel-body">
						{{ $proposal->descripcion}}
					</div>
				</div>
			@empty
				No existen propuestas
			@endforelse
			{{ $proposals->render() }}
		</div>
	</div>
@endsection