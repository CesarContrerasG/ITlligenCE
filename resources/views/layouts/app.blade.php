<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield("title")</title>

    <!-- Styles -->
    <link rel="stylesheet" href={{asset('css/app.css')}} />
    <link rel="stylesheet" href={{asset('css/main-menu.css')}}>
    <link rel="stylesheet" href={{asset('css/itlligence.css')}}>

</head>
<body>
  @auth
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <a  href="/home"><img alt="ITlligenCE" src={{asset('image/itlligence-logo-blue.png')}} width="50"><img src={{ asset('image/ave-logo.png') }} width="120" alt="Alto Valor Estratégico" /></a>
      </div>
      <div class="col-md-4 text-center">
        @yield("modulo_act")
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        @yield("user-bar")
      </ul>
      </div><!-- /.navbar-collapse -->        
    </div>
  </nav>
  @endauth
  <div>
    @yield("content")
  </div>
  <script src={{asset('js/iconwc.js')}}></script>
  <script src={{asset('js/app.js')}}></script>
  <script type="text/javascript">
     $(document).ready(function () {
         $('#sidebarCollapse').on('click', function () {
             $('#sidebar').toggleClass('active');
         });
     });
  </script>

  <footer class="footer-autor">
    <div class="container">
      &copy; 2018 Derechos reservados.
    </div>
  </footer>
</body>
</html>
