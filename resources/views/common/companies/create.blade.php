@extends('layouts.app')
@section('title')
  Nueva Empresa
@endsection
@section('user-bar')
	@include('auth.sesion')
@endsection
@section('modulo_act')
    <header class="flex-box space-between">
        <div class="flex-box">
            <div class="app-title">
                <div class="app-name app-red">Nueva Empresa</div>
            </div>
        </div>
    </header>
@endsection
@section('content')
    <div class="content-header content-center">
        <div class="wrapper">        
            @include('platform.main')
            <!-- Default box -->
            <div class="container">
                <div class="box box-success">
                    {!! Form::open(['url' => 'companies', 'files' => true, 'role' => 'form']) !!}
                    <div class="box-body">
                        {{ Form::textGroup('company_name', 'Nombre/Razón Social', 'credit-card') }}

                        {{ Form::textGroup('rfc', trans('general.taxid'), 'ok-circle') }}

                        {{ Form::emailGroup('company_email', trans('general.email'), 'envelope') }}

                        {{ Form::textareaGroup('company_address', trans('general.address')) }}

                        {{ Form::fileGroup('company_logo', trans('companies.logo')) }}

                        {{ Form::radioGroup('enabled', trans('general.enabled')) }}
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        {{ Form::saveButtons('companies') }}
                    </div>
                    <!-- /.box-footer -->

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection