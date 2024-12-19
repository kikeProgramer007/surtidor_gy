<x-app-layout>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-0">
                <div class="col-sm-6 mb-0">
                    <h1>Detalle del Combustible de Almacén</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('almacen.index') }}">Almacenes</a></li>
                        <li class="breadcrumb-item active">Detalle del Almacén</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-secondary card-outline">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input class="form-control" id="nombre" name="nombre" type="text"
                                    value="{{ $almacen->nombre }}" disabled />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="capacidad_total">Capacidad Total</label>
                                <input class="form-control" id="capacidad_total" name="capacidad_total" type="text"
                                    value="{{ $almacen->capacidad_total }}" disabled />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="capacidad_actual">Capacidad Actual</label>
                                <input class="form-control" id="capacidad_actual" name="capacidad_actual" type="text"
                                    value="{{ $almacen->capacidad_actual }}" disabled />
                            </div>
                        </div>
                    </div>

                    <h5 class="mt-4">Combustibles en este almacén</h5>
                    <table class="table table-bordered table-hover mt-3">
                        <thead>
                            <tr>
                                <th>Combustible</th>
                                <th>Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($detalle_combustibles as $detalle)
                                <tr>
                                    <td>{{ $detalle->combustible->nombre }}</td>
                                    <td>{{ $detalle->cantidad }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-end mt-3">
                        <a href="{{ route('almacen.index') }}" class="btn btn-secondary btn-sm">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
