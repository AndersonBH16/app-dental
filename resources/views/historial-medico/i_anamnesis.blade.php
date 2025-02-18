<div id="accordion" class="custom-accordion">
    <div class="card mb-1 shadow-none">
        <!-- Encabezado de la sección de Anamnesis -->
        <a href="#collapseOne" class="text-dark" data-bs-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
            <div class="card-header" id="headingOne">
                <h6 class="m-0">
                    I. ANAMNESIS <!-- Título de la sección -->
                    <i class="mdi mdi-minus float-end accor-plus-icon"></i> <!-- Ícono de colapso/expansión -->
                </h6>
            </div>
        </a>
        <!-- Contenido colapsable de la sección de Anamnesis -->
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="card-body">
                <div class="container-fluid justify-content-center">
                    <form class="row g-3">
<!-- Título de la subsección "Filiación" -->
<div class="col-12 mb-4">
    <h5 class="font-bold text-lg">1. Filiación</h5>
</div>

<!-- Nombre completo del paciente -->
<div class="col-10 mb-4">
    <div class="row">
        <label class="col-sm-2 col-form-label">Nombre:</label>
        <div class="col-sm-10">
            <input id="nombres" type="text" class="form-control" value="{{$paciente->nombres}} {{ $paciente->apellido_paterno }} {{ $paciente->apellido_materno }}" readonly>
        </div>
    </div>
</div>

<!-- Campos para Edad, Sexo y DNI -->
<div class="row mb-4">
    <div class="col-md-4">
        <div class="row align-items-center">
            <label class="col-sm-4 col-form-label">Edad:</label>
            <div class="col-sm-8">
                <input id="edad" type="number" class="form-control" min="2" max="90">
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row align-items-center">
            <label class="col-sm-4 col-form-label">Sexo:</label>
            <div class="col-sm-8">
                <select id="sexo" class="form-select">
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Femenino</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row align-items-center">
            <label class="col-sm-4 col-form-label">DNI:</label>
            <div class="col-sm-8">
                <input id="dni" type="text" class="form-control" value="{{ $paciente->dni }}" disabled>
            </div>
        </div>
    </div>
</div>

<!-- Email y Teléfono -->
<div class="row mb-4">
    <div class="col-md-6">
        <div class="row align-items-center">
            <label class="col-sm-4 col-form-label">Email:</label>
            <div class="col-sm-8">
                <input type="email" class="form-control" id="email">
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row align-items-center">
            <label class="col-sm-4 col-form-label">Teléfono:</label>
            <div class="col-sm-8">
                <input type="number" class="form-control" id="telefono">
            </div>
        </div>
    </div>
</div>

<!-- Ocupación y Grado de Instrucción -->
<div class="row mb-4">
    <div class="col-md-6">
        <div class="row align-items-center">
            <label class="col-sm-4 col-form-label">Ocupación:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="ocupacion">
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row align-items-center">
            <label class="col-sm-4 col-form-label">Grado Instrucción:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="grado_instruccion">
            </div>
        </div>
    </div>
</div>

<!-- Religión, Lugar de Nacimiento y Estado Civil -->
<div class="row mb-4">
    <div class="col-md-4">
        <div class="row align-items-center">
            <label class="col-sm-4 col-form-label">Religión:</label>
            <div class="col-sm-8">
                <input type="text" id="religion" class="form-control">
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row align-items-center">
            <label class="col-sm-4 col-form-label">Lugar de Nacimiento:</label>
            <div class="col-sm-8">
                <input type="text" id="lugarNacimiento" class="form-control">
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row align-items-center">
            <label class="col-sm-4 col-form-label">Estado Civil:</label>
            <div class="col-sm-8">
                <select id="estado_civil" class="form-select">
                    <option value="soltero">Soltero</option>
                    <option value="casado">Casado</option>
                </select>
            </div>
        </div>
    </div>
</div>

