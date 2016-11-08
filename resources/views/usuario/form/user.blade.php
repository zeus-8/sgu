            <div class="form-group">
              <label for="input-group-addon">Nombre</label>
              {!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Nombre']) !!}
              {{-- <span class="glyphicon glyphicon-user form-control-feedback"><i class="fa fa-user"></i></span> --}}
            </div>
            <div class="form-group">
              <label for="input-group-addon">Apellido</label>
              {!! Form::text('apellido', null, ['class'=>'form-control', 'placeholder'=>'Apellido']) !!}
              {{-- <span class="glyphicon glyphicon-user form-control-feedback"></span> --}}
            </div>
            <div class="form-group">
              <label for="input-group-addon">Cedula</label>
              {!! Form::text('ci', null, ['class'=>'form-control', 'placeholder'=>'Cedula']) !!}
              {{-- <span class="glyphicon glyphicon-ok form-control-feedback"></span> --}}
            </div>
            <div class="form-group">
              <label for="input-group-addon">Telefono Casa</label>
              {!! Form::text('telef1', null, ['class'=>'form-control', 'placeholder'=>'Telefono-Cel']) !!}
              {{-- <span class="glyphicon glyphicon-earphone form-control-feedback"></span> --}}
            </div>
            <div class="form-group">
              <label for="input-group-addon">Telefono Celular</label>
              {!! Form::text('telef2', null, ['class'=>'form-control', 'placeholder'=>'Telefono-Casa']) !!}
              {{-- <span class="glyphicon glyphicon-earphone form-control-feedback"></span> --}}
            </div>
            <div class="form-group">
              <label for="input-group-addon">Direccion</label>
              {!! Form::text('direccion', null, ['class'=>'form-control', 'placeholder'=>'Direccion']) !!}
              {{-- <span class="glyphicon glyphicon-user form-control-feedback"></span> --}}
            </div>
            <div class="form-group ">
              <label for="input-group-addon">Email</label>
              {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'E-mail']) !!}
              {{-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> --}}
            </div>
            <div class="form-group ">
              <label for="input-group-addon">Rol</label>
              {!!Form::select('rol', ['1' => 'Administrador', '2' => 'Profesor', '3' => 'Alumno'], null, ['class'=>'form-control select2', 'placeholder'=>'--Seleccione--']); !!}
              {{-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> --}}
            </div>
            