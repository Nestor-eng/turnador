@extends('layouts.app', ['activePage' => 'turno', 'titlePage' => __('Table List')])

@section('content')
<script src="{{ URL::to('/js/funciones.js') }}" defer></script>
 <div class="content">
  <div class="container-fluid">
    <div class="row">
<!--      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title ">Turnos Normales</h4>
            <p class="card-category"> En esta tabla se encuentran los turnos que no son urgentes</p>
          </div>
          <div class="card-body">
              
            <div class="table-responsive">
                <table class="table" id="editTable">
                <thead class=" text-black">
                  <tr>
                  <th>
                   Folio
                  </th>
                  <th>
                    Descripcion
                  </th>
                    <th>
                      Opciones
                    </th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($normales as $normal)
                            <tr>
                                <td>{!! $normal->folio !!}</td>
                                <td>{!! $normal->descripcion !!}</td>
                                <td>
                                    <form action="{{ route('TurnadorEspecial.update',$normal->id) }}" method="POST" name="editUser" id="editUser">
                                     @csrf
                                    @if($normal->estatus==0)
                                    <a onclick="guardarCambios()" class="btn btn-success" title="Accion">Atender</a>   
                                    @endif
                                    </form>
                                    @if($normal->estatus==1)
                                    <a onclick="finalizar()" class="btn btn-warning" title="Accion">Terminar</a>   
                                    @endif
                                    @if($normal->estatus==2)
                                    <a title="Accion"><i class="material-icons">check_circle_outline</i><strong> Finalizado</strong></a>   
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>-->
      <div class="col-md-12">
        <div class="card card-header-danger">
          <div class="card-header card-header-success">
            <h4 class="card-title mt-0"> Turnos Especiales</h4>
            <p class="card-category"> En esta tabla se encuentran los turnos urgentes</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead class="">
                  <tr>
                  <th>
                    Folio
                  </th>
                  <th>
                    Usuario
                  </th>
                  <th>
                    Teléfono
                  </th>
                  <th>
                    Asunto
                  </th>
                  <th>
                    Opciones
                  </th>
                </tr></thead>
                <tbody>
                  @foreach($turnos as $turno)
                            <tr>
                                <td>{!! $turno->folio !!}</td>
                                <td>{!! $turno->usuario !!}</td>
                                <td><a href="">{!! $turno->telefono !!}</a></td>
                                <td>{!! $turno->asunto !!}</td>
                                <td>
                                    @if($turno->estatus==0)
                                  
                                    <button class="btn btn-success" title="Accion" name="Confirmar" id="Confirmar" data-toggle="modal" data-target="#exampleModalCenter">Atender</button> 
<!--                                onclick="return confirm('¿Desea atender el soporte?')" -->
                                    <div class="modal fade bd-example-modal-sm" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">SOPORTE</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('TurnadorEspecial.update',$turno->id) }}" method="POST" id="Turno">
                                                     @csrf
                                                     @method('put')
                                                    ¿Desea atender el soporte?
                                                     </form> 
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-success" data-dismiss="modal" onclick="event.preventDefault(); document.getElementById('Turno').submit();">Aceptar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                                   
                                    @endif
                                    @if($turno->estatus==1)
                                    <button class="btn btn-warning" title="Accion" name="Confirmar2" id="Confirmar2" data-toggle="modal" data-target="#exampleModalCenter2">Finalizar</button> 
<!--                                onclick="return confirm('¿Desea atender el soporte?')" -->
                                    <div class="modal fade bd-example-modal-sm" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">SOPORTE</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('TurnadorEspecial.update',$turno->id) }}" method="POST" id="Turno">
                                                     @csrf
                                                     @method('put')
                                                     ¿Desea Finalizar el soporte?
                                                     </form> 
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-success" data-dismiss="modal" onclick="event.preventDefault(); document.getElementById('Turno').submit();">Aceptar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>            
                                    @endif
                                    @if($turno->estatus==2)
                                    <a title="Accion3"><i class="material-icons">check_circle_outline</i><strong> Finalizado</strong></a>   
                                    @endif
                                </td>
                            </tr>
                        @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection