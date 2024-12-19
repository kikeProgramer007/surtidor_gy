<x-app-layout>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-0">
                <div class="col-sm-6 mb-0">
                    <h1>Crear Almacén</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="{{route('almacen.index')}}">Almacenes</a></li>
                        <li class="breadcrumb-item active">Crear Almacen</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form method="POST" action="{{ route('almacen.store') }}" autocomplete="off"
                class="needs-validation" novalidate>
                @csrf
                <div class="card card-secondary card-outline">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input class="form-control" id="nombre" name="nombre" type="text"
                                        value="{{ old('nombre') }}"placeholder="ingrese nombre " pattern=".*\S+.*"
                                        autofocus required />
                                    <div class="invalid-feedback">Introduzca nombre de Almacen.</div>
                                    @error('nombre')
                                        <div class="text-danger small">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="nombre">Capacidad Total</label>
                                    <input class="form-control" id="capacidad_total" name="capacidad_total" type="text"
                                        value="{{ old('capacidad_total') }}" placeholder="ingrese sus capacidad_total "
                                        pattern=".*\S+.*"  required />
                                    <div class="invalid-feedback">Introduzca la capacidad Total.</div>
                                    @error('capacidad_total')
                                        <div class="text-danger small">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="nombre">Capacidad Actual</label>
                                    <input class="form-control" id="capacidad_actual" name="capacidad_actual" type="number"
                                        value="{{ old('capacidad_actual') }}"placeholder="ingrese su capacidad_actual " pattern=".*\S+.*"
                                        autofocus required />
                                    <div class="invalid-feedback">Capacidad Actual</div>
                                    @error('capacidad_actual')
                                        <div class="text-danger small">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                        </div>

                 
                        <div class="d-flex justify-content-end">
                            <div>
                                <button type="submit" class= "btn btn-success btn-sm">Guardar</button>
                                <a href="{{ route('almacen.index') }}" class= "btn btn-dark btn-sm">Regresar</a>
                            </div>
                        </div>

                    </div><!--/body card-->

                </div><!--/CARD FIN-->
            </form>
        </div><!-- /.container-fluid -->
    </section><!-- /.content -->

</x-app-layout>
