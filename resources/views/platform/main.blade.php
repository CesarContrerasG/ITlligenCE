      
<nav id="sidebar">

    <!-- Sidebar Header -->
<!--    <div class="sidebar-header">
        <h3>ITlligenCE</h3>
        <strong>IT</strong>
    </div>
-->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="{{ asset('image/itlligence-logo-blue.png') }}" class="img-circle" alt="Logo Empresa">
        </div>
        <div class="pull-left info">
            <p>{{ "ITlligenCE" }}</p>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><span class="caret"></span> &nbsp;{{ "Empresas" }}</a>
            <ul class="dropdown-menu">
                <li><a href="#">{{ "ITlligenCE" }}</a></li>
                <li><a href="#">{{ "Diehl Controls" }}</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{ route('companies') }}">{{ "Gestión de Empresas" }}</a></li>
            </ul>
        </div>
    </div>
    <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
        <i class="glyphicon glyphicon-th-list"></i>
    </button>
    <!-- Sidebar Links -->
    <ul class="list-unstyled components">
        <li>
            <a href="/home">
                <i class="glyphicon glyphicon-dashboard"></i>
                Inicio
            </a>
        </li>
        <li>
            <a href="compras">
                <i class="glyphicon glyphicon-shopping-cart"></i>
                Compras
            </a>
        </li>                
        <li>
            <a href="#">
                <i class="glyphicon glyphicon-plane"></i>
                Tráfico
            </a>
        </li>
        <li>
            <a href="#">
                <i class="glyphicon glyphicon-th-large"></i>
                Anexo 24
            </a>
        </li>
        <li>
            <a href="#">
                <i class="glyphicon glyphicon-piggy-bank"></i>
                Anexo 31
            </a>
        </li>
        <li>
            <a href="#">
                <i class="glyphicon glyphicon-folder-open"></i>
                Expediente Digital
            </a>
        </li>
        <li>
            <a href="#">
                <i class="glyphicon glyphicon-ok"></i>
                Auditoria
            </a>
        </li>
        <li>
            <a href="#pageDWH" data-toggle="collapse" aria-expanded="false">
                <i class="glyphicon glyphicon-hdd"></i>
                Centro de Datos
            </a>
            <ul class="collapse list-unstyled" id="pageDWH">
                <li><a href="#">Catálogos</a></li>
                <li><a href="#">Data Stage</a></li>
                <li><a href="#">Storage</a></li>
                <li><a href="#">Reporteador</a></li>
                <li><a href="#">Carga/Descarga masiva</a></li>
                <li><a href="#">Respaldo Base de Datos</a></li>
            </ul>
        </li>                              
        <li>
            <a href="#pageTools" data-toggle="collapse" aria-expanded="false">
                <i class="glyphicon glyphicon-cog"></i>
                Herramientas
            </a>
            <ul class="collapse list-unstyled" id="pageTools">
                <li><a href="#">Configuración</a></li>
                <li><a href="#">Administración</a></li>
            </ul>
        </li>                                                
    </ul>
</nav>
