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
        Schema::create('araba_marka_models', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('marka_id');
            $table->string('name');
            $table->softDeletes();
            $table->timestamps();


            $table->foreign('marka_id')
                ->on('araba_markalaris')
                ->references('id')
                ->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('araba_marka_models');
    }
};
