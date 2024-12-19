<x-app-layout>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-0">
                <div class="col-sm-6 mb-0">
                    <h1>Crear Combustible</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="{{route('combustible.index')}}">Combustibles</a></li>
                        <li class="breadcrumb-item active">Crear Combustible</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form method="POST" action="{{ route('combustible.store') }}" autocomplete="off"
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
                                    <label for="nombre">Tipo de Combustible</label>
                                    <input class="form-control" id="tipo_combustible" name="tipo_combustible" type="text"
                                        value="{{ old('tipo_combustible') }}" step="0.01" placeholder="ingrese sus tipo_combustible "
                                        pattern=".*\S+.*"  required />
                                    <div class="invalid-feedback">Introduzca el tipo de combustible</div>
                                    @error('tipo_combustible')
                                        <div class="text-danger small">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="nombre">Precio</label>
                                    <input class="form-control" id="precio" name="precio" type="number"
                                        value="{{ old('precio') }}"placeholder="ingrese su precio " pattern=".*\S+.*"
                                        autofocus required />
                                    <div class="invalid-feedback">Precio</div>
                                    @error('precio')
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
                                <a href="{{ route('combustible.index') }}" class= "btn btn-dark btn-sm">Regresar</a>
                            </div>
                        </div>

                    </div><!--/body card-->

                </div><!--/CARD FIN-->
            </form>
        </div><!-- /.container-fluid -->
    </section><!-- /.content -->

</x-app-layout>
