<x-app-layout>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-0">
                <div class="col-sm-6 mb-0">
                    <h1>Detalle Combustibles</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
                        <li class="breadcrumb-item active">Detalle Combustibles</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form method="POST" enctype="multipart/form-data" action="" autocomplete="off"
                class="needs-validation" novalidate>
                @method('POST')
                @csrf
                <div class="card card-secondary card-outline">
                    <div class="card-body">
                        <div class="d-flex justify-content-end ">
                            <div class="mb-2">
                                <a class="btn btn-dark btn-sm" href="{{ route('detalle_combustible.create') }}"><i
                                        class="fas fa-plus"></i>&nbsp;&nbsp;Agregar</a>
                            </div>
                        </div>

                        <table id="example2" class="table table-bordered table-sm table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Almacén</th>
                                    <th>Combustible</th>
                                    <th>Cantidad</th>
                                    <th width="7px">Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($detalle_combustibles as $detalle)
                                    <tr>
                                        <td>{{ $detalle->id }}</td>
                                        <td>{{ $detalle->almacen->nombre }}</td>
                                        <td>{{ $detalle->combustible->nombre }}</td>
                                        <td>{{ $detalle->cantidad }}</td>
                                        <td class="py-1 align-middle text-center">
                                            <div class="btn-group btn-group-sm">
                                                <a href="{{ route('detalle_combustible.edit', $detalle->id) }}"
                                                    class="btn btn-default" rel="tooltip" data-placement="top"
                                                    title="Editar"><i class="fas fa-edit"></i></a>
                                                <a href="#" class="btn btn-dark" rel="tooltip" data-placement="top"
                                                    title="Eliminar"
                                                    data-href="{{ route('detalle_combustible.destroy', $detalle->id) }}"
                                                    data-toggle="modal" data-target="#modal-confirma"><i
                                                        class="fas fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>

            <!-- Modal -->
            <div class="modal fade" id="modal-confirma" data-backdrop="static">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Eliminar Registro</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>¿Desea Eliminar este registro?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancelar</button>
                            <a class="btn btn-dark btn-ok btn-sm">Confirmar</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</x-app-layout>