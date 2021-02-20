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
              <table  class="table dt-responsive data-table table-hover" id="example" class="display" >
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

<!--<script>
  function actualizar(){
  $('#example').fadeOut("slow").load('./table_oficinatecnica.php').fadeIn("slow");
  }
  setInterval( "actualizar()", 10000);
</script>-->

<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<script>
      var table;
      $(document).ready(function(){
       var table = $('#example').DataTable({
          "destroy": true,
          "order": [[0, "desc"]],
          "language":{
          "lengthMenu": "Mostrar _MENU_ Registros por página",
          "info": "Mostrando pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(filtrada de _MAX_ registros)",
            "loadingRecords": "Cargando...",
            "processing":     "Procesando...",
            "search": "Buscar:",
            "zeroRecords":    "No se encontraron registros coincidentes",
            "paginate": {
              "next":       "Siguiente",
              "previous":   "Anterior"
            },          
          },   
        }); 
      });
    </script>
@endsection