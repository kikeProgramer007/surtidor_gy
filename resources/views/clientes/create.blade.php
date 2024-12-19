<x-app-layout>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-0">
                <div class="col-sm-6 mb-0">
                    <h1>Crear Cliente</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="{{route('cliente.index')}}">Clientes</a></li>
                        <li class="breadcrumb-item active">Crear Cliente</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form method="POST" action="{{ route('cliente.store') }}" autocomplete="off"
                class="needs-validation" novalidate>
                @csrf
                <div class="card card-secondary card-outline">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input class="form-control" id="nombre" name="nombre" type="text"
                                        value="{{ old('nombre') }}"placeholder="ingrese su nombre " pattern=".*\S+.*"
                                        autofocus required />
                                    <div class="invalid-feedback">Introduzca nombre de Empleado.</div>
                                    @error('nombre')
                                        <div class="text-danger small">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="nombre">Apellidos</label>
                                    <input class="form-control" id="apellidos" name="apellidos" type="text"
                                        value="{{ old('apellidos') }}" placeholder="ingrese sus apellidos "
                                        pattern=".*\S+.*"  required />
                                    <div class="invalid-feedback">Introduzca su apellido.</div>
                                    @error('apellidos')
                                        <div class="text-danger small">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="nombre">Cedula de identidad</label>
                                    <input class="form-control" id="ci" name="ci" type="number"
                                        value="{{ old('ci') }}"placeholder="ingrese su ci " pattern=".*\S+.*"
                                        autofocus required />
                                    <div class="invalid-feedback">Introduzca su ci.</div>
                                    @error('ci')
                                        <div class="text-danger small">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Telefono</label>
                                    <input class="form-control" id="telefono" name="telefono" type="number"
                                        pattern=".*\S+.*"
                                        placeholder="ingrese su telefono "value="{{ old('telefono') }}" required />
                                    <div class="invalid-feedback">Por favor, coloque su nro de telefono.</div>
                                    @error('telefono')
                                        <div class="text-danger small">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="row">


                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Direccion</label>
                                    <input class="form-control" id="direccion" name="direccion" type="text"
                                        pattern=".*\S+.*"
                                        placeholder="ingrese su direccion "value="{{ old('direccion') }}" required />
                                    <div class="invalid-feedback">Por favor, coloque su direccion.</div>
                                    @error('direccion')
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
                                <a href="{{ route('cliente.index') }}" class= "btn btn-dark btn-sm">Regresar</a>
                            </div>
                        </div>

                    </div><!--/body card-->

                </div><!--/CARD FIN-->
            </form>
        </div><!-- /.container-fluid -->
    </section><!-- /.content -->

</x-app-layout>
