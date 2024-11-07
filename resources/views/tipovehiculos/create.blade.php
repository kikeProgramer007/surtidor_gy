<x-app-layout>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-0">
                <div class="col-sm-6 mb-0">
                    <h1>Crear Tipo vehiculo</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="inicio">Tipos de vehiculos</a></li>
                        <li class="breadcrumb-item active">Crear Tipo vehiculo</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form method="POST" action="{{ route('tipo.vehiculo.store') }}" autocomplete="off"
                class="needs-validation" novalidate>
                @csrf
                <div class="card card-secondary card-outline">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="descripcion">Descripción</label>
                                    <input class="form-control" id="descripcion" name="descripcion" type="text"
                                        value="{{ old('descripcion') }}"placeholder="ingrese su descripcion " pattern=".*\S+.*"
                                        autofocus required />
                                    <div class="invalid-feedback">Introduzca la descripcion.</div>
                                    @error('descripcion')
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
                                <a href="{{ route('tipo.vehiculo.index') }}" class= "btn btn-dark btn-sm">Regresar</a>
                            </div>
                        </div>

                    </div><!--/body card-->

                </div><!--/CARD FIN-->
            </form>
        </div><!-- /.container-fluid -->
    </section><!-- /.content -->

</x-app-layout>
