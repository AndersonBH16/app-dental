@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Odontograma</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Paciente</li>
                            <li class="breadcrumb-item active">Odontograma</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border">
            <h4 class="d-inline">Odontograma {{ $type == \App\Models\Odontograma::TYPE_INITIAL ? "Inicial" : "Final" }}: {{ $paciente->dni }} - {{ $paciente->fullname() }}</h4>
            <div class="">
                <iframe width="100%" height="860" src="{{ url('/odontograma') }}?dni={{ $paciente->dni }}&type={{ $type }}"></iframe>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush

@push('styles')

@endpush


