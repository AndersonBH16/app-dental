@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Categorías</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Categorias</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border">
            <h5 class="card-header">Lista de Categorías</h5>
            <ul>
                <li>Acomodar las dimensiones del datatable a lo ancho</li>
                <li>Hacer aparecer los buttons de reporte</li>
                <li>Validar los estilos</li>
            </ul>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    @vite('resources/js/app.js')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
    <!-- Required datatable js -->
{{--    <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/libs/datatables.net-responsive/js/responsive.bootstrap4.min.js') }}"></script>--}}

{{--    <script src="{{ asset('assets/libs/datatables.net-autofill/js/dataTables.autoFill.min.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/libs/datatables.net-select/js/dataTables.select.min.js') }}"></script>--}}
@endpush

@push('styles')
{{--    @vite(['resources/css/app.css', 'resources/sass/app.scss'])--}}
    <!-- DataTables -->
    {{--<link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />--}}
    {{--<!-- Responsive datatable examples -->--}}
    {{--<link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />--}}
@endpush
