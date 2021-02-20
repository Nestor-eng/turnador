<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " >
  <div class="container-fluid">
   <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
    <span class="sr-only">Toggle navigation</span>
    <span class="navbar-toggler-icon icon-bar"></span>
    <span class="navbar-toggler-icon icon-bar"></span>
    <span class="navbar-toggler-icon icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end">
      <form class="navbar-form">
        
      </form>
      <ul class="navbar-nav">
        
         
          @if(auth()->user()->rol == 1)
          <li class="nav-item dropdown" >
          <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons" >notifications</i>
            <span class="notification" id="actualiza">               
                               
          </span>
            <p class="d-lg-none d-md-block">
              Notificaciones
            </p>
       </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
             <a class="dropdown-item" href="#">Asunto</a><hr><br>
            <?php 
                $servername = "74.208.155.164:3326";
                $username = "chivito";
                $password = "Cu4r3nt3na2020";
                $dbname = "turnador";
                $mysqli = new mysqli($servername, $username, $password, $dbname);
                $sql = "SELECT * FROM turnador_especials WHERE estatus = 0";
                $result = mysqli_query($mysqli,$sql);
                while($row = $result->fetch_array(MYSQLI_ASSOC)){
                echo '<a class="dropdown-item" href="#">'.$row['asunto'].'</a>'.'<hr>'.'<br>';
                }
                $result->free();
                $mysqli->close();
                ?>
          </div>
        </li>
        @endif
        
        
        
        
        <li class="nav-item dropdown">
          <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <i class="material-icons">person</i> {{auth()->user()->username}}
            <p class="d-lg-none d-md-block">
              Cuenta
            </p>
          </a> 
         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
            <a class="dropdown-item" href="{{ route('profile.edit') }}">Perfil</a>
            <div class="dropdown-divider"></div> 
           <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Cerrar Sesión</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
<script>

function loadlink(){
        $('#actualiza').fadeOut("slow").fadeIn("slow");
        
       <?php 
//                header("Refresh:14",'auth.blade.php');
                $servername = "74.208.155.164:3326";
                $username = "chivito";
                $password = "Cu4r3nt3na2020";
                $dbname = "turnador";
                $mysqli = new mysqli($servername, $username, $password, $dbname);
                $sql = "SELECT * FROM turnador_especials;";
                $result = mysqli_query($mysqli,$sql);
                $contador = 0;
                while($row = $result->fetch_array(MYSQLI_ASSOC)){
                if($row['estatus'] == 0 ){
                    $contador++;
                } 
                }
              echo $contador;
                $result->free();
                $mysqli->close();
                ?>  
                        console.log('TESTING!!!!');
    }

    loadlink();
    setInterval(function(){
        loadlink()
    }, 10000);
//</script>
  