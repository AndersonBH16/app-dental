<?php

use App\Models\Odontograma;
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
        Schema::create('odontogramas', function (Blueprint $table) {
            $table->id();
            $table->integer('type')->default(Odontograma::TYPE_INITIAL);
            $table->dateTime('date');
            $table->integer('paciente_id');
            $table->foreign('paciente_id')->references('id')
                ->on('pacientes')
                ->onDelete('cascade');
            $table->longText('payload');
            $table->string('specifications')->default('');
            $table->string('observations')->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('odontogramas');
    }
};
