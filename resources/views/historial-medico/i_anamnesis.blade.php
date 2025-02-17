<div id="accordion" class="custom-accordion">
    <div class="card mb-1 shadow-none">
        <a href="#collapseOne" class="text-dark" data-bs-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
            <div class="card-header" id="headingOne">
                <h6 class="m-0">
                    I. ANAMNESIS
                    <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                </h6>
            </div>
        </a>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="card-body">
                <div class="container-fluid justify-content-center">
                    <form class="row g-3">
                        <!-- Título -->
                        <div class="col-12">
                            <h5 class="mb-3"><b>1. Filiación</b></h5>
                        </div>

                        <!-- Nombre completo -->
                        <div class="col-12">
                            <div class="row align-items-center">
                                <label class="col-sm-1 col-form-label">Nombre:</label>
                                <div class="col-sm-11">
                                    <input id="nombres" type="text" class="form-control" value="{{$paciente->nombres}} {{ $paciente->apellido_paterno }} {{ $paciente->apellido_materno }}" readonly>
                                </div>
                            </div>
                        </div>

                        <!-- Edad, Sexo y DNI en línea -->
                        <div class="col-md-4">
                            <div class="row align-items-center">
                                <label class="col-sm-3 col-form-label">Edad:</label>
                                <div class="col-sm-9">
                                    <input id="edad" type="number" class="form-control" min="2" max="90">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row align-items-center">
                                <label class="col-sm-3 col-form-label">Sexo:</label>
                                <div class="col-sm-9">
                                    <select id="sexo" class="form-select">
                                        <option value="masculino">Masculino</option>
                                        <option value="femenino">Femenino</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row align-items-center">
                                <label class="col-sm-3 col-form-label">DNI:</label>
                                <div class="col-sm-9">
                                    <input id="dni" type="text" class="form-control" value="{{ $paciente->dni }}" disabled>
                                </div>
                            </div>
                        </div>

                        <!-- Religión -->
                        <div class="col-md-5">
                            <div class="row align-items-center">
                                <label class="col-sm-4 col-form-label">Religión:</label>
                                <div class="col-sm-8">
                                    <input type="text" id="religion" class="form-control">
                                </div>
                            </div>
                        </div>

                        <!-- Lugar de Nacimiento -->
                        <div class="col-12">
                            <div class="row align-items-center">
                                <label class="col-sm-2 col-form-label">Lugar de Nacimiento:</label>
                                <div class="col-sm-10">
                                    <input type="text" id="lugarNacimiento" class="form-control">
                                </div>
                            </div>
                        </div>

                        <!-- Teléfono, Email y Ocupación -->
                        <div class="col-md-3">
                            <div class="row align-items-center">
                                <label class="col-sm-3 col-form-label">Tel:</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="telefono">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row align-items-center">
                                <label class="col-sm-3 col-form-label">Email:</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="email">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="row align-items-center">
                                <label class="col-sm-4 col-form-label">Ocupación:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="ocupacion">
                                </div>
                            </div>
                        </div>

                        <!-- Grado Instrucción, Estado Civil y Nacionalidad -->
                        <div class="col-md-4">
                            <div class="row align-items-center">
                                <label class="col-sm-5 col-form-label">Grado Instrucción:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="grado_instruccion">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row align-items-center">
                                <label class="col-sm-4 col-form-label">Estado Civil:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="estado_civil">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row align-items-center">
                                <label class="col-sm-4 col-form-label">Nacionalidad:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nacionalidad">
                                </div>
                            </div>
                        </div>

                        <!-- Teléfono de Emergencia -->
                        <div class="col-md-6">
                            <div class="row align-items-center">
                                <label class="col-sm-6 col-form-label">En caso de emergencia, llamar al:</label>
                                <div class="col-sm-6">
                                    <input type="text" id="telefono_emergencia" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-4">
                            <h5 class="mb-3"><b>2. Motivo de Consulta</b></h5>
                            <div class="row">
                                <div class="col-12">
                                    <textarea id="motivo_consulta" class="form-control" placeholder="Escribir detalle" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
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
                        <div class="col-12 mt-4">
                            <h5 class="mb-3"><b>4. Antecedentes</b></h5>
                            <div class="form-group"><br>
                                <h6 class="mb-3">a. Personales</h6>
                                <div class="row mb-4">
                                    <div class="col-lg-6 border-3">
                                        <div class="d-flex flex-wrap">
                                            <div class="form-check w-50">
                                                <input id="hiper" name="antecedentes" class="form-check-input" type="checkbox" value="hipertension">
                                                <label class="form-check-label" for="hiper">Hipertensión</label>
                                            </div>
                                            <div class="form-check w-50">
                                                <input id="hepa" name="antecedentes" class="form-check-input" type="checkbox" value="hepatitis">
                                                <label class="form-check-label" for="hepa">Hepatitis</label>
                                            </div>
                                            <div class="form-check w-50">
                                                <input id="diab" name="antecedentes" class="form-check-input" type="checkbox" value="diabetes">
                                                <label class="form-check-label" for="diab">Diabetes</label>
                                            </div>
                                            <div class="form-check w-50">
                                                <input id="anem" name="antecedentes" class="form-check-input" type="checkbox" value="anemia">
                                                <label class="form-check-label" for="anem">Anemia</label>
                                            </div>
                                            <div class="form-check w-50">
                                                <input id="tt" name="antecedentes" class="form-check-input" type="checkbox" value="Trastornos Respiratorios">
                                                <label class="form-check-label" for="tt">Trastornos Respiratorios</label>
                                            </div>
                                            <div class="form-check w-50">
                                                <input id="epil" name="antecedentes" class="form-check-input" type="checkbox" value="Epilepsia">
                                                <label class="form-check-label" for="epil">Epilepsia</label>
                                            </div>
                                            <div class="form-check w-50">
                                                <input id="tbc" name="antecedentes" class="form-check-input" type="checkbox" value="Tuberculosis">
                                                <label class="form-check-label" for="tbc">Tuberculosis</label>
                                            </div>
                                            <div class="form-check w-50">
                                                <input id="freu" name="antecedentes" class="form-check-input" type="checkbox" value="Fiebre Reumática">
                                                <label class="form-check-label" for="freu">Fiebre Reumática</label>
                                            </div>
                                            <div class="form-check w-50">
                                                <input id="ec" name="antecedentes" class="form-check-input" type="checkbox" value="Enfermedad Cardiaca">
                                                <label class="form-check-label" for="ec">Enfermedad Cardíaca</label>
                                            </div>
                                            <div class="form-check w-50">
                                                <input id="tg" name="antecedentes" class="form-check-input" type="checkbox" value="Trastornos Gastricos">
                                                <label class="form-check-label" for="tg">Trastornos Gástricos</label>
                                            </div>
                                            <div class="form-check w-50">
                                                <input id="er" name="antecedentes" class="form-check-input" type="checkbox" value="Enfermedad Renal">
                                                <label class="form-check-label" for="er">Enfermedad Renal</label>
                                            </div>
                                            <div class="form-check w-50">
                                                <input id="th" name="antecedentes" class="form-check-input" type="checkbox" value="Trastornos Hormonales">
                                                <label class="form-check-label" for="th">Trastornos Hormonales</label>
                                            </div>
                                            <div class="form-check w-50">
                                                <input id="neu" name="antecedentes" class="form-check-input" type="checkbox" value="Neuralgia">
                                                <label class="form-check-label" for="neu">Neuralgia</label>
                                            </div>
                                            <div class="form-check w-50">
                                                <input id="aam" name="antecedentes" class="form-check-input" type="checkbox" value="Alergia a algún medicamento">
                                                <label class="form-check-label" for="aam">Alergia a algún medicamento</label>
                                            </div>
                                            <div class="form-check w-50">
                                                <input id="sida" name="antecedentes" class="form-check-input" type="checkbox" value="Infección Venérea o SIDA">
                                                <label class="form-check-label" for="sida">Infección venérea o SIDA</label>
                                            </div>
                                            <div class="form-check w-50">
                                                <input id="colest" name="antecedentes" class="form-check-input" type="checkbox" value="Colesterol">
                                                <label class="form-check-label" for="colest">Colesterol</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 border-3">
                                        <div class="d-flex flex-wrap">
                                            <div class="form-check w-50">
                                                <input id="art" name="antecedentes" class="form-check-input" type="checkbox" value="Artitris">
                                                <label class="form-check-label" for="art">Artitris</label>
                                            </div>
                                            <div class="form-check w-50">
                                                <input id="tumor" name="antecedentes" class="form-check-input" type="checkbox" value="Algún tumor">
                                                <label class="form-check-label" for="tumor">Algún tumor</label>
                                            </div>
                                            <div class="form-check w-50">
                                                <input id="piel" name="antecedentes" class="form-check-input" type="checkbox" value="Enfermedad de la piel">
                                                <label class="form-check-label" for="piel">Enfermedad de la piel</label>
                                            </div>
                                            <div class="form-check w-50">
                                                <input id="emba" name="antecedentes" class="form-check-input" type="checkbox" value="Embarazo">
                                                <label class="form-check-label" for="emba">Embarazo</label>
                                            </div>
                                            <div class="form-check w-50">
                                                <input id="ds" name="antecedentes" class="form-check-input" type="checkbox" value="Discrasias sanguíneas">
                                                <label class="form-check-label" for="ds">Discrasias sanguíneas</label>
                                            </div>
                                            <div class="form-check w-50">
                                                <input id="tp" name="antecedentes" class="form-check-input" type="checkbox" value="Trastornos psicológicos">
                                                <label class="form-check-label" for="tp">Trastornos psicológicos</label>
                                            </div>
                                            <div class="form-check w-50">
                                                <input id="fuma" name="antecedentes" class="form-check-input" type="checkbox" value="Fuma">
                                                <label class="form-check-label" for="fuma">Fuma</label>
                                            </div>
                                            <div class="form-check w-50">
                                                <input id="alco" name="antecedentes" class="form-check-input" type="checkbox" value="Alcoholismo">
                                                <label class="form-check-label" for="alco">Alcoholismo</label>
                                            </div>
                                            <div class="form-check w-50">
                                                <input id="drog" name="antecedentes" class="form-check-input" type="checkbox" value="Drogadicción">
                                                <label class="form-check-label" for="drog">Drogadicción</label>
                                            </div>
                                            <div class="form-check w-50">
                                                <input id="canc" name="antecedentes" class="form-check-input" type="checkbox" value="Cáncer">
                                                <label class="form-check-label" for="canc">Cáncer</label>
                                            </div>
                                            <div class="form-check w-50">
                                                <input id="oe" name="antecedentes" class="form-check-input" type="checkbox" value="Otra enfermedad">
                                                <label class="form-check-label" for="oe">Otra enfermedad</label>
                                            </div>
                                            <div class="form-check w-50">
                                                <input id="medic" name="antecedentes" class="form-check-input" type="checkbox" value="Toma algún medicamento">
                                                <label class="form-check-label" for="medic">Toma algún medicamento</label>
                                            </div>
                                            <div class="form-check w-50">
                                                <input id="quir" name="antecedentes" class="form-check-input" type="checkbox" value="Quirúrgicos">
                                                <label class="form-check-label" for="quir">Quirúrgicos</label>
                                            </div>
                                            <div class="form-check w-50">
                                                <input id="quimio" name="antecedentes" class="form-check-input" type="checkbox" value="Quimioterapia o Radioterapia">
                                                <label class="form-check-label" for="quimio">Quimioterapia o Radioterapia</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label>Ampliación</label><br>
                                        <input id="ampliacion" type="text" class="form-control" placeholder="Ampliación">
                                    </div>
                                </div>
                                <h6 class="mb-3">b. Familiares</h6>
                                <div class="mb-4">
                                    <textarea id="familiares" class="form-control" placeholder="Descripción" rows="3"></textarea>
                                </div>
                                <h6 class="mb-3">c. Estomatológicos</h6>
                                <div class="row">
                                    <div class="col-12">
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

                                            <div class="col-md-8">
                                                <label>¿Le sangran las encías?</label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="btn-group" role="group">
                                                    <input type="radio" class="btn-check" name="sangran_encias" id="sangran_encias_si" autocomplete="off">
                                                    <label class="btn btn-outline-info btn-sm" for="sangran_encias_si">Sí</label>
                                                    <input type="radio" class="btn-check" name="sangran_encias" id="sangran_encias_no" autocomplete="off">
                                                    <label class="btn btn-outline-info btn-sm" for="sangran_encias_no">No</label>
                                                </div>
                                            </div>

                                                <div class="col-md-8">
                                                    <label>¿Alguna vez le han colocado anestesia dental?</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="btn-group" role="group">
                                                        <input type="radio" class="btn-check" name="anestesia_dental" id="anestesia_dental_si" autocomplete="off">
                                                        <label class="btn btn-outline-info btn-sm" for="anestesia_dental_si">Sí</label>
                                                        <input type="radio" class="btn-check" name="anestesia_dental" id="anestesia_dental_no" autocomplete="off">
                                                        <label class="btn btn-outline-info btn-sm" for="anestesia_dental_no">No</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6" style="display: none;">
                                                    <input id="txt_anestesiaDental" type="text" placeholder="Cuál?" class="form-control col-lg-4">
                                                </div>

                                                <div class="col-md-8">
                                                    <label>¿Ha tenido alguna complicación después de una extracción dental?</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="btn-group" role="group">
                                                        <input type="radio" class="btn-check" name="complicacion_extraccion" id="complicacion_extraccion_si" autocomplete="off">
                                                        <label class="btn btn-outline-info btn-sm" for="complicacion_extraccion_si">Sí</label>
                                                        <input type="radio" class="btn-check" name="complicacion_extraccion" id="complicacion_extraccion_no" autocomplete="off">
                                                        <label class="btn btn-outline-info btn-sm" for="complicacion_extraccion_no">No</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6" style="display: none;">
                                                    <input id="txt_complicacion_dental" type="text" placeholder="Cuál?" class="form-control col-lg-4">
                                                </div>

                                                <div class="col-md-8">
                                                    <label>¿Le gusta masticar chicle?</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="btn-group" role="group">
                                                        <input type="radio" class="btn-check" name="masticar_chicle" id="masticar_chicle_si" autocomplete="off">
                                                        <label class="btn btn-outline-info btn-sm" for="masticar_chicle_si">Sí</label>
                                                        <input type="radio" class="btn-check" name="masticar_chicle" id="masticar_chicle_no" autocomplete="off">
                                                        <label class="btn btn-outline-info btn-sm" for="masticar_chicle_no">No</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-8">
                                                    <label>¿Rechina o aprieta los dientes?</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="btn-group" role="group">
                                                        <input type="radio" class="btn-check" name="rechinamiento_dientes" id="rechinamiento_dientes_si" autocomplete="off">
                                                        <label class="btn btn-outline-info btn-sm" for="rechinamiento_dientes_si">Sí</label>
                                                        <input type="radio" class="btn-check" name="rechinamiento_dientes" id="rechinamiento_dientes_no" autocomplete="off">
                                                        <label class="btn btn-outline-info btn-sm" for="rechinamiento_dientes_no">No</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-8">
                                                    <label>¿Se muerde labios, lengua o carrillos?</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="btn-group" role="group">
                                                        <input type="radio" class="btn-check" name="morder_labios" id="morder_labios_si" autocomplete="off">
                                                        <label class="btn btn-outline-info btn-sm" for="morder_labios_si">Sí</label>
                                                        <input type="radio" class="btn-check" name="morder_labios" id="morder_labios_no" autocomplete="off">
                                                        <label class="btn btn-outline-info btn-sm" for="morder_labios_no">No</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-8">
                                                    <label>¿Le gusta morder objetos?</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="btn-group" role="group">
                                                        <input type="radio" class="btn-check" name="morder_objetos" id="morder_objetos_si" autocomplete="off">
                                                        <label class="btn btn-outline-info btn-sm" for="morder_objetos_si">Sí</label>
                                                        <input type="radio" class="btn-check" name="morder_objetos" id="morder_objetos_no" autocomplete="off">
                                                        <label class="btn btn-outline-info btn-sm" for="morder_objetos_no">No</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-8">
                                                    <label>¿Tiene dificultad para abrir la boca?</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="btn-group" role="group">
                                                        <input type="radio" class="btn-check" name="dificultad_abrir_boca" id="dificultad_abrir_boca_si" autocomplete="off">
                                                        <label class="btn btn-outline-info btn-sm" for="dificultad_abrir_boca_si">Sí</label>
                                                        <input type="radio" class="btn-check" name="dificultad_abrir_boca" id="dificultad_abrir_boca_no" autocomplete="off">
                                                        <label class="btn btn-outline-info btn-sm" for="dificultad_abrir_boca_no">No</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-8">
                                                    <label>¿Alguna vez se le ha fracturado algún diente?</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="btn-group" role="group">
                                                        <input type="radio" class="btn-check" name="fractura_diente" id="fractura_diente_si" autocomplete="off">
                                                        <label class="btn btn-outline-info btn-sm" for="fractura_diente_si">Sí</label>
                                                        <input type="radio" class="btn-check" name="fractura_diente" id="fractura_diente_no" autocomplete="off">
                                                        <label class="btn btn-outline-info btn-sm" for="fractura_diente_no">No</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-8">
                                                    <label>¿Respira por la boca?</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="btn-group" role="group">
                                                        <input type="radio" class="btn-check" name="respira_boca" id="respira_boca_si" autocomplete="off">
                                                        <label class="btn btn-outline-info btn-sm" for="respira_boca_si">Sí</label>
                                                        <input type="radio" class="btn-check" name="respira_boca" id="respira_boca_no" autocomplete="off">
                                                        <label class="btn btn-outline-info btn-sm" for="respira_boca_no">No</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-8">
                                                    <label>¿Sufrió algún golpe en los dientes?</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="btn-group" role="group">
                                                        <input type="radio" class="btn-check" name="golpe_dientes" id="golpe_dientes_si" autocomplete="off">
                                                        <label class="btn btn-outline-info btn-sm" for="golpe_dientes_si">Sí</label>
                                                        <input type="radio" class="btn-check" name="golpe_dientes" id="golpe_dientes_no" autocomplete="off">
                                                        <label class="btn btn-outline-info btn-sm" for="golpe_dientes_no">No</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <label>¿Cuándo?</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group row">
                                                        <textarea id="cuando_golpe_dientes" class="form-control" placeholder="Escribir detalle" rows="2"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-8 mt-2 mb-2">
                                                    <label>¿Tiene dificultad para hablar?</label>
                                                </div>
                                                <div class="col-md-4 mt-2 mb-2">
                                                    <div class="btn-group" role="group">
                                                        <input type="radio" class="btn-check" name="dificultad_hablar" id="dificultad_hablar_si" autocomplete="off">
                                                        <label class="btn btn-outline-info btn-sm" for="dificultad_hablar_si">Sí</label>
                                                        <input type="radio" class="btn-check" name="dificultad_hablar" id="dificultad_hablar_no" autocomplete="off">
                                                        <label class="btn btn-outline-info btn-sm" for="dificultad_hablar_no">No</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <label>Otros</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group row">
                                                        <textarea id="cuando_dificultad_hablar" class="form-control" placeholder="Escribir detalle" rows="2"></textarea>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
