<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelasiKelasMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mahasiswas', function (Blueprint $table) {
            $table->dropColumn('Kelas');
            $table->unsignedBigInteger('kelas_id')->nullable();
            $table->foreign('kelas_id')->references('id')->on('Kelas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mahasiswas', function (Blueprint $table) {
            $table->string('Kelas');
            $table->dropForeign('kelas_id');
        });
    }
}
