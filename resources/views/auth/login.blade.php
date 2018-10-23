@extends("layouts.app")
@section('title')
  Login ITlligenCE
@endsection
@section('content')
  <div class="login-page">
       <div class="row">
           <div class="col-md-4 login-sec">
            <div class="login-logo">
                <img src="{{ asset('image/itlligence-logo-white.png') }}" alt="ITlligenCE" />
            </div>            
            <h3 class="text-center">ITlligenCE</h3>
            <form class="login-form" role="form" method="POST" action="{{route('login')}}">
             {{ csrf_field() }}
             <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
               <input type="email" name="email" class="form-control" placeholder="Ingrese su cuenta">
               {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
             </div>
             <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
               <input type="password" name="password" class="form-control" placeholder="Ingrese su contraseña">
               {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
             </div>
             <div class="col-xs-pull-4">
               <button type="submit" class="btn btn-success btn-block btn-flat">Iniciar</button>
             </div>
            </form>
           </div>
      </div>
    </div>
@endsection
