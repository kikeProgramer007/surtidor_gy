

<x-app-layout>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-0">
          <div class="col-sm-6 mb-0">
            <h1>Editar Cliente</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item"><a href="{{route('cliente.index')}}">Clientes</a></li>
              <li class="breadcrumb-item active">Editar Cliente</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form method="POST" action="{{route('cliente.update', $cliente->id )}}" autocomplete="off" class="needs-validation" novalidate>
              @csrf
                <div class="card card-secondary card-outline">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label> 
                                    <input class="form-control" id="nombre" name="nombre" type="text" value="{{$cliente->nombre}}"placeholder="ingrese su nombre " pattern=".*\S+.*" autofocus required />
                                    <div class="invalid-feedback">Introduzca nombre de Empleado.</div>
                                    @error('nombre')
                                        <div class="alert alert-warning">
                                        {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="apellidos">Apellidos</label> 
                                    <input class="form-control" id="apellidos" name="apellidos" type="text" value="{{$cliente->apellidos}}"placeholder="ingrese sus apellidos " pattern=".*\S+.*" autofocus required />
                                    <div class="invalid-feedback">Introduzca su apellido.</div>
                                    @error('apellidos')
                                        <div class="alert alert-warning">
                                        {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="ci">Cédula de Identidad</label> 
                                    <input class="form-control" id="ci" name="ci" type="text" value="{{$cliente->ci}}"placeholder="ingrese su C.I " pattern=".*\S+.*" autofocus required />
                                    <div class="invalid-feedback">Introduzca su C.I.</div>
                                    @error('ci')
                                        <div class="text-danger small">
                                        {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                   
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Telefono</label> 
                                    <input class="form-control" id="telefono" name="telefono" type="number" pattern=".*\S+.*" placeholder="ingrese su telefono "value="{{$cliente->telefono}}" required />
                                    <div class="invalid-feedback">Por favor, coloque su nro de telefono.</div>
                                    @error('telefono')
                                        <div class="alert alert-warning">
                                        {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            
                        </div>
                
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Direccion</label> 
                                    <input class="form-control" id="direccion" name="direccion" type="text" pattern=".*\S+.*" placeholder="ingrese su direccion"value="{{$cliente->direccion}}" required />
                                    <div class="invalid-feedback">Por favor, coloque su direccion</div>
                                    @error('direccion')
                                        <div class="alert alert-warning">
                                        {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                

                          <div class="d-flex justify-content-end">
                              <div>
                                <button type="submit" class= "btn btn-success btn-sm">Actualizar</button> 
                                <a href="{{route('cliente.index')}}" class= "btn btn-secondary btn-sm">Regresar</a>  
                              </div>
                          </div>

                    </div><!--/body card-->

                </div><!--/CARD FIN-->
            </form>

        </div><!-- /.container-fluid -->
    </section><!-- /.content -->

</x-app-layout>