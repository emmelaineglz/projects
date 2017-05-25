<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomiciliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('domicilios',function(Blueprint $table){
          $table->string('id',40)->primary();
          $table->string('empleado_id',40)->unseigned();
          $table->foreign('empleado_id')->references('id')->on('empleados')->onDelete('cascade');
          $table->string('calle');
          $table->string('colonia');
          $table->integer('cp');
          $table->timestamps();
          $table->softDeletes();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('domicilios');
    }
}
