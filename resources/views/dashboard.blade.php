@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

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
<!--        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="fa fa-twitter"></i>
              </div>
              <p class="card-category">Followers</p>
              <h3 class="card-title">+245</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                
              </div>
            </div>
          </div>
        </div>-->
          @if(auth()->user()->municipio == 1)
          <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats" >
            <div class="card-header card-header-warning" style="display: flex; justify-content: center; text-align: center;">
             
              <p class="card-category"></p>
              <h3 class="card-title">INFORMACIÓN</h3>
            </div>
              <div >
                  <br><p style="text-align: center;"><font color="red" FACE="courier new"><strong>EL SOPORTE SE DARÁ SOLAMENTE CON NÚMERO DE FOLIO, UNA VEZ QUE TENGA SU NÚMERO DE FOLIO PODRÁ COMUNICARSE A LOS SIGUIENTES NÚMEROS TELEFÓNICOS </strong></font><strong><br>Línea fija sin costo: 800-999-15-51 <br>Número de atención telefónica y vía WhatsApp: 951-414-52-79<strong/></p>
              </div>
              <div class="card-footer">
              <div class="stats">
                
              </div>
            </div>
          </div>
        </div>
          @endif
          
          @if(auth()->user()->municipio == 2)
          <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats" >
            <div class="card-header card-header-warning" style="display: flex; justify-content: center; text-align: center;">
             
              <p class="card-category"></p>
              <h3 class="card-title">INFORMACIÓN</h3>
            </div>
              <br><p style="text-align: center;"><font color="red"><strong>EL SOPORTE SE DARÁ SOLAMENTE CON NÚMERO DE FOLIO, UNA VEZ QUE TENGA SU NÚMERO DE FOLIO PODRÁ COMUNICARSE A LOS SIGUIENTES NÚMEROS TELEFÓNICOS: </strong></font><strong><br>Línea fija sin costo: 800-999-15-51 <br>Número de atención telefónica y vía WhatsApp: 221-436-64-38<strong/></p>
            <div class="card-footer">
              <div class="stats">
                
              </div>
            </div>
          </div>
        </div>
          @endif
          
          @if(auth()->user()->municipio == 0)
          <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats" >
            <div class="card-header card-header-warning" style="display: flex; justify-content: center; text-align: center;">
             
              <p class="card-category"></p>
              <h3 class="card-title">INFORMACIÓN</h3>
            </div>
              <br><p style="text-align: center;"><font color="red"><strong>EL SOPORTE SE DARÁ SOLAMENTE CON NÚMERO DE FOLIO, UNA VEZ QUE TENGA SU NÚMERO DE FOLIO PODRÁ COMUNICARSE A LOS SIGUIENTES NÚMEROS TELEFÓNICOS: </strong></font><strong><br>Línea fija sin costo: 800-999-15-51 <br>Números de atención telefónica y vía WhatsApp: 221-436-64-38 y 951-414-52-79<strong/></p>
            <div class="card-footer">
              <div class="stats">
                
              </div>
            </div>
          </div>
        </div>
          @endif
          
          



      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush