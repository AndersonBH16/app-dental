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
        <form id="crearCitaForm" method="POST">
            @csrf
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
                    <input type="date" class="form-control" id="fecha" name="fecha" disabled>
                </div>
                <div class="col-lg-4">
                    <label class="form-label" for="horaInicio">Hora Inicio</label>
                    <input type="time" class="form-control" id="horaInicio" name="horaInicio" required>
                </div>
                <div class="col-lg-4">
                    <label class="form-label" for="duracion">Duración</label>
                    <select id="duracion" class="form-select" aria-label="Seleccionar Duración">
                        <option value="30">30 minutos</option>
                        <option value="60" selected>1 hora</option>
                        <option value="90">1 hora y media</option>
                        <option value="120">2 horas</option>
                    </select>
                </div>
            </div>
            <div class="mt-3">
                <div class="col-lg">
                    <label class="form-label" for="paciente">Paciente</label>
                    <select id="paciente" class="pacientes-select">
                        <option></option>
                        @foreach($pacientes as $paciente)
                            <option value="{{ $paciente->id }}" data-dni="{{ $paciente->dni }}">
                                {{ $paciente->nombre.' '.$paciente->apellido_paterno.' '.$paciente->apellido_materno }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <x-slot name="footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" id="guardarBtn" form="crearCitaForm">Guardar</button>
            </x-slot>
        </form>
    </x-cita-modal>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/libs/@fullcalendar/core/main.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/libs/@fullcalendar/daygrid/main.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/libs/@fullcalendar/timegrid/main.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/libs/select2/css/select2.min.css') }}">


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

        .my-custom-event {
            background-color: transparent !important;
            border-color: transparent !important;
        }

        .fc-event {
            cursor: pointer !important;
        }
    </style>
@endpush

@push('scripts')
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar/index.global.min.js'></script>
    <script src="{{ asset('assets/libs/select2/js/select2.full.min.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            $('.pacientes-select').select2({
                dropdownParent: $('#crearCitaModal'),
                placeholder: "Seleccione un paciente",
                allowClear: true,
                width: '100%',
                dropdownPosition: 'below',
            });

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
                eventClassNames: function(event) {
                    return ['my-custom-event'];
                },
                select: function (info) {
                    const modal = new bootstrap.Modal(document.getElementById('crearCitaModal'));
                    modal.show();

                    document.getElementById('crearCitaModalLabel').textContent = "Crear Cita";
                    document.getElementById('guardarBtn').textContent = "Guardar";
                    document.getElementById('crearCitaForm').reset();
                    $('#paciente').val(null).trigger('change');

                    const selectedDate = info.start.toISOString().split('T')[0];
                    const fechaInput = document.getElementById('fecha');
                    fechaInput.value = selectedDate;
                    fechaInput.setAttribute('disabled', true);

                    document.getElementById('crearCitaForm').onsubmit = function (e) {
                        e.preventDefault();
                        const data = {
                            title       : document.getElementById('titulo').value,
                            description : document.getElementById('descripcion').value,
                            fecha       : selectedDate,
                            hora_inicio : document.getElementById('horaInicio').value,
                            duracion    : document.getElementById('duracion').value,
                            paciente_id : document.getElementById('paciente').value
                        };

                        fetch('/citas', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': csrfToken,
                            },
                            body: JSON.stringify(data),
                        })
                            .then(response => {
                                if (!response.ok) throw new Error('Error al registrar la cita');
                                return response.json();
                            })
                            .then(result => {
                                modal.hide();
                                calendar.refetchEvents();
                                alert('Cita creada exitosamente.');
                            })
                            .catch(error => {
                                console.error(error);
                                alert('Hubo un error al registrar la cita. Inténtalo de nuevo.');
                            });
                    };
                },
                eventClick: function (info) {
                    const modal = new bootstrap.Modal(document.getElementById('crearCitaModal'));
                    modal.show();

                    document.getElementById('crearCitaModalLabel').textContent = "Actualizar Cita";
                    document.getElementById('guardarBtn').textContent = "Actualizar";
                    document.getElementById('titulo').value = info.event.title;
                    document.getElementById('descripcion').value = info.event.extendedProps.description || '';
                    document.getElementById('fecha').value = info.event.startStr.split('T')[0];

                    let horaInicio = info.event.startStr.split('T')[1].split(':').slice(0, 2).join(':');
                    document.getElementById('horaInicio').value = horaInicio;

                    document.getElementById('duracion').value = info.event.extendedProps.duracion || 60;
                    $('#paciente').val(info.event.extendedProps.paciente_id).trigger('change');

                    document.getElementById('crearCitaForm').onsubmit = function (e) {
                        e.preventDefault();
                        const data = {
                            title       : document.getElementById('titulo').value,
                            description : document.getElementById('descripcion').value,
                            fecha       : document.getElementById('fecha').value,
                            hora_inicio : document.getElementById('horaInicio').value,
                            duracion    : document.getElementById('duracion').value,
                            paciente_id : document.getElementById('paciente').value
                        };

                        fetch(`/citas/${info.event.id}`, {
                            method: 'PUT',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': csrfToken,
                            },
                            body: JSON.stringify(data),
                        })
                            .then(response => response.json())
                            .then(result => {
                                modal.hide();
                                calendar.refetchEvents();
                                alert('Cita actualizada exitosamente.');
                            })
                            .catch(error => {
                                console.error(error);
                                alert('Hubo un error al actualizar la cita.');
                            });
                    };
                },
                eventContent: function(eventInfo) {
                    const { paciente } = eventInfo.event.extendedProps;

                    return {
                        html: `
                            <div class="custom-event bg-info rounded shadow-lg w-full d-flex flex-column align-items-start p-2">
                                <span class="event-time text-sm text-gray-700">
                                    <span><b>${formatTime(eventInfo.timeText)}</b> - ${eventInfo.event.title}</span>
                                </span>
                                <div class="event-extra text-sm text-gray-500">
                                    <span>Paciente: ${paciente || "N/A"}</span>
                                </div>
                            </div>
                        `
                    };

                    function formatTime(timeText) {
                        const [hours, minutes] = timeText.split(':').map(Number);
                        const date = new Date();
                        date.setHours(hours);
                        date.setMinutes(minutes);

                        const options = {
                            hour: '2-digit',
                            minute: '2-digit',
                            hour12: true
                        };

                        return date.toLocaleTimeString([], options);
                    }

                }
            });

            calendar.render();
        });
    </script>
@endpush
