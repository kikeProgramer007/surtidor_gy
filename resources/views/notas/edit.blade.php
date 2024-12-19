<x-app-layout>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-0">
                <div class="col-sm-6 mb-0">
                    <h1>Modificar Venta</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('nota.index') }}">Notas de Venta</a></li>
                        <li class="breadcrumb-item active">Modificar Venta</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form method="POST" action="{{ route('nota.update', $nota->id) }}" autocomplete="off" class="needs-validation" novalidate>
                @csrf
                @method('PUT')
                <div class="card card-secondary card-outline">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="id_vehiculo">Vehículo</label>
                                    <select class="form-control" id="id_vehiculo" name="id_vehiculo" required>
                                        <option value="" disabled>Seleccione un vehículo</option>
                                        @foreach ($vehiculos as $vehiculo)
                                            <option value="{{ $vehiculo->id }}" {{ $vehiculo->id == $nota->id_vehiculo ? 'selected' : '' }}>
                                                {{ $vehiculo->placa }} - {{ $vehiculo->marca }} ({{ $vehiculo->modelo }})
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Seleccione un vehículo.</div>
                                    @error('id_vehiculo')
                                        <div class="text-danger small">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="fecha">Fecha</label>
                                    <input class="form-control" id="fecha" name="fecha" type="datetime-local"
                                        value="{{ old('fecha', \Carbon\Carbon::parse($nota->fecha)->format('Y-m-d\TH:i')) }}" required />
                                    <div class="invalid-feedback">Introduzca la fecha de la venta.</div>
                                    @error('fecha')
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
                                    <label for="monto_pago">Monto de Pago</label>
                                    <input class="form-control" id="monto_pago" name="monto_pago" type="number"
                                        step="0.01" value="{{ old('monto_pago', $nota->monto_pago) }}"
                                        placeholder="Ingrese el monto del pago" required />
                                    <div class="invalid-feedback">Introduzca el monto del pago.</div>
                                    @error('monto_pago')
                                        <div class="text-danger small">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="id_tipo_pago">Tipo de Pago</label>
                                    <select class="form-control" id="id_tipo_pago" name="id_tipo_pago" required>
                                        <option value="" disabled>Seleccione un tipo de pago</option>
                                        @foreach ($tipos_pago as $tipo)
                                            <option value="{{ $tipo->id }}" {{ $tipo->id == $nota->id_tipo_pago ? 'selected' : '' }}>
                                                {{ $tipo->tipo }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Seleccione un tipo de pago.</div>
                                    @error('id_tipo_pago')
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
                                    <label for="id_dispensador">Dispensador</label>
                                    <select class="form-control" id="id_dispensador" name="id_dispensador" required>
                                        <option value="" disabled>Seleccione un dispensador</option>
                                        @foreach ($dispensadores as $dispensador)
                                            <option value="{{ $dispensador->id }}" {{ $dispensador->id == $nota->id_dispensador ? 'selected' : '' }}>
                                                Dispensador {{ $dispensador->id }} - Capacidad: {{ $dispensador->capacidad_actual }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Seleccione un dispensador.</div>
                                    @error('id_dispensador')
                                        <div class="text-danger small">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <div>
                                <button type="submit" class="btn btn-primary btn-sm">Actualizar</button>
                                <a href="{{ route('nota.index') }}" class="btn btn-dark btn-sm">Regresar</a>
                            </div>
                        </div>

                    </div><!--/body card-->
                </div><!--/CARD FIN-->
            </form>
        </div><!-- /.container-fluid -->
    </section><!-- /.content -->

</x-app-layout>
