@extends('layouts.app', ['activePage' => 'especial', 'titlePage' => __('register')])

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
      <form class="form" method="POST" action="{{ route('TurnadorEspecial.store') }}">
        @csrf

        <div class="card card-login card-hidden mb-3">
          <div class="card-header card-header-success text-center">
            <h4 class="card-title"><strong>Turno Especial</strong></h4>
            </div>
          <div class="card-body ">
          
           <div class="bmd-form-group{{ $errors->has('folio') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">add_to_queue</i>
                  </span>
                </div>
                  <input type="text" name="folio" class="form-control" value="{{ $turnos }}" readonly="readonly">
              </div>
              @if ($errors->has('folio'))
                <div id="folio-error" class="error text-danger pl-3" for="folio" style="display: block;">
                  <strong>{{ $errors->first('folio') }}</strong>
                </div>
              @endif
            </div>   
           
           <div class="bmd-form-group{{ $errors->has('usuario') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">person</i>
                  </span>
                </div>
                  <input type="text" name="usuario" class="form-control" value="{{ auth()->user()->username }}" readonly="readonly">
              </div>
              @if ($errors->has('usuario'))
                <div id="usuario-error" class="error text-danger pl-3" for="usuario" style="display: block;">
                  <strong>{{ $errors->first('usuario') }}</strong>
                </div>
              @endif
            </div>
              
            <div class="bmd-form-group{{ $errors->has('telefono') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">phone</i>
                  </span>
                </div>
                  <input type="number" name="telefono" class="form-control" placeholder="{{ __('Teléfono') }}" value="{{ old('telefono') }}">
              </div>
              @if ($errors->has('telefono'))
                <div id="telefono-error" class="error text-danger pl-3" for="telefono" style="display: block;">
                  <strong>{{ $errors->first('telefono') }}</strong>
                </div>
              @endif
            </div>
              
              
              
            <div class="bmd-form-group{{ $errors->has('asunto') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">feedback</i>
                  </span>
                </div>
                <input type="text" name="asunto" class="form-control" placeholder="Asunto" value="{{ old('asunto') }}" onblur="this.value = this.value.toUpperCase();" required>
              </div>
              @if ($errors->has('asunto'))
                <div id="asunto-error" class="error text-danger pl-3" for="asunto" style="display: block;">
                  <strong>{{ $errors->first('asunto') }}</strong>
                </div>
              @endif
            </div>
              
              
              
              
              
            <div class="bmd-form-group{{ $errors->has('descripcion') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">grading</i>
                  </span>
                </div>
                  <textarea type="text" name="descripcion" class="form-control" placeholder="Descripción" value="{{ old('descripcion') }}" onblur="this.value = this.value.toUpperCase();" ></textarea>
              </div>
              @if ($errors->has('descripcion'))
                <div id="descripcion-error" class="error text-danger pl-3" for="descripcion" style="display: block;">
                  <strong>{{ $errors->first('descripcion') }}</strong>
                </div>
              @endif
            </div>
              
              
              
              
          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-success btn-link btn-lg">Aceptar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>

@endsection
