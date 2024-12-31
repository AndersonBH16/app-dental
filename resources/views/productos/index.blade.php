@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h4 class="mb-3">Inventario</h4>
                <div class="card">
                    <div class="card-body">
                        <table id="productos-table" class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Código</th>
                                <th>Producto</th>
                                <th>Descripcion</th>
                                <th>Stock</th>
                                <th>Precio</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Serie</th>
                                <th>Imagen</th>
                                <th>Categoria</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap5.min.css">
@endpush

@push('scripts')
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#productos-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '/productos',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'codigo', name: 'codigo' },
                    { data: 'nombre', name: 'nombre' },
                    { data: 'descripcion', name: 'descripcion' },
                    { data: 'stock', name: 'stock' },
                    { data: 'precio', name: 'precio' },
                    { data: 'marca', name: 'marca' },
                    { data: 'modelo', name: 'modelo' },
                    { data: 'serie', name: 'serie' },
                    { data: 'imagen', name: 'imagen' },
                    { data: 'categoria_id', name: 'categoria_id' },
                    { data: 'estado', name: 'estado' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'action', name: 'action', orderable: false, searchable: false },
                ],
                responsive: true,
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'csv', 'pdf', 'print', 'reset', 'reload'
                ],
            });
        });
    </script>
@endpush

