@extends('layouts.app')
@section('title')
  Bienvenido a ITlligenCE
@endsection
@section('user-bar')
	@include('auth.sesion')
@endsection
@section('content')
<div class="wrapper">        
  @include('platform.main')
	<div class="row">
	    <div class="center-block">
	        <h2>Dashboard principal</h2>
	    </div>
	</div>
</div>
@endsection

