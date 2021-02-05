<div class="sidebar" data-color="green" data-background-color="black" >
  <!--
  
  data-image="{{ asset('material') }}/img/sidebar-1.jpg"
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="{{route ('home')}}" class="simple-text logo-normal">
      TURNADOR
      </a>
  </div>
  
  <div class="sidebar-wrapper">
  <p class = "simple-text text-center">{{auth()->user()->name}}</p>
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>Inicio</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i class="material-icons">person</i>
          <p>Usuarios
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
              <i class="material-icons">person</i>
                <span class="sidebar-normal">Perfil</span>
              </a>
            </li>
            @if(auth()->user()->rol == 1)
      <li class="nav-item{{ $activePage == 'create' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('users.create') }}">
          <i class="material-icons">person_add</i>
            <p>Agregar Usuario</p>
        </a>
      </li>
      @endif
            </ul>
        </div>
      </li>
      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('turnador.index') }}">
          <i class="material-icons">content_paste</i>
            <p>Solicitar Turno</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'especial' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('TurnadorEspecial.create') }}">
          <i class="material-icons">library_books</i>
            <p>Turno especial</p>
        </a>
      </li>
      @if(auth()->user()->rol == 1)
      <li class="nav-item{{ $activePage == 'turno' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('TurnadorEspecial.index') }}">
          <i class="material-icons">feed</i>
            <p>Turnos</p>
        </a>
      </li>
      @endif
      
    </ul>
  </div>
</div>
