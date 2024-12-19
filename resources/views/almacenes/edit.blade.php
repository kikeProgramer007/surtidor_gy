

<x-app-layout>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-0">
          <div class="col-sm-6 mb-0">
            <h1>Editar Almacén</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item"><a href="{{route('almacen.index')}}">Almacenes</a></li>
              <li class="breadcrumb-item active">Editar Almacen</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form method="POST" action="{{route('almacen.update', $almacen->id )}}" autocomplete="off" class="needs-validation" novalidate>
              @csrf
                <div class="card card-secondary card-outline">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label> 
                                    <input class="form-control" id="nombre" name="nombre" type="text" value="{{$almacen->nombre}}"placeholder="ingrese su nombre " pattern=".*\S+.*" autofocus required />
                                    <div class="invalid-feedback">Introduzca nombre de Almacén.</div>
                                    @error('nombre')
                                        <div class="alert alert-warning">
                                        {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="capacidad_total">Cantidad Total</label> 
                                    <input class="form-control" id="capacidad_total" name="capacidad_total" type="text" value="{{$almacen->capacidad_total}}"placeholder="ingrese sus capacidad_total " pattern=".*\S+.*" autofocus required />
                                    <div class="invalid-feedback">Introduzca la Cantidad Total.</div>
                                    @error('capacidad_total')
                                        <div class="alert alert-warning">
                                        {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="capacidad_actual">Cantidad Actual</label> 
                                    <input class="form-control" id="capacidad_actual" name="capacidad_actual" type="text" value="{{$almacen->capacidad_actual}}"placeholder="ingrese su C.I " pattern=".*\S+.*" autofocus required />
                                    <div class="invalid-feedback">Introduzca cantidad actual.</div>
                                    @error('capacidad_actual')
                                        <div class="text-danger small">
                                        {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                          <div class="d-flex justify-content-end">
                              <div>
                                <button type="submit" class= "btn btn-success btn-sm">Actualizar</button> 
                                <a href="{{route('almacen.index')}}" class= "btn btn-secondary btn-sm">Regresar</a>  
                              </div>
                          </div>

                    </div><!--/body card-->

                </div><!--/CARD FIN-->
            </form>

        </div><!-- /.container-fluid -->
    </section><!-- /.content -->

</x-app-layout>