@extends('layouts.app', ['activePage' => 'show', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row"style="display: flex; justify-content: center; text-align: center;">
<!--        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">bookmark</i>
              </div>
              <p class="card-category">Soportes</p>
              <h3 class="card-title">49/50
                <small>GB</small>
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                
                
              </div>
            </div>
          </div>
        </div>-->
<!--        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">person</i>
              </div>
              <p class="card-category">Usuarios</p>
              <h3 class="card-title">$34,245</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                
              </div>
            </div>
          </div>
        </div>-->
<!--        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="material-icons">info_outline</i>
              </div>
              <p class="card-category">Fixed Issues</p>
              <h3 class="card-title">75</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                
              </div>
            </div>
          </div>
        </div>-->
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success" style="display: flex; justify-content: center; text-align: center;">
             
              <p class="card-category"></p>
              <h3 class="card-title">Folio Numero: {{$turnos->folio}}</h3>
            </div>
              <div class="content col-lg-12">
              <br><p style="text-align: center"><strong><font size=3>Usuario: </font></strong>{{$turnos->usuario}}</p>
              </div>
              <hr>
              <div class="content col-lg-12">
                  <p style="text-align: center"><strong><font size=3>Nombre: </font></strong>{{$nombre}} {{$apellidoP}} {{$apellidoM}}</p>
              </div>
                  <hr>
              <div class="content col-lg-12">
                  <p style="text-align: center"><strong><font size=3>Teléfono: </font></strong>{{$turnos->telefono}}</p>
              </div>
                  <hr>
              <div class="content col-lg-12">
                  <p style="text-align: center"><strong><font size=3>Asunto: </font></strong>{{$turnos->asunto}}</p>
              </div>
                  <hr> 
              <div class="content col-lg-12">
                  <p ><strong><font size=3>Descripción</font></strong><p style="text-align: justify; text-transform: lowercase;"> {{$turnos->descripcion}}</p></p>
              </div>
                  <hr>
              
              @if($turnos->estatus==0)
              <div class="card-footer" style="display: flex; justify-content: center; text-align: center;">
                  <form action="{{ route('TurnadorEspecial.update',$turnos->folio) }}" method="POST" id="Turno">
                            @csrf
                            @method('put')
                            <button onclick="return confirm('¿Desea atender el soporte?')" class="btn btn-success" title="Atender">Atender</button> 
                        </form> 
              </div>
              @endif
              @if($turnos->estatus==1)
              <form action="{{ route('TurnadorEspecial.update',$turnos->folio) }}" method="POST" id="Turno2">
                            @csrf
                            @method('put')
                            <button onclick="return confirm('¿Desea finalizar el soporte?')" class="btn btn-warning" title="Finalizar" >Finalizar</button> 
                        </form>
              @endif
              @if($turnos->estatus==2)
              
                           <a title="Finalizado"><i class="material-icons">check_circle_outline</i><strong> Finalizado</strong></a><br>
                       
              @endif
              
        </div>
      </div>
    </div>
  </div>
  </div>>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush