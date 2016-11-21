@extends('layouts.principal')

@section('content')

		<div class="content-wrapper">
			<section class="content-header">
		      <h1>
		        Consulta de Usiarios
		      </h1>
		    </section>

		    <!-- Main content -->
		    <section class="content">
		    	<div class="row">
			        {{-- <div class="col-xs-12"> --}}
			        	{{-- <div class="box box-primary"> --}}
				            <div class="box-body">
								<div class="col-md-3"></div>
								<div class="col-md-6">
							      <div class="box box-solid box-primary">
							        <div class="box-header">
							          <h3 class="box-title">Datos Completo del Usuario</h3>
							        </div><!-- /.box-header -->
							        <div class="box-body">
							        	<dl class="dl-horizontal">
										<dt>Cedula</dt>
										<dd>{{$user->ci}}</dd>
										<dt>Nombre</dt>
										<dd>{{$user->nombre}}</dd>
										<dt>Apellido</dt>
										<dd>{{$user->apellido}}</dd>
										<dt>Telef. Celular</dt>
										<dd>{{ $user->telef1 }}</dd>
										<dt>Telef. Casa</dt>
										<dd>{{ $user->telef2 }}</dd>
										<dt>Email</dt>
										<dd>{{ $user->email }}</dd>
										<dt>Direccion</dt>
										<dd>{{ $user->direccion }}</dd>
										<dt>Nombre de Usuario</dt>
										<dd>{{ $user->name_user }}</dd>
										</dl>
							        </div><!-- /.box-body -->
							      </div><!-- /.box -->
							    </div>	
							</div>
						{{-- </div> --}}
					{{-- </div> --}}
				</div>
			</section>
		</div>


@stop