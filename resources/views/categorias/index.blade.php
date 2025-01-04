@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h4 class="mb-3">Categorías</h4>
                <div class="card">
                    <div class="card-body">
                        <table id="categorias-table" class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>Categoría</th>
                                <th>Descripción</th>
                                <th>Estado</th>
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
            $('#categorias-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '/categorias',
                columns: [
                    { data: 'nombre', },
                    { data: 'descripcion' },
                    { data: 'estado' },
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
