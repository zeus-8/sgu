@extends('layouts.principal')

@section('content')

		<div class="content-wrapper">
			<section class="content-header">
		    	@if (Session::has('message'))
							<!-- <section class="content-header">
								<h1>Guardado de los Datos</h1>
							</section> -->
							<!-- <section class="content"> -->
								<div class="alert alert-success alert-dismissible">
					                	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					                	<h4><i class="icon fa fa-check"></i> Excelente!!!</h4>
					                {{Session::get('message')}}
				              </div>
							<!-- </section> -->
						<!-- </div> -->
				@endif
		      <h1>
		        Busqueda de Usiarios
		      </h1>
		    </section>

		    <!-- Main content -->
		    <section class="content">
		    	<div class="row">
			        <div class="col-xs-12">
			        	<div class="box box-primary">
				            <div class="box-header">
				            	<h3 class="box-title">Usuarios Registrados</h3>
				            </div>
			            	<!-- /.box-header -->
				            <div class="box-body">
								<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>C. I.</th>
											<th>Nombre</th>
											<th>Apellido</th>
											<th>Nom. Usuario</th>
											<th>ACCION</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($users as $user)
											<tr>
												<td>{{$user->ci}}</td>
												<td>{{$user->nombre}}</td>
												<td>{{$user->apellido}}</td>
												<td>{{$user->name_user}}</td>
												<td>
													<div class="btn-group">
									                	<button type="button" class="btn btn-primary">--Seleccione--</button>
									                	<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
										                    <span class="caret"></span>
										                    <span class="sr-only"></span>
									                	</button>
														<ul class="dropdown-menu" role="menu">
															<!-- Button trigger modal -->
															{{-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
															  Consulta
															</button> --}}
															<li>{!! link_to_route('usuario.show', $title = 'Consultar', $parameters = $user->id, $attributes = null) !!}</li>
															<li>{!! link_to_route('usuario.edit', $title = 'Modificar', $parameters = $user->id, $attributes = null) !!}</li>
															{{-- <li>{!! link_to_route('usuario.edit', $title = 'Reset Passwod', $parameters = $user->id, $attributes = null) !!}</li> --}}
															<!-- <li><a href="#"></a></li> -->
															<li class="divider"></li>
															<li><a href="{!! route('usuario.destroy', $user->id) !!}">Inactivar</a></li>
														</ul>
									                </div>
												</td>
											</tr>
										<!-- Modal -->
											{{-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
											  <div class="modal-dialog" role="document">
											    <div class="modal-content">
											      <div class="modal-header">
											        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											        <h4 class="modal-title" id="myModalLabel">Consulta de Usiario</h4>
											      </div>
											      <div class="modal-body">
											        <div class="row">
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
													</div>
											      </div>
											      <div class="modal-footer">
											      </div> --}}
											    </div>
											  </div>
											</div>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

@stop