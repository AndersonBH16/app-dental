<!-- Inicio del Accordion -->
<div id="accordion" class="custom-accordion">
    <!-- Inicio de tarjeta del Accordion -->
    <div class="card mb-1 shadow-none">
        <!-- Header del Accordion -->
        <a href="#collapseTwo" class="text-dark collapsed" data-bs-toggle="collapse"
           aria-expanded="false"
           aria-controls="collapseTwo">
            <div class="card-header" id="headingTwo">
                <h6 class="m-0">
                    II. EXAMEN CLÍNICO
                    <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                </h6>
            </div>
        </a>
        <!-- Fin Header del Accordion -->

        <!-- Inicio contenido colapsable del Accordion -->
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
             data-bs-parent="#collapseTwo">
            <div class="card-body">
                <div class="container-fluid justify-content-center">
                    <form>
                        <!-- Inicio Sección 1: General -->
                        <h5 class="mb-3"><b>1. General</b></h5>
                        <div class="form-group">
                            <!-- Primera fila: Talla y Peso -->
                            <div class="row">
                                <!-- Campo: Talla -->
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Talla:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input id="ec_talla" class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>
                                <!-- Campo: Peso -->
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Peso:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input id="ec_peso" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Segunda fila: T° y PA -->
                            <div class="row mt-3">
                                <!-- Campo: T° -->
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">T°:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input id="ec_t" class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>
                                <!-- Campo: PA -->
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">PA:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input id="ec_pa" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Tercera fila: Pulso y Frecuencia Respiratoria -->
                            <div class="row mt-3">
                                <!-- Campo: Pulso -->
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Pulso:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input id="ec_pulso" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!-- Campo: Frecuencia Respiratoria -->
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <!-- Se recomienda, si el texto es muy largo, considerar abreviarlo o ajustar el tamaño -->
                                            <label class="col-form-label">Frecuencia Respiratoria:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input id="ec_fr" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fin Sección 1: General -->

                        <!-- Inicio Sección 2: Estomatológico -->
                        <h5 class="mb-3"><b>2. Estomatológico</b></h5>                    
                        <div class="form-group">
                            <!-- Sub-sección A: Extraoral -->
                            <div class="col-lg">
                            <h6 class="mb-3"><b>A. Extraoral</b></h6>                                    
                            </div>

                           <!-- Sub-sección 1: Cráneo -->
                            <div class="row">
                                <div class="col-12">
                                    <p class="fw-bold fst-italic"><u>1. Cráneo:</u></p>
                                </div>
                                <div class="col-12 row">
                                    <div class="form-check col-12 col-sm-6 col-md-4">
                                        <input class="form-check-input" type="checkbox" id="braquicefalo">
                                        <label class="form-check-label" for="braquicefalo">Braquicéfalo</label>
                                    </div>
                                    <div class="form-check col-12 col-sm-6 col-md-4">
                                        <input class="form-check-input" type="checkbox" id="normocefalo">
                                        <label class="form-check-label" for="normocefalo">Normocéfalo</label>
                                    </div>
                                    <div class="form-check col-12 col-sm-6 col-md-4">
                                        <input class="form-check-input" type="checkbox" id="doliocefalo">
                                        <label class="form-check-label" for="doliocefalo">Doliocéfalo</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Fin Sub-sección 1: Cráneo -->

                            <!-- Inicio Sub-sección 2: Cara -->
                            <div class="col-lg mt-3">
                                <p class="fw-bold fst-italic"><u>2. Cara:</u></p>
                                <div class="col-lg">
                                    <!-- Sub-sub-sección: Forma -->
                                    <div class="mt-2">
                                        <p><strong>Forma:</strong></p>
                                        <div class="row">
                                            <div class="form-check col-12 col-sm-6 col-md-4 col-lg-3">
                                                <input class="form-check-input" type="checkbox" id="ovalado">
                                                <label class="form-check-label" for="ovalado">Ovalado</label>
                                            </div>
                                            <div class="form-check col-12 col-sm-6 col-md-4 col-lg-3">
                                                <input class="form-check-input" type="checkbox" id="redondo">
                                                <label class="form-check-label" for="redondo">Redondo</label>
                                            </div>
                                            <div class="form-check col-12 col-sm-6 col-md-4 col-lg-3">
                                                <input class="form-check-input" type="checkbox" id="obolongo">
                                                <label class="form-check-label" for="obolongo">Alargado u Obolongo</label>
                                            </div>
                                            <div class="form-check col-12 col-sm-6 col-md-4 col-lg-3">
                                                <input class="form-check-input" type="checkbox" id="corazon">
                                                <label class="form-check-label" for="corazon">Triángulo invertido o corazón</label>
                                            </div>
                                            <div class="form-check col-12 col-sm-6 col-md-4 col-lg-3">
                                                <input class="form-check-input" type="checkbox" id="cuadrado">
                                                <label class="form-check-label" for="cuadrado">Cuadrado</label>
                                            </div>
                                            <div class="form-check col-12 col-sm-6 col-md-4 col-lg-3">
                                                <input class="form-check-input" type="checkbox" id="rectangular">
                                                <label class="form-check-label" for="rectangular">Rectangular</label>
                                            </div>
                                            <div class="form-check col-12 col-sm-6 col-md-4 col-lg-3">
                                                <input class="form-check-input" type="checkbox" id="pera">
                                                <label class="form-check-label" for="pera">Triángulo o pera</label>
                                            </div>
                                            <div class="form-check col-12 col-sm-6 col-md-4 col-lg-3">
                                                <input class="form-check-input" type="checkbox" id="diamante">
                                                <label class="form-check-label" for="diamante">Diamante</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fin Sub-sub-sección: Forma -->


                                    <!-- Sub-sub-sección: Tamaño -->
                                    <div class="mt-2">
                                        <p><strong>Tamaño:</strong></p>
                                        <div class="row">
                                            <div class="form-check col-12 col-sm-6 col-md-4">
                                                <input class="form-check-input" type="checkbox" id="corta">
                                                <label class="form-check-label" for="corta">Corta</label>
                                            </div>
                                            <div class="form-check col-12 col-sm-6 col-md-4">
                                                <input class="form-check-input" type="checkbox" id="intermedia">
                                                <label class="form-check-label" for="intermedia">Intermedia</label>
                                            </div>
                                            <div class="form-check col-12 col-sm-6 col-md-4">
                                                <input class="form-check-input" type="checkbox" id="alargada">
                                                <label class="form-check-label" for="alargada">Alargada</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fin Sub-sub-sección: Tamaño -->


                                    <!-- Sub-sub-sección: Perfil -->
                                    <div class="mt-2">
                                        <p><strong>Perfil:</strong></p>
                                        <div class="row">
                                            <div class="form-check col-12 col-sm-6 col-md-4">
                                                <input class="form-check-input" type="checkbox" id="convexo">
                                                <label class="form-check-label" for="convexo">Convexo</label>
                                            </div>
                                            <div class="form-check col-12 col-sm-6 col-md-4">
                                                <input class="form-check-input" type="checkbox" id="recto">
                                                <label class="form-check-label" for="recto">Recto</label>
                                            </div>
                                            <div class="form-check col-12 col-sm-6 col-md-4">
                                                <input class="form-check-input" type="checkbox" id="concavo">
                                                <label class="form-check-label" for="concavo">Cóncavo</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fin Sub-sub-sección: Perfil -->

                                    <!-- Sub-sub-sección: Asimetría -->
                                    <div class="mt-2">
                                        <p><strong>Asimetría:</strong></p>
                                        <div class="row">
                                            <div class="form-check col-12 col-sm-6">
                                                <input class="form-check-input" type="checkbox" id="asimetria-si">
                                                <label class="form-check-label" for="asimetria-si">Sí</label>
                                            </div>
                                            <div class="form-check col-12 col-sm-6">
                                                <input class="form-check-input" type="checkbox" id="asimetria-no">
                                                <label class="form-check-label" for="asimetria-no">No</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fin Sub-sub-sección: Asimetría -->

                                </div>
                                <br>
                                <!-- Fin Sub-sección 2: Cara -->

                                <!-- Inicio Sub-sección 3: ATM -->
                                <p class="fw-bold fst-italic"><u>3. ATM:</u></p>
                                <div class="form-group">
                                    <div class="row">
                                        <!-- Campo: Movilidad -->
                                        <div class="col-12 col-md-6 mb-3">
                                            <label class="form-check-label">Movilidad:</label>
                                            <input id="movilidad" type="text" class="form-control">
                                        </div>
                                        <!-- Campo: Sonidos -->
                                        <div class="col-12 col-md-6 mb-3">
                                            <label class="form-check-label">Sonidos:</label>
                                            <input id="sonidos" type="text" class="form-control">
                                        </div>
                                        <!-- Campo: Dolor -->
                                        <div class="col-12 col-md-6 mb-3">
                                            <label class="form-check-label">Dolor:</label>
                                            <input id="dolor" type="text" class="form-control">
                                        </div>
                                        <!-- Campo: Limitación de apertura -->
                                        <div class="col-12 col-md-6 mb-3">
                                            <label class="form-check-label">Limitación de apertura:</label>
                                            <input id="limitacion_apertura" type="text" class="form-control">
                                        </div>
                                        <!-- Campo: Desviación -->
                                        <div class="col-12 col-md-6 mb-3">
                                            <label class="form-check-label">Desviación:</label>
                                            <input id="desviacion" type="text" class="form-control">
                                        </div>
                                        <!-- Campo: Músculos de masticación -->
                                        <div class="col-12 col-md-6 mb-3">
                                            <label class="form-check-label">Músculos de masticación:</label>
                                            <input id="musculos_masticacion" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!-- Fin Sub-sección 3: ATM -->



                                <!-- Inicio Sub-sección 4: Cuello -->
                                <br>
                                <p class="fw-bold fst-italic"><u>4. Cuello:</u></p>
                                <div class="form-group">
                                    <!-- Campo: Tamaño (checkbox Sí/No) -->
                                    <div class="col-lg row">
                                        <div class="col-md-1">
                                            <label class="form-check-label">
                                                Tamaño
                                            </label>
                                        </div>
                                        <div class="col-md-4 row">
                                            <div class="form-check ml-3">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                <label class="form-check-label" for="flexCheckChecked">Sí</label>
                                            </div>
                                            <div class="form-check ml-3">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                <label class="form-check-label" for="flexCheckChecked">No</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Campos: Músculos y Ganglios Linfáticos -->
                                    <div class="row col-lg">
                                        <!-- Campo: Músculos -->
                                        <div class="col-6 row">
                                            <div class="col-2">
                                                <label class="form-check-label">Músculos</label>
                                            </div>
                                            <div class="col-md-10">
                                                <input id="ii_ec_cuello_musculos" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <!-- Campo: Ganglios Linfáticos -->
                                        <div class="col-6 row">
                                            <div class="col-2">
                                                <label class="form-check-label">Ganglios Linfáticos</label>
                                            </div>
                                            <div class="col-md-10">
                                                <input id="ii_ec_cuello_ganglios" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fin Sub-sección 4: Cuello -->
                            </div>

                            <!-- Inicio Sección B: Intraoral -->
                            <div class="form-group">
                            <h6 class="mb-3"><b>B. Intraoral</b></h6> 
                                <div class="form-group">
                                    <!-- Sub-sección 1: Tejidos blancos -->
                                    <div class="col-lg">
                                        <label>1. Tejidos blancos</label>
                                        <div class="col-lg row">
                                            <!-- Tabla de Tejidos blancos (lado izquierdo) -->
                                            <div class="col-lg-6">
                                                <table class="table table-hover table-bordered">
                                                    <thead style="background-color: #D5AFC7">
                                                    <tr>
                                                        <th scope="col">ESTRCUTURA</th>
                                                        <th scope="col">NORMAL</th>
                                                        <th scope="col">ANORMAL</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">Labio superior</th>
                                                        <td><input class="form-control"></td>
                                                        <td><input class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Labio Inferior</th>
                                                        <td><input class="form-control"></td>
                                                        <td><input class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Comisura</th>
                                                        <td><input class="form-control"></td>
                                                        <td><input class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Mucosa Labial</th>
                                                        <td><input class="form-control"></td>
                                                        <td><input class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Mucosa yugal</th>
                                                        <td><input class="form-control"></td>
                                                        <td><input class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">S. vestibular</th>
                                                        <td><input class="form-control"></td>
                                                        <td><input class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Paladar duro</th>
                                                        <td><input class="form-control"></td>
                                                        <td><input class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Paladar blando</th>
                                                        <td><input class="form-control"></td>
                                                        <td><input class="form-control"></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- Tabla de Tejidos blancos (lado derecho) -->
                                            <div class="col-lg-6">
                                                <table class="table table-hover table-bordered">
                                                    <thead style="background-color: #D5AFC7">
                                                    <tr>
                                                        <th scope="col">ESTRCUTURA</th>
                                                        <th scope="col">NORMAL</th>
                                                        <th scope="col">ANORMAL</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">Piso de boca</th>
                                                        <td><input class="form-control"></td>
                                                        <td><input class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Labio Inferior</th>
                                                        <td><input class="form-control"></td>
                                                        <td><input class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Dorso Lengua</th>
                                                        <td><input class="form-control"></td>
                                                        <td><input class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Vientre lengua</th>
                                                        <td><input class="form-control"></td>
                                                        <td><input class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Parótidas</th>
                                                        <td><input class="form-control"></td>
                                                        <td><input class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">G. sublinguales</th>
                                                        <td><input class="form-control"></td>
                                                        <td><input class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">G. submaxilares</th>
                                                        <td><input class="form-control"></td>
                                                        <td><input class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Orofaringe</th>
                                                        <td><input class="form-control"></td>
                                                        <td><input class="form-control"></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fin Sub-sección 1: Tejidos blancos -->

                                    <!-- Inicio Sub-sección 2: Tejidos Mineralizados -->
                                    <div class="col-lg">
                                        <label>2. Tejidos Mineralizados</label><br>
                                        <!-- a. Índice de Higiene Oral Simplificada -->
                                        <label>a. Índice de Higiene Oral Simplificada</label>
                                        <div class="col-lg">
                                            <div class="table-responsive" style="overflow-x: auto; white-space: nowrap;">
                                                <table class="table table-hover table-bordered text-center">
                                                    <thead style="background-color: #D5AFC7">
                                                    <tr>
                                                        <th colspan="3">Piezas Dentales</th>
                                                        <th>PLACA BACTERIANA 0-1-2-3</th>
                                                        <th>CÁLCULO 0-1-2-3</th>
                                                        <th>GINGIVITIS 0-1</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1.6</td><td>1.7</td><td>5.5</td>
                                                        <td><select class="form-select form-select-sm" aria-label=".form-select-sm">
                                                                                                <option selected>Elegir</option>
                                                                                                <option value="0">0</option>
                                                                                                <option value="1">1</option>
                                                                                                <option value="2">2</option>
                                                                                                <option value="3">3</option>
                                                                                            </select></td>
                                                        <td><select class="form-select form-select-sm" aria-label=".form-select-sm">
                                                                                                <option selected>Elegir</option>
                                                                                                <option value="0">0</option>
                                                                                                <option value="1">1</option>
                                                                                                <option value="2">2</option>
                                                                                                <option value="3">3</option>
                                                                                            </select></td>
                                                        <td><select class="form-select form-select-sm" aria-label=".form-select-sm">
                                                                                                <option selected>Elegir</option>
                                                                                                <option value="0">0</option>
                                                                                                <option value="1">1</option>
                                                                                            </select></td>
                                                    </tr>
                                                    <tr>
                                                        <td>1.1</td><td>2.1</td><td>5.1</td>
                                                        <td><select class="form-select form-select-sm" aria-label=".form-select-sm">
                                                                                                <option selected>Elegir</option>
                                                                                                <option value="0">0</option>
                                                                                                <option value="1">1</option>
                                                                                                <option value="2">2</option>
                                                                                                <option value="3">3</option>
                                                                                            </select></td>
                                                        <td><select class="form-select form-select-sm" aria-label=".form-select-sm">
                                                                                                <option selected>Elegir</option>
                                                                                                <option value="0">0</option>
                                                                                                <option value="1">1</option>
                                                                                                <option value="2">2</option>
                                                                                                <option value="3">3</option>
                                                                                            </select></td>
                                                        <td><select class="form-select form-select-sm" aria-label=".form-select-sm">
                                                                                                <option selected>Elegir</option>
                                                                                                <option value="0">0</option>
                                                                                                <option value="1">1</option>
                                                                                            </select></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2.6</td><td>2.7</td><td>6.5</td>
                                                        <td><select class="form-select form-select-sm" aria-label=".form-select-sm">
                                                                                                <option selected>Elegir</option>
                                                                                                <option value="0">0</option>
                                                                                                <option value="1">1</option>
                                                                                                <option value="2">2</option>
                                                                                                <option value="3">3</option>
                                                                                            </select></td>
                                                        <td><select class="form-select form-select-sm" aria-label=".form-select-sm">
                                                                                                <option selected>Elegir</option>
                                                                                                <option value="0">0</option>
                                                                                                <option value="1">1</option>
                                                                                                <option value="2">2</option>
                                                                                                <option value="3">3</option>
                                                                                            </select></td>
                                                        <td><select class="form-select form-select-sm" aria-label=".form-select-sm">
                                                                                                <option selected>Elegir</option>
                                                                                                <option value="0">0</option>
                                                                                                <option value="1">1</option>
                                                                                            </select></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3.6</td><td>3.7</td><td>7.5</td>
                                                        <td><select class="form-select form-select-sm" aria-label=".form-select-sm">
                                                                                                <option selected>Elegir</option>
                                                                                                <option value="0">0</option>
                                                                                                <option value="1">1</option>
                                                                                                <option value="2">2</option>
                                                                                                <option value="3">3</option>
                                                                                            </select></td>
                                                        <td><select class="form-select form-select-sm" aria-label=".form-select-sm">
                                                                                                <option selected>Elegir</option>
                                                                                                <option value="0">0</option>
                                                                                                <option value="1">1</option>
                                                                                                <option value="2">2</option>
                                                                                                <option value="3">3</option>
                                                                                            </select></td>
                                                        <td><select class="form-select form-select-sm" aria-label=".form-select-sm">
                                                                                                <option selected>Elegir</option>
                                                                                                <option value="0">0</option>
                                                                                                <option value="1">1</option>
                                                                                            </select></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3.1</td><td>4.1</td><td>7.1</td>
                                                        <td><select class="form-select form-select-sm" aria-label=".form-select-sm">
                                                                                                <option selected>Elegir</option>
                                                                                                <option value="0">0</option>
                                                                                                <option value="1">1</option>
                                                                                                <option value="2">2</option>
                                                                                                <option value="3">3</option>
                                                                                            </select></td>
                                                        <td><select class="form-select form-select-sm" aria-label=".form-select-sm">
                                                                                                <option selected>Elegir</option>
                                                                                                <option value="0">0</option>
                                                                                                <option value="1">1</option>
                                                                                                <option value="2">2</option>
                                                                                                <option value="3">3</option>
                                                                                            </select></td>
                                                        <td><select class="form-select form-select-sm" aria-label=".form-select-sm">
                                                                                                <option selected>Elegir</option>
                                                                                                <option value="0">0</option>
                                                                                                <option value="1">1</option>
                                                                                            </select></td>
                                                    </tr>
                                                    <tr>
                                                        <td>4.6</td><td>4.7</td><td>8.5</td>
                                                        <td><select class="form-select form-select-sm" aria-label=".form-select-sm">
                                                                                                <option selected>Elegir</option>
                                                                                                <option value="0">0</option>
                                                                                                <option value="1">1</option>
                                                                                                <option value="2">2</option>
                                                                                                <option value="3">3</option>
                                                                                            </select></td>
                                                        <td><select class="form-select form-select-sm" aria-label=".form-select-sm">
                                                                                                <option selected>Elegir</option>
                                                                                                <option value="0">0</option>
                                                                                                <option value="1">1</option>
                                                                                                <option value="2">2</option>
                                                                                                <option value="3">3</option>
                                                                                            </select></td>
                                                        <td><select class="form-select form-select-sm" aria-label=".form-select-sm">
                                                                                                <option selected>Elegir</option>
                                                                                                <option value="0">0</option>
                                                                                                <option value="1">1</option>
                                                                                            </select></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- Fin de a. Índice de Higiene Oral Simplificada -->

    <!-- Inicio Sub-sección b: Índice de desgaste dental por Smith y Knight -->
    <div class="col-lg">
        <table class="table table-hover table-bordered table-sm">
            <thead style="background-color: #F0D4E6">
            <tr class="text-center">
                <th>PLACA BACTERIANA</th>
                <th>CÁLCULO</th>
                <th>GINGIVITIS</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>0 = Ausencia</td><td>0 = Ausencia</td><td>0 = Ausencia de sangrado</td></tr>
            <tr><td>1 = Placa a nivel del tercio gingival</td><td>1 = Cálculo supragingival</td><td>1 = Presencia de sangrado</td></tr>
            <tr><td>2 = Placa hasta el tercio medio</td><td>2 = Cálculo subgingival</td><td></td></tr>
            <tr><td>3 = Placa en toda la superficie del diente</td><td>3 = Cálculo subgingival</td><td></td></tr>
            </tbody>
        </table>
    </div>
    <!-- Fin Sub-sección b: Índice de desgaste dental por Smith y Knight -->

    <!-- Inicio de imágenes de apoyo -->
    <br>
    <div class="col-lg row">
        <div class="col-lg-6">
            <img src="/dq-img/formula_calculo_indice.jpeg" class="border border-dark">
        </div>
        <div class="col-lg-6">
            <img src="/dq-img/clasificacion_puntuacion.jpeg" class="border border-dark">
        </div>
    </div>
    <br>
    <!-- Fin de imágenes de apoyo -->

    <!-- Campo: Dientes afectados -->
    <label>b. Índice de desgaste dental por Smith y Knight</label>
    <div class="col-lg-6">
        <img src="/dq-img/ii_2_b_dientes.jpeg">
    </div>
    <br>
    <div class="col-lg">
        <label>Dientes afectados:</label>
        <textarea id="dientes_afectados" class="form-control" rows="2"></textarea><br>
    </div>
