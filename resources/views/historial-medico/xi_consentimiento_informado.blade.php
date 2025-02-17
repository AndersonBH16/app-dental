<div id="accordion" class="custom-accordion">
    <div class="card mb-1 shadow-none">
        <a href="#collapseConsentimientoInformado" class="text-dark collapsed" data-bs-toggle="collapse"
           aria-expanded="false"
           aria-controls="collapseConsentimientoInformado">
            <div class="card-header" id="headingConsentimientoInformado">
                <h6 class="m-0">
                    XI. CONSENTIMIENTO INFORMADO
                    <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                </h6>
            </div>
        </a>
        <div id="collapseConsentimientoInformado" class="collapse"
             aria-labelledby="headingConsentimientoInformado" data-bs-parent="#accordion">
            <div class="card-body">
                <p class="text-justify">
                    Yo <b>{{ $paciente->nombreCompleto }} {{ $paciente->apellidoPaterno }} {{ $paciente->apellidoMaterno }}</b><br>
                    identificado con DNI N° <b>{{ $paciente->dni }}</b><br>
                    Autorizo a Consultorio <b>Odontológico Quevedo</b> para que realice los
                    procedimientos consignados en el plan de tratamiento de mi historia clínica y sus
                    posibles modificaciones, adicionalmente a que actúe según su criterio médico
                    y ético en situaciones de emergencia o enfermedad no esperadas. Fui informado
                    claramente acerca de los diferentes tipos de procedimientos a realizar, de los
                    resultados esperados, de los riesgos y efectos secundarios tales como: sangrado,
                    dolor, inflamación, limitación en la apertura de la boca, enrojecimiento,
                    sensación de hormigueo, posibles pérdidas de sensibilidad, posibles reacciones
                    adversas a los medicamentos (alergias), lesiones a dientes adyacentes,
                    afectación de otras estructuras anatómicas, y otros que se puedan producir
                    resultado de la atención odontológica.
                    Declaro haber leído el contenido del presente documento y en constancia de
                    aceptación lo firmo.
                </p>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <span>______________________________</span><br>
                            <label>CD.</label><br>
                            <label>COP:</label><br>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <span>______________________________</span><br>
                            <label>Paciente.</label><br>
                            <label>DNI:</label><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
