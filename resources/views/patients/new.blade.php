@extends('layouts.base')
@section('title','Registrar nuevo paciente')
@section('content')
	<div class="container">

<h5><a href="{{route('patients_index')}}" type="button" class="btn btn-sm btn-warning"><i class="fa fa-arrow-left" aria-hidden="true"></i> Cancelar y Volver a Lista de Pacientes</a></h5>

  <div class="x_panel">
  <div class="x_content">
  <br/>

  
  <form onreset="" enctype="multipart/form-data" class="form" method="post" >
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <fieldset>
    {{csrf_field()}}
    <input type="hidden" name="uid" >





    <label class="control-label">Datos personales</label>
    <div class="clearfix"></div>

    <div class="col-md-2" style="border:black solid 2px;border-radius:10px;padding: 1px;">
      <center>
      <img style="padding: 0px" id="patient_img" name="patient_img" alt="avatar" width="100" height="100" src="{{ asset('/patient_pictures/default.png') }}" >
      <input style="display: none" type="file" id="input_image" name="image" accept="image/*" onchange="document.getElementById('patient_img').src = window.URL.createObjectURL(this.files[0])">
      <label for="input_image" class="btn btn-xs btn-primary">Seleccionar Imagen...</label>
      </center>
    </div>
    <div class="col-md-10">
      
    <label class="control-label col-md-2 col-sm-2 col-xs-12 col-md-push-1">Nombre *</label>
    <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
      <input type="text" class="form-control has-feedback-left" id="input_name" placeholder="Nombre"  name="firstname" value="{{old("input_name")}}">
      <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
    </div>

    <label class="control-label col-md-1 col-sm-1 col-xs-12">Apellido*</label>
    <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
      <input type="text" class="form-control" id="input_apellido" placeholder="Apellido"  name="lastname" value="{{old("input_apellido")}}">
      <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
    </div>


<div class="col-md-12 ">
      <div class="form-group row">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12 col-md-push-1">Género</label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
              
                  <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                  <input type="radio" name="gender" value="mujer"> &nbsp; Mujer &nbsp;
                                </label>
                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                  <input type="radio" name="gender" value="hombre"> Hombre
                                </label>
                                <label class="btn btn-default active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                  <input type="radio" name="gender" checkedvalue ="none"> No especificado
                                </label>
                          
                          </div>
                        </div>
      </div>
</div>

        <label class="control-label col-md-2 col-md-push-0" style="text-align: right;">Fecha nacimiento</label>
        <div class="col-md-4">
            <div class="input-group date" id="fecha_nac" >
                <span style="color: blue" class="input-group-addon">
                   <span class="glyphicon glyphicon-calendar"></span>
                </span>
                <input type='text' class="form-control" placeholder="Fecha nacimiento" name="birthday">
            </div>
        </div>



    <label class="control-label col-md-1 col-sm-1 col-xs-12">R.U.T*</label>
    <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
      <input type="text" class="form-control has-feedback-right"  name="rut" value="{{old("rut")}}" placeholder="ej: 00111222-3">
      <span class="fa fa-address-card-o form-control-feedback right " aria-hidden="true"></span>
    </div>

    <label class="control-label col-md-2 col-sm-2 col-xs-12 col-md-push-1" >E-mail</label>
    <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
      <input type="text" class="form-control has-feedback-left" id="input_email" placeholder="Email"  name="email" value="{{old("input_email")}}">
      <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
    </div>

    <label class="control-label col-md-1 col-sm-1 col-xs-12">Teléfono</label>
    <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
      <input class="form-control has-feedback-right" type="text" id="input_telefono" placeholder="Teléfono"  name="phone" value="{{old("input_telefono")}}">
      <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
    </div>

    <label class="control-label col-md-2 col-sm-2 col-xs-12 col-md-push-1">Dirección</label>
    <div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback">
      <input type="text" class="form-control has-feedback-left" id="input_direccion" value="{{old("input_direccion")}}" placeholder="Dirección"  name="address">
      <span class="fa fa-address-card form-control-feedback left" aria-hidden="true"></span>
    </div>

    </div>

    </fieldset>
    <div class="form-group">
      <button class="btn btn-info col-md-2 col-md-offset-4" type="reset"><i class="fa fa-refresh" aria-hidden="true"></i> Reiniciar Formulario</button>
      <button class="btn btn-primary " type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i> Registrar Nuevo Paciente</button>
    </div>
  </form>

  </div> 
  </div>

	</div>
@endsection
<script type="text/javascript">
@section('ready_scripts')
    $('#fecha_nac').datetimepicker({
        format: 'DD/MM/YYYY',
        locale: 'es'
    });
@endsection
</script>