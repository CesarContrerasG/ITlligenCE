@extends('layouts.app')
@section('title')
  Bienvenido a ITlligenCE
@endsection
@section('user-bar')
	@include('auth.sesion')
@endsection
@section('modulo_act')
    <header class="flex-box space-between">
        <div class="flex-box">
            <div class="app-title">
                <div class="app-name app-red">Compras</div>
            </div>
        </div>
    </header>
@endsection
@section('content')
		<div class="wrapper">        
		  @include('platform.main')
		  @if($estado)
			<div class="row">
			    <div class="center-block">
			        @include('partials.headers.compras')
			    </div>
			</div>
		  @else
		  	<h2>Acceso no permitido</h2>
		  @endif
		</div>
@endsection
