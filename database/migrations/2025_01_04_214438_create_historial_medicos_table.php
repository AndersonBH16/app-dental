<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('historial_medico', function (Blueprint $table) {
            $table->id();
            $table->integer('ana_edad');
            $table->enum('sexo', ['masculino', 'femenino', 'otro']);
            $table->string('ana_religion');
            $table->string('ana_lugar_nacimiento');
            $table->string('ana_telefono');
            $table->string('ana_email');
            $table->string('ana_ocupacion');
            $table->string('ana_grado_instruccion');
            $table->string('ana_estado_civil');
            $table->string('ana_nacionalidad');
            $table->string('ana_telefono_emergencia');
            $table->text('ana_motivo_consulta');
            $table->text('ana_tiempo_enfermedad');
            $table->text('ana_signos_sintomas');
            $table->text('ana_relato_enfermedad');
            $table->string('ana_antecedentes_hh');
            $table->string('ana_antecedentes_da');
            $table->string('ana_antecedentes_te');
            $table->string('ana_antecedentes_tfr');
            $table->string('ana_antecedentes_ec_tg');
            $table->string('ana_antecedentes_er_th');
            $table->string('ana_antecedentes_n_aam');
            $table->string('ana_antecedentes_sida_c');
            $table->string('ana_antecedentes_a_at');
            $table->string('ana_antecedentes_ep_e');
            $table->string('ana_antecedentes_ds_tp');
            $table->string('ana_antecedentes_f_a');
            $table->string('ana_antecedentes_d_c');
            $table->string('ana_antecedentes_o_tam');
            $table->string('ana_antecedentes_q_qr');
            $table->text('ana_antecedentes_ampliacion');
            $table->text('ana_antecedentes_familiares');
            $table->integer('idPaciente');
            $table->text('diagnostico_presuntivo');
            $table->text('pc_rad_peri');
            $table->text('pc_rad_b_w');
            $table->text('pc_rad_oclusal');
            $table->text('pc_rad_pano');
            $table->text('pc_rad_cefa');
            $table->text('pc_rad_tac');
            $table->text('pc_rad_hemograma');
            $table->text('pc_rad_biopsia');
            $table->text('diagnostico_definitivo');
            $table->text('pronostico');
            $table->text('presupuesto');
            $table->text('plan_trat_recomend');
            $table->text('control_evol');
            $table->date('fecha_guardado');
            $table->date('fecha_actualizado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial_medicos');
    }
};
