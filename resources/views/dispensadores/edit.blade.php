<x-app-layout>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-0">
                <div class="col-sm-6 mb-0">
                    <h1>Editar Dispensador</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('dispensador.index') }}">Dispensadores</a></li>
                        <li class="breadcrumb-item active">Editar Dispensador</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form method="POST" action="{{ route('dispensador.update', $dispensador->id) }}" autocomplete="off"
                class="needs-validation" novalidate>
                @csrf
                @method('PUT')
                <div class="card card-secondary card-outline">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="numero_dispensador">Número de Dispensador</label>
                                    <input class="form-control" id="numero_dispensador" name="numero_dispensador"
                                        type="number" value="{{ $dispensador->numero_dispensador }}"
                                        placeholder="Ingrese el número del dispensador" autofocus required />
                                    <div class="invalid-feedback">Introduzca el número de dispensador.</div>
                                    @error('numero_dispensador')
                                        <div class="alert alert-warning">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="id_almacen">Almacén</label>
                                    <select class="form-control" id="id_almacen" name="id_almacen" required>
                                        <option value="" disabled>Seleccione un almacén</option>
                                        @foreach ($almacenes as $almacen)
                                            <option value="{{ $almacen->id }}"
                                                {{ $dispensador->id_almacen == $almacen->id ? 'selected' : '' }}>
                                                {{ $almacen->nombre }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Seleccione un almacén.</div>
                                    @error('id_almacen')
                                        <div class="alert alert-warning">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="id_combustible">Combustible</label>
                                    <select class="form-control" id="id_combustible" name="id_combustible" required>
                                        <option value="" disabled>Seleccione un combustible</option>
                                        @foreach ($combustibles as $combustible)
                                            <option value="{{ $combustible->id }}"
                                                {{ $dispensador->id_combustible == $combustible->id ? 'selected' : '' }}>
                                                {{ $combustible->nombre }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Seleccione un combustible.</div>
                                    @error('id_combustible')
                                        <div class="alert alert-warning">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <div>
                                <button type="submit" class="btn btn-success btn-sm">Actualizar</button>
                                <a href="{{ route('dispensador.index') }}" class="btn btn-secondary btn-sm">Regresar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</x-app-layout>