<!-- Nacionalidad y Número de emergencia -->
<div class="row mb-4">
    <div class="col-md-6">
        <div class="row align-items-center">
            <label class="col-sm-4 col-form-label">Nacionalidad:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="nacionalidad">
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row align-items-center">
            <label class="col-sm-6 col-form-label">En caso de emergencia, llamar al:</label>
            <div class="col-sm-6">
                <input type="text" id="telefono_emergencia" class="form-control">
            </div>
        </div>
    </div>
</div>



                        <!-- Sección para el motivo de consulta -->
                        <div class="col-12 mt-4">
                            <h5 class="mb-3"><b>2. Motivo de Consulta</b></h5>
                            <div class="row">
                                <div class="col-12">
                                    <textarea id="motivo_consulta" class="form-control" placeholder="Escribir detalle" rows="5"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Sección para la enfermedad actual -->
                        <div class="col-12 mt-4">
                            <h5 class="mb-3"><b>3. Enfermedad Actual</b></h5>
                            <div class="mb-3">
                                <label class="form-label">Tiempo de enfermedad:</label>
                                <textarea id="tiempo_enfermedad" class="form-control" placeholder="Escribir detalle" rows="5"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Signos y síntomas principales:</label>
                                <textarea id="signos_sintomas_princip" class="form-control" placeholder="Escribir detalle" rows="5"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Relato de la enfermedad:</label>
                                <textarea id="relato_enfermedad" class="form-control" placeholder="Escribir detalle" rows="5"></textarea>
                            </div>
                        </div>

                        <!-- Sección para los antecedentes del paciente -->
                        <div class="col-12 mt-4">
                            <h5 class="mb-3"><b>4. Antecedentes</b></h5>
                            <div class="form-group"><br>
                                <!-- Subsección para antecedentes personales -->
                                <h6 class="mb-3">a. Personales</h6>
                                <div class="row mb-4">
                                    <div class="col-lg-6 border-3">
                                        <div class="d-flex flex-wrap">
                                            <!-- Checkboxes para antecedentes personales -->
                                            <div class="form-check w-50">
                                                <input id="hiper" name="antecedentes" class="form-check-input" type="checkbox" value="hipertension">
                                                <label class="form-check-label" for="hiper">Hipertensión</label>
                                            </div>
                                            <!-- Más checkboxes para otros antecedentes personales -->
                                            <!-- ... -->
                                        </div>
                                    </div>
                                    <div class="col-lg-6 border-3">
                                        <div class="d-flex flex-wrap">
                                            <!-- Más checkboxes para antecedentes personales -->
                                            <!-- ... -->
                                        </div>
                                    </div>
                                    <!-- Campo para ampliar información sobre antecedentes personales -->
                                    <div class="form-group mt-3">
                                        <label>Ampliación</label><br>
                                        <input id="ampliacion" type="text" class="form-control" placeholder="Ampliación">
                                    </div>
                                </div>

                                <!-- Subsección para antecedentes familiares -->
                                <h6 class="mb-3">b. Familiares</h6>
                                <div class="mb-4">
                                    <textarea id="familiares" class="form-control" placeholder="Descripción" rows="3"></textarea>
                                </div>

                                <!-- Subsección para antecedentes estomatológicos -->
                                <h6 class="mb-3">c. Estomatológicos</h6>
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Preguntas sobre salud bucal -->
                                        <div class="mb-3 row align-items-center">
                                            <div class="col-md-8">
                                                <label>¿Controla su salud bucal con visitas periódicas al dentista?</label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="btn-group" role="group">
                                                    <input type="radio" class="btn-check" name="salud_bucal" id="salud_bucal_si" autocomplete="off">
                                                    <label class="btn btn-outline-info btn-sm" for="salud_bucal_si">Sí</label>
                                                    <input type="radio" class="btn-check" name="salud_bucal" id="salud_bucal_no" autocomplete="off">
                                                    <label class="btn btn-outline-info btn-sm" for="salud_bucal_no">No</label>
                                                </div>
                                            </div>
                                            <!-- Más preguntas sobre salud bucal -->
                                            <!-- ... -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Botón para grabar la información -->
                        <hr>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-info w-lg waves-effect waves-light">
                                <i class="fa fa-save"></i>&nbsp;&nbsp;Grabar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
