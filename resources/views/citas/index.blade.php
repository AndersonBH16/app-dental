@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Agenda</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Agenda</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border">
            <h5 class="card-header">Cronograma de Consultas</h5>
            <div class="card-body">
                <div id="calendar"></div>
            </div>
        </div>
    </div>

    <!-- Modal para Crear/Editar Citas -->
    <x-cita-modal id="crearCitaModal" title="Crear Cita">
        <form id="crearCitaForm">
            <div class="row">
                <div class="col-lg">
                    <label class="form-label" for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Escriba algún nombre para la cita" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg">
                    <label class="form-label" for="descripcion">Descripción</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Descripción"></textarea>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-4">
                    <label class="form-label" for="fecha">Fecha</label>
                    <input type="date" class="form-control" id="fecha" name="fecha" required>
                </div>
                <div class="col-lg-4">
                    <label class="form-label" for="horaInicio">Hora Inicio</label>
                    <input type="time" class="form-control" id="horaInicio" name="horaInicio" required>
                </div>
                <div class="col-lg-4">
                    <label class="form-label" for="horaFin">Duración</label>
                    <select class="form-select" aria-label="Seleccionar Duración">
                        <option value="30">30 minutos</option>
                        <option value="60" selected>1 hora</option>
                        <option value="90">1 hora y media</option>
                        <option value="120">2 horas</option>
                    </select>
                </div>
            </div>
            <div class="mt-3">
                <div class="col-lg">
                    <label class="form-label" for="descripcion">Paciente</label>
                    <select class="form-select" aria-label="Seleccionar Paciente">
                        @foreach($pacientes as $paciente)
                            <option value="{{ $paciente->id }}" dt-dni="{{ $paciente->dni }}">{{ $paciente->nombre.' '.$paciente->apellido_paterno. " ".$paciente->apellido_materno }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </form>

        <x-slot name="footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary" form="crearCitaForm">Guardar</button>
        </x-slot>
    </x-cita-modal>

    {{--    @include('citas.modals.crear-cita')--}}
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/libs/@fullcalendar/core/main.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/libs/@fullcalendar/daygrid/main.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/libs/@fullcalendar/timegrid/main.min.css') }}" />
    <style>
        .fc-col-header-cell-cushion{
            color: teal;
        }

        .fc-daygrid-day-number{
            color: teal;
        }

        #calendar {
            height: 680px;
        }
    </style>
@endpush

@push('scripts')
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar/index.global.min.js'></script>
{{--    <script src="{{ asset('assets/js/pages/calendar.init.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/libs/fullcalendar/index.global.min.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/libs/@fullcalendar/core/main.min.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/libs/@fullcalendar/interaction/main.min.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/libs/@fullcalendar/daygrid/main.min.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/libs/@fullcalendar/timegrid/main.min.js') }}"></script>--}}

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                locale: 'es',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                initialView: 'dayGridMonth',
                selectable: true,
                events: '/ver-citas',
                select: function (info) {
                    const modal = new bootstrap.Modal(document.getElementById('crearCitaModal'));
                    modal.show();

                    document.getElementById('fecha').value = info.startStr;

                    document.getElementById('crearCitaForm').onsubmit = function (e) {
                        e.preventDefault();
                        const data = {
                            title: document.getElementById('titulo').value,
                            description: document.getElementById('descripcion').value,
                            start: `${document.getElementById('fecha').value}T${document.getElementById('horaInicio').value}`,
                            end: `${document.getElementById('fecha').value}T${document.getElementById('horaFin').value}`,
                        };

                        fetch('/ver-citas', {
                            method: 'POST',
                            headers: { 'Content-Type': 'application/json' },
                            body: JSON.stringify(data),
                        }).then(response => response.json())
                            .then(event => {
                                calendar.addEvent(event);
                                modal.hide();
                            }).catch(err => console.error(err));
                    };
                },
                eventClick: function (info) {
                    const modal = new bootstrap.Modal(document.getElementById('crearCitaModal'));
                    modal.show();

                    document.getElementById('titulo').value = info.event.title;
                    document.getElementById('descripcion').value = info.event.extendedProps.description;
                    document.getElementById('fecha').value = info.event.startStr.split('T')[0];
                    document.getElementById('horaInicio').value = info.event.startStr.split('T')[1];
                    document.getElementById('horaFin').value = info.event.endStr.split('T')[1];
                }
            });

            calendar.render();
        });
    </script>
@endpush
