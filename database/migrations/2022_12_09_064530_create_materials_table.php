<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {

            $table->id();
            $table->string("mtrl_name", 50);
            $table->string("color", 50);
            $table->integer("roughness");
            $table->integer("strength");
            $table->unsignedBigInteger("obj_id");
            $table->timestamps();

            $table->foreign('obj_id')->references('id')->on('sprites');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materials');
    }
}
