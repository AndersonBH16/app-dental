@extends('layouts.master')

@section('content')
    @csrf
    <div class="card">
        <div class="card-body">
            @include('historial-medico.i_anamnesis')
            @include('historial-medico.ii_examen_clinico')

            <div id="accordion" class="custom-accordion">
                <div class="card mb-1 shadow-none">
                    <a href="#collapseThree" class="text-dark collapsed" data-bs-toggle="collapse"
                       aria-expanded="false"
                       aria-controls="collapseThree">
                        <div class="card-header" id="headingThree">
                            <h6 class="m-0">
                                III. DIAGNÓSTICO PRESUNTIVO
                                <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                            </h6>
                        </div>
                    </a>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                         data-bs-parent="#accordion">
                        <div class="card-body">
                            <div class="card-body">
                                <form>
                                    <textarea id="diag_pres" class="form-control" placeholder="Escribir detalle" rows="5"></textarea>
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

            @include('historial-medico.iv_pruebas_complementarias')
            <div id="accordion" class="custom-accordion">
                <div class="card mb-1 shadow-none">
                    <a href="#collapseFive" class="text-dark collapsed" data-bs-toggle="collapse"
                       aria-expanded="false"
                       aria-controls="collapseFive">
                        <div class="card-header" id="headingFive">
                            <h6 class="m-0">
                                V. DIAGNÓSTICO DEFINITIVO
                                <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                            </h6>
                        </div>
                    </a>
                    <div id="collapseFive" class="collapse"
                         aria-labelledby="headingFive" data-bs-parent="#accordion">
                        <div class="card-body">
                            <form>
                                <textarea id="diagnostico_def" class="form-control" placeholder="Escribir pronóstico" rows="5"></textarea>
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

            <div id="accordion" class="custom-accordion">
                <div class="card mb-1 shadow-none">
                    <a href="#collapsePronostico" class="text-dark collapsed" data-bs-toggle="collapse"
                       aria-expanded="false"
                       aria-controls="collapsePronostico">
                        <div class="card-header" id="headingPronostico">
                            <h6 class="m-0">
                                VI. PRONÓSTICO
                                <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                            </h6>
                        </div>
                    </a>
                    <div id="collapsePronostico" class="collapse"
                         aria-labelledby="headingPronostico" data-bs-parent="#accordion">
                        <div class="card-body">
                            <form>
                                <textarea id="pronostico" class="form-control" placeholder="Escribir detalle" rows="5"></textarea>
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

            <div id="accordion" class="custom-accordion">
                <div class="card mb-1 shadow-none">
                    <a href="#collapseSeven" class="text-dark collapsed" data-bs-toggle="collapse"
                       aria-expanded="false"
                       aria-controls="collapseSeven">
                        <div class="card-header" id="headingSeven">
                            <h6 class="m-0">
                                VII. PRESUPUESTO
                                <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                            </h6>
                        </div>
                    </a>
                    <div id="collapseSeven" class="collapse"
                         aria-labelledby="headingSeven" data-bs-parent="#accordion">
                        <div class="card-body">
                            <form>
                                <textarea id="presupuesto" class="form-control" placeholder="Escribir detalle" rows="5"></textarea>
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

            <div id="accordion" class="custom-accordion">
                <div class="card mb-1 shadow-none">
                    <a href="#collapseTratamientoRecomendaciones" class="text-dark collapsed" data-bs-toggle="collapse"
                       aria-expanded="false"
                       aria-controls="collapseTratamientoRecomendaciones">
                        <div class="card-header" id="headingTratamientoRecomendaciones">
                            <h6 class="m-0">
                                VIII. PLAN DE TRATAMIENTO Y RECOMENDACIONES
                                <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                            </h6>
                        </div>
                    </a>
                    <div id="collapseTratamientoRecomendaciones" class="collapse"
                         aria-labelledby="headingTratamientoRecomendaciones" data-bs-parent="#accordion">
                        <div class="card-body">
                            <form>
                                <textarea id="plan_tratamiento_recomendaciones" class="form-control" placeholder="Escribir detalle" rows="5"></textarea>
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

            <div id="accordion" class="custom-accordion">
                <div class="card mb-1 shadow-none">
                    <a href="#collapseTratamientosRealizados" class="text-dark collapsed" data-bs-toggle="collapse"
                       aria-expanded="false"
                       aria-controls="collapseTratamientosRealizados">
                        <div class="card-header" id="headingTratamientosRealizados">
                            <h6 class="m-0">
                                IX. TRATAMIENTOS REALIZADOS
                                <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                            </h6>
                        </div>
                    </a>
                    <div id="collapseTratamientosRealizados" class="collapse"
                         aria-labelledby="headingTratamientosRealizados" data-bs-parent="#accordion">
                        <div class="card-body">
                            <form>
                                <textarea id="control_evol" class="form-control" placeholder="Detallar" rows="5"></textarea>
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

            <div id="accordion" class="custom-accordion">
                <div class="card mb-1 shadow-none">
                    <a href="#collapseControlEvaluacion" class="text-dark collapsed" data-bs-toggle="collapse"
                       aria-expanded="false"
                       aria-controls="collapseControlEvaluacion">
                        <div class="card-header" id="headingControlEvaluacion">
                            <h6 class="m-0">
                                X. CONTROL Y EVOLUCIÓN
                                <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                            </h6>
                        </div>
                    </a>
                    <div id="collapseControlEvaluacion" class="collapse"
                         aria-labelledby="headingControlEvaluacion" data-bs-parent="#accordion">
                        <div class="card-body">
                            <form>
                                <textarea id="control_evol" class="form-control" placeholder="Detallar" rows="5"></textarea>
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

            @include('historial-medico.xi_consentimiento_informado')

            <div class="form-group text-center mt-3">
                <button id="btnGuardarHistorialMedico" class="btn btn-secondary btn-lg">
                    <i class="fa fa-print"></i>&nbsp;&nbsp;Imprimir
                </button>
            </div>
        </div>
    </div>
@stop