</div>
<!-- Fin Sub-sección 2: Tejidos Mineralizados -->



                                        <!-- Inicio Sub-sección b: Índice de desgaste dental por Smith y Knight -->
                                        <div class="col-lg">
                                            <table class="table table-hover table-bordered table-sm">
                                                <thead style="background-color: #F0D4E6">
                                                <tr class="text-center">
                                                    <th>PLACA BACTERIANA</th>
                                                    <th>CÁLCULO</th>
                                                    <th>GINGIVITIS</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>0 = Ausencia</td>
                                                    <td>0 = Ausencia</td>
                                                    <td>0 = Ausencia de sangrado</td>
                                                </tr>
                                                <tr>
                                                    <td>1 = Placa a nivel del tercio gingival</td>
                                                    <td>1 = Cálculo supragingival</td>
                                                    <td>1= Presencia de sangrado</td>
                                                </tr>
                                                <tr>
                                                    <td>2 = Placa hasta el tercio medio</td>
                                                    <td>2 = Cálculo subgingival</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>3 = Placa en toda la superficie del diente</td>
                                                    <td>3 = Cálculo subgingival</td>
                                                    <td></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Fin Sub-sección b: Índice de desgaste dental por Smith y Knight -->

                                        <!-- Inicio de imágenes de apoyo -->
                                        <br>
                                        <div class="col-lg row">
                                            <div class="col-lg-6">
                                                <img src="/dq-img/formula_calculo_indice.jpeg" class="border border-dark">
                                            </div>
                                            <div class="col-lg-6">
                                                <img src="/dq-img/clasificacion_puntuacion.jpeg" class="border border-dark">
                                            </div>
                                        </div>
                                        <br>
                                        <!-- Fin de imágenes de apoyo -->

                                        <!-- Campo: Dientes afectados -->
                                        <label>b. Índice de desgaste dental por Smith y Knight</label>
                                        <div class="col-lg-6">
                                            <img src="/dq-img/ii_2_b_dientes.jpeg">
                                        </div>
                                        <br>
                                        <div class="col-lg">
                                            <label>Dientes afectados:</label>
                                            <textarea id="dientes_afectados" class="form-control" rows="2"></textarea><br>
                                        </div>
                                    </div>
                                    <!-- Fin Sub-sección 2: Tejidos Mineralizados -->
                                </div>
                                <!-- Fin Sección B: Intraoral -->

                                <!-- Sección adicional: Nota sobre Odontogramas -->
                                <br>
                                <!-- Nota -->
                                <div class="col-lg">
                                    <label>Nota: Los Odontogramas se encuentran en las opciones para los pacientes registrados</label>
                                </div>

                                <!-- Sección adicional: Enfermedad Periodontal -->
                                <div class="col-lg">
                                    <label>6. Enfermedad Periodontal</label>
                                    <div class="col-lg">
                                        <p class="text-justify">
                                            <u>Leve</u>: Profundidad de bolsa o pérdida de inserción de 3-4mm, Radiográficamente: pérdida ósea horizontal, ligera pérdida del septum interdental, el nivel del hueso alveolar está a 3 o 4 mm del área de unión cemento esmalte.<br>
                                            <u>Moderada</u>: Profundidad de bolsa o pérdida de inserción de 4-6mm, movilidad dentaria Grado 1 (aumento apreciable de la movilidad), Radiográficamente: Pérdida ósea horizontal o vertical, el nivel del hueso alveolar de 4 a 6mm del área de unión cemento esmalte.<br>
                                            <u>Avanzada</u>: Profundidad de bolsa o pérdida de inserción de más de 6mm, movilidad dentaria Grado 2 (movilidad visible pero <1mm) o 3 (movilidad >1mm en cualquier dirección), Radiográficamente: Pérdida ósea horizontal y vertical, el nivel del hueso alveolar está a 6mm del área de unión cemento esmalte.<br>
                                        </p>
                                    </div>
                                </div>

                                <!-- Sección adicional: Pacientes parcialmente edéntulos (Clasificación de Kennedy) -->
                                <div class="col-lg">
                                    <label>7. Pacientes parcialmente edéntulos (Clasificación de Kennedy)</label>
                                    <div class="col-lg">
                                        <p>
                                            Clase I...............Edéntulo bilateral posterior<br>
                                            Clase II..............Edéntulo posterior unilateral<br>
                                            Clase III.............Edéntulo entre dientes<br>
                                            Clase IV..............Espacio entre dientes atravesando la línea media<br>
                                        </p>
                                    </div>
                                </div>

                                <!-- Sección adicional: Pacientes totalmente edéntulos (Clasificación según hueso residual de Misch - Judy) -->
                                <div class="col-lg">
                                    <label>8. Pacientes totalmente edéntulos (Clasificación según hueso residual de Misch - Judy)</label>
                                    <div class="col-lg">
                                        <p>
                                            División A: Abundante Hueso<br>
                                            División B: Hueso apenas suficiente<br>
                                            División C: Hueso comprometido (c-h: altura comprometida, C-w: ancho comprometido)<br>
                                            División D: Hueso deficiente<br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Fin Sección 2: Estomatológico -->
                        </div>

                        <!-- Línea divisoria -->
                        <hr>

                        <!-- Botón de envío -->
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-info w-lg waves-effect waves-light">
                                <i class="fa fa-save"></i>&nbsp;&nbsp;Grabar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Fin contenido colapsable del Accordion -->
    </div>
    <!-- Fin de tarjeta del Accordion -->
</div>
<!-- Fin del Accordion -->
