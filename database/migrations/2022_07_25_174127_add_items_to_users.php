<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->nullable()->unique();
            $table->string('dni')->nullable()->unique();
            $table->string('image')->nullable();
            $table->string('gender')->nullable();
            $table->string('id_paises')->nullable();
            $table->string('id_plataformas')->nullable();
            $table->string('id_divisiones')->nullable();
            $table->string('id_areas')->nullable();
            $table->string('id_perfiles')->nullable();
            $table->string('id_turnos')->nullable();
            $table->string('fecha_postulacion')->nullable();
            $table->string('wsp_status')->nullable();
            $table->text('observacion')->nullable();
            $table->string('device')->nullable();
            $table->string('ip')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phone')->nullable()->unique();
            $table->dropColumn('dni')->nullable()->unique();
            $table->dropColumn('image')->nullable();
            $table->dropColumn('gender')->nullable();
            $table->dropColumn('id_paises')->nullable();
            $table->dropColumn('id_plataformas')->nullable();
            $table->dropColumn('id_divisiones')->nullable();
            $table->dropColumn('id_areas')->nullable();
            $table->dropColumn('id_perfiles')->nullable();
            $table->dropColumn('id_turnos')->nullable();
            $table->dropColumn('fecha_postulacion')->nullable();
            $table->dropColumn('wsp_status')->nullable();
            $table->dropColumn('observacion')->nullable();
            $table->dropColumn('device')->nullable();
            $table->dropColumn('ip')->nullable();

        });
    }
};
