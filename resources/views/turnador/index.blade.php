@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row" style="display: flex; justify-content: center; text-align: center;">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon" style="display: flex; justify-content: center; text-align: center;">
              <div class="card-icon" >
                  <i class="material-icons">bookmark</i>
              </div>
             
            </div>
               <h3 class="card-category" style="display: flex; justify-content: center; text-align: center;" >Solicitar Turno</h3>
            <div class="card-footer " style="justify-content: center;">
              <div>    
                  <a class="btn btn-block btn-success btn-round text-white  btn-lg" data-toggle="modal" data-target="#myModal">Turno</a>
              </div>
                
                
         <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-sm" role="document">
                <div style="background-color: rgba(70, 162, 74, 0.7);" class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                    </div>
                    <div class="modal-body">
                        <!--          <div class="video-wrap">
                                <video id="video" playsinline autoplay></video>
                            </div>
                            <canvas id="canvas" width="500" height="200"></canvas>-->
                        
                            <div class="container" style="display: flex; justify-content: center; text-align: center;">
                                <h2>Turno N° </h2><br>
                                <section>
                                <h2>{{$turnos}}</h2><br>
                                
                            </section>

                            <p class="footer"></p>
                            
                        </div>
                      
                        
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <a href="{{route('turnador.create')}}"><button type="button" class="btn btn-secondary">Solicitar Turno</button></a>  
                    </div>
                </div>
            </div>
        </div>
                
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
@endsection