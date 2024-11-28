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

@push('styles')
    @vite(['resources/css/app.css', 'resources/sass/app.scss'])
@endpush

@push('scripts')
    @vite('resources/js/app.js')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
