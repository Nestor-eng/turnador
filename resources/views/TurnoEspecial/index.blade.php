@extends('layouts.app', ['activePage' => 'turno', 'titlePage' => __('Table List')])

@section('content')
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
              <table class="table">
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
                                    <a href="" class="btn btn-success" title="Accion">Atender</a>   
                                    
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
                                    <a href="" class="btn btn-success" title="Accion">Atender</a>   
                                    
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