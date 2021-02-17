@extends('layouts.app', ['activePage' => 'turno', 'titlePage' => __('Table List')])

@section('content')
<script src="{{ URL::to('/js/funciones.js') }}" defer></script>
 <div class="content">
  <div class="container-fluid">
    <div class="row">

      <div class="col-md-12">
        <div class="card card-header-danger">
          <div class="card-header card-header-success">
            <h4 class="card-title mt-0"> Turnos</h4>
            <p class="card-category"> En esta tabla se encuentran los turnos para el soporte</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table dt-responsive data-table table-hover" id="example" class="display" >
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
                  </th><!--
-->                  <th>
                    Asunto
                  </th>
                  <th>
                    Fecha
                  </th>
                  <th>
                    Opciones
                  </th>
                </tr></thead>
                <tbody>
                @foreach($turnos as $turno)
                <tr>
                    <td title="Folio"> <a href="{{route('TurnadorEspecial.show',$turno->folio)}}">{!! $turno->folio !!}</a></td>
                    <td title="Usuario">{!! $turno->usuario !!}</td>
                    <td title="Telefono">{!! $turno->telefono !!}</td><!--
-->                    <td title="Asunto">{!! $turno->asunto !!}</td>

                    <td title="descripción">{!! $turno->created_at !!}</td>
                    <td>
                        
                       
                        @if($turno->estatus==0)
                        <a href="{{route('TurnadorEspecial.show',$turno->folio)}}"title="ver"><i class="material-icons">visibility</i></a>
                        @endif
                       
                       
                        @if($turno->estatus==2)
                        <a title="Finalizado"><i class="material-icons">check_circle_outline</i><strong> Finalizado</strong></a>   
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
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );







</script>

<script type="text/javascript">
  $(function() {
    
    
    var table = $('.data-table').DataTable({
        "language": {
           "Processing":    "Procesando...",
           "LengthMenu":    "Mostrar _MENU_ registros",
           "ZeroRecords":   "No se encontraron resultados",
           "EmptyTable":    "Ningún dato disponible en esta tabla",
           "Info":          "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
           "InfoEmpty":     "Mostrando registros del 0 al 0 de un total de 0 registros",
           "InfoFiltered":  "(filtrado de un total de _MAX_ registros)",
           "InfoPostFix":   "",
           "Search":        "Buscar:",
           "Url":           "",
           "InfoThousands":  ",",
           "LoadingRecords": "Cargando...",
           "Paginate": {
               "First":    "Primero",
               "Last":    "Último",
               "Next":    "Siguiente",
               "Previous": "Anterior"
           },
           "Aria": {
               "SortAscending":  ": Activar para ordenar la columna de manera ascendente",
               "SortDescending": ": Activar para ordenar la columna de manera descendente"
           }
       }
  });
  }
</script>   
@endsection