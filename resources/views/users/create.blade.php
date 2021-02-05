@extends('layouts.app', ['activePage' => 'create', 'titlePage' => __('create')])

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
      <form class="form" method="POST" action="{{ route('users.create') }}">
        @csrf

        <div class="card card-login card-hidden mb-3">
          <div class="card-header card-header-success text-center">
            <h4 class="card-title"><strong>Registrar</strong></h4>
            </div>
          <div class="card-body ">
            <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">face</i>
                  </span>
                </div>
                <input type="text" name="name" class="form-control" onblur="this.value = this.value.toUpperCase();" placeholder="{{ __('Nombre') }}" value="{{ old('name') }}"  required>
              </div>
              @if ($errors->has('name'))
                <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                  <strong>{{ $errors->first('name') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('apellidoP') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">face</i>
                  </span>
                </div>
                <input type="text" name="apellidoP" class="form-control" placeholder="Apellido Paterno" value="{{ old('apellidoP') }}" onblur="this.value = this.value.toUpperCase();" required>
              </div>
              @if ($errors->has('apellidoP'))
                <div id="apellidoP-error" class="error text-danger pl-3" for="apellidoP" style="display: block;">
                  <strong>{{ $errors->first('apellidoP') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('apellidoM') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">face</i>
                  </span>
                </div>
                <input type="text" name="apellidoM" class="form-control" placeholder="Apellido Materno" value="{{ old('apellidoM') }}" onblur="this.value = this.value.toUpperCase();" >
              </div>
              @if ($errors->has('apellidoM'))
                <div id="apellidoM-error" class="error text-danger pl-3" for="apellidoM" style="display: block;">
                  <strong>{{ $errors->first('apellidoM') }}</strong>
                </div>
              @endif
            </div>
              
              <div class="bmd-form-group{{ $errors->has('username') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">people</i>
                  </span>
                </div>
                <input type="text" name="username" class="form-control" placeholder="Usuario" value="{{ old('username') }}" onblur="this.value = this.value.toUpperCase();" >
              </div>
              @if ($errors->has('apellidoM'))
                <div id="username-error" class="error text-danger pl-3" for="username" style="display: block;">
                  <strong>{{ $errors->first('username') }}</strong>
                </div>
              @endif
            </div>
              
              
            <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">email</i>
                  </span>
                </div>
                <input type="email" name="email" class="form-control" placeholder="{{ __('Email') }}" value="{{ old('email') }}" required>
              </div>
              @if ($errors->has('email'))
                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                  <strong>{{ $errors->first('email') }}</strong>
                </div>
              @endif
            </div>
              
              
            <div class="bmd-form-group{{ $errors->has('rol') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">person</i>
                  </span>
                </div>
                  <select class="form-control" name="rol" id="rol" >
                      <option value='0'>Seleccione una opción</option>
                            @foreach($roles as $rol)
                                <option value='{{ $rol->id }}'>{{ $rol->rol_name }}</option>
                            @endforeach
                    </select>
                    @error('rol')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
               
            
          
              
            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Contraseña') }}" required>
              </div>
              @if ($errors->has('password'))
                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                  <strong>{{ $errors->first('password') }}</strong>
                </div>
              @endif
            </div>
              
            <div class="bmd-form-group{{ $errors->has('password_confirmation') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="{{ __('Confirme su contraseña') }}" required>
              </div>
              @if ($errors->has('password_confirmation'))
                <div id="password_confirmation-error" class="error text-danger pl-3" for="password_confirmation" style="display: block;">
                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                </div>
              @endif
            </div>
              
           </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-success btn-link btn-lg" >Aceptar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>

@endsection
