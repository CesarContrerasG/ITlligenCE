<li><a href="#">Bienvenido {{ Auth::user()->name }}</a></li>
<li>
    <a href="#" class="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="glyphicon glyphicon-user fa-lg"></i></a>
	<ul class="dropdown-menu navbar-main">
		<li><a href="#">Perfil</a></li>
		<li><a href="#">Preguntas Frecuentes</a></li>
		<li role="separator" class="divider"></li>
		<li><a href="#">Base de datos: {{Auth::user()->dbname }}</a></li>
		<li><a href="{{ url('logout') }}" onclick="event.preventDefault();
		 document.getElementById('logout-form').submit();">Cerrar sesión</a>
		  <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
		      {{ csrf_field() }}
		  </form>
		</li>	
	</ul>
</li>