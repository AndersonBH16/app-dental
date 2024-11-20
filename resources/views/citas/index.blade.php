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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Upcube</a></li>
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
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/libs/@fullcalendar/core/main.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/libs/@fullcalendar/daygrid/main.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/libs/@fullcalendar/timegrid/main.min.css') }}" />
@endpush

@push('scripts')
    <script src="{{ asset('assets/libs/@fullcalendar/core/main.min.js') }}"></script>
    <script src="{{ asset('assets/libs/@fullcalendar/interaction/main.min.js') }}"></script>
    <script src="{{ asset('assets/libs/@fullcalendar/daygrid/main.min.js') }}"></script>
    <script src="{{ asset('assets/libs/@fullcalendar/timegrid/main.min.js') }}"></script>

    <script>

        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: ['interaction', 'dayGrid', 'timeGrid'],
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                initialView: 'dayGridMonth',
                editable: true, // Permitir mover eventos
                selectable: true, // Permitir seleccionar fechas
                events: 'ver-citas', // Endpoint para cargar eventos
                select: function (info) {
                    // Crear un nuevo evento al seleccionar un rango
                    let title = prompt('Ingrese el título del evento:');
                    if (title) {
                        fetch('/ver-citas', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                title: title,
                                start: info.startStr,
                                end: info.endStr
                            }),
                        })
                            .then(response => response.json())
                            .then(event => {
                                calendar.addEvent(event);
                            });
                    }
                },
                eventClick: function (info) {
                    // Mostrar información del evento al hacer clic
                    alert('Evento: ' + info.event.title);
                }
            });

            calendar.render();
        });
    </script>
@endpush
