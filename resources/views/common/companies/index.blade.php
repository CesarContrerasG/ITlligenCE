@extends('layouts.app')

@section('title', 'Empresas')

@section('user-bar')
    @include('auth.sesion')
@endsection
@section('modulo_act')
    <header class="flex-box space-between">
        <div class="flex-box">
            <div class="app-title">
                <div class="app-name app-red">Empresas</div>
            </div>
        </div>
    </header>
@endsection
@section('content')
    <div class="content-header content-center">
        <div class="wrapper">        
        @include('platform.main')
        <div class="container">
            <div class="btn-add">
                <span class="new-button"><a href="{{ url('common/companies/create') }}" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-plus"></span> &nbsp;{{ "Agregar empresa" }}</a></span>   
            </div>
            <div class="box box-success">
                <div class="box-header with-border">
                    {!! Form::open(['url' => 'companies', 'role' => 'form', 'method' => 'GET']) !!}

                    <div class="wrapper pull-left">
                        <span class="title-filter hidden-xs">{{ "Buscar" }}:</span> &nbsp;
                        {!! Form::text('search', request('search'), ['class' => 'form-control input-filter input-sm', 'placeholder' => "Escriba para buscar..."]) !!} &nbsp;
                        {!! Form::button('<span class="glyphicon glyphicon-search"></span> &nbsp;' . "Filtrar", ['type' => 'submit', 'class' => 'btn btn-sm btn-default btn-filter']) !!}
                    </div>
                    <div class="wrapper pull-right">
                        <span class="title-filter hidden-xs">{{ "Mostrar" }}:</span> &nbsp;
                        {!! Form::select('limit', array('10' => '10','20' => '20','30' => '30', '50' => '50'), '25', ['class' => 'form-control input-filter input-sm', 'onchange' => 'this.form.submit()']) !!}
                    </div>

                    {!! Form::close() !!}
                </div>
                <!-- /.box-header -->
            </div>
                <!-- /.box-footer -->
            <div class="box-body table-link">
                <div class="table table-responsive">
                    <table class="table table-striped table-hover" id="tbl-companies">
                        <thead>
                            <tr>
                                <th class="col-md-1 hidden-xs">@sortablelink('id','ID')</th>
                                <th class="col-md-3">@sortablelink('name','Nombre/Razón Social')</th>
                                <th class="col-md-2 hidden-xs">@sortablelink('rfc','RFC')</th>
                                <th class="col-md-2 hidden-xs">@sortablelink('email','Correo electrónico')</th>
                                <th class="col-md-2 hidden-xs">@sortablelink('created_at','Fecha')</th>
                                <th class="col-md-1 hidden-xs">@sortablelink('enabled','Estatus')</th>
                                <th class="col-md-1 text-center">{{ "Opciones" }}</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($companies as $item)
                            <tr>
                                <td class="hidden-xs">{{ $item->id }}</td>
                                <td><a href="{{ url('common/companies/' . $item->id . '/edit') }}">{{ $item->company_name }}</a></td>
                                <td class="hidden-xs">{{ $item->rfc }}</td>
                                <td class="hidden-xs">{{ $item->company_email }}</td>
                                <td class="hidden-xs">{{ Date::parse($item->created_at)->format('d-m-Y') }}</td>
                                <td class="hidden-xs">
                                    @if ($item->enabled)
                                        <span class="label label-success">{{ "Activa" }}</span>
                                    @else
                                        <span class="label label-danger">{{ "Inactiva" }}</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" data-toggle-position="left" aria-expanded="false">
                                        <i class="glyphicon glyphicon-option-horizontal"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            @if ($item->enabled)
                                            <li><a href="#">{{ "Cambiar" }}</a></li>
                                            <li class="divider"></li>
                                            @endif
                                            <li><a href="#">{{ "Editar" }}</a></li>
                                            @if ($item->enabled)
                                            <li><a href="#">{{ "Desactivar" }}</a></li>
                                            @else
                                            <li><a href="#">{{ "Activar" }}</a></li>
                                            @endif
                                            <li class="divider"></li>
                                            <li><a href="#">{{ "Eliminar" }}</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                @include('partials.admin.pagination', ['items' => $companies, 'type' => 'Empresas'])
            </div>
        </div>
        <!-- /.box -->
    </div>

@endsection

