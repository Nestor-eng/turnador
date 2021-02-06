@extends('layouts.app', ['activePage' => 'turno', 'titlePage' => __('Table List')])

@section('content')
<script src="{{ URL::to('/js/funciones.js') }}" defer></script>
 <div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
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
      </div>
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
                                    <form action="{{ route('TurnadorEspecial.update',$turno->id) }}" method="POST">
                                    @csrf
                                    @method('put')
                                    <button class="btn btn-success" title="Accion">Atender</button>  
                                    </form>
                                    @endif
                                    @if($turno->estatus==1)
                                    <a  href="{{route('TurnadorEspecial.cambiar',$turno->id)}}"class="btn btn-warning" title="Accion2">Finalizar</a>                
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