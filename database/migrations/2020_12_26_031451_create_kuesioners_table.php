<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuesionersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuesioners', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('nim_mhs')->primary();
            $table->string('nama_mhs');
            $table->string('kelas');
            $table->integer('no_abs');
            $table->integer('jwb1');
            $table->integer('jwb2');
            $table->integer('jwb3');
            $table->integer('jwb4');
            $table->integer('jwb5');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kuesioners');
    }
}
