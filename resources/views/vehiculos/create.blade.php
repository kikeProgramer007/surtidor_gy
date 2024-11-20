<x-app-layout>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-0">
                <div class="col-sm-6 mb-0">
                    <h1>Crear Vehiculo</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="{{route('vehiculo.index')}}">Vehiculos</a></li>
                        <li class="breadcrumb-item active">Crear Vehiculo</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form method="POST" action="{{ route('vehiculo.store') }}" autocomplete="off" class="needs-validation" novalidate>

                @csrf
                <div class="card card-secondary card-outline">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="placa">Placa</label>
                                    <input class="form-control" id="placa" name="placa" type="text" value="{{ old('placa') }}"placeholder="ingrese su placa "
                                        autofocus required />
                                    <div class="invalid-feedback">Introduzca la placa.</div>
                                    @error('placa')
                                        <div class="text-danger small">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="marca">Marca</label>
                                    <input class="form-control" id="marca" name="marca" type="text"
                                        value="{{ old('marca') }}" placeholder="ingrese la marca" required />
                                    <div class="invalid-feedback">Introduzca su marca.</div>
                                    @error('marca')
                                        <div class="text-danger small">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="modelo">Modelo</label>
                                    <input class="form-control" id="modelo" name="modelo" type="text"
                                        value="{{ old('modelo') }}"placeholder="ingrese su modelo " required />
                                    <div class="invalid-feedback">Introduzca su modelo.</div>
                                    @error('modelo')
                                        <div class="text-danger small">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Color</label>
                                    <input class="form-control" id="color" name="color" type="text" placeholder="ingrese su color "value="{{ old('color') }}" required />
                                    <div class="invalid-feedback">Por favor, coloque el color.</div>
                                    @error('color')
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
                                    <label for="id_tipo_vehiculo">Tipo Vehiculo</label>
                                    <select class="form-control" id="id_tipo_vehiculo" name="id_tipo_vehiculo" required>
                                        <option selected disabled value="">Seleccionar Tipo Vehiculo</option>
                                        @foreach ($tipo_vehiculos as $item)
                                            <option value="{{ $item->id }}">{{ $item->descripcion }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Seleccione el Tipo Vehiculo.</div>
                                    @error('id_tipo_vehiculo')
                                        <small class="text-danger"> {{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="id_cliente">Cliente</label>
                                    <select class="form-control" id="id_cliente" name="id_cliente" required>
                                        <option selected disabled value="">Seleccionar Cliente</option>
                                        @foreach ($clientes as $item)
                                            <option value="{{ $item->id }}">{{ $item->nombre.' '.$item->apellidos}}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Seleccione el Cliente.</div>
                                    @error('id_cliente')
                                        <small class="text-danger"> {{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div>
                                <button type="submit" class= "btn btn-success btn-sm">Guardar</button>
                                <a href="{{ route('vehiculo.index') }}" class= "btn btn-dark btn-sm">Regresar</a>
                            </div>
                        </div>
              
                </div><!--/body card-->

            </div><!--/CARD FIN-->
        </form>

        </div><!-- /.container-fluid -->
    </section><!-- /.content -->

</x-app-layout>
