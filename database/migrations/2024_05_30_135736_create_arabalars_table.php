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
        Schema::create('arabalars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('model_id');
            $table->unsignedBigInteger('hasar_id');
            $table->unsignedBigInteger('ilce_id');
            $table->date('yili');
            $table->string('renk');
            $table->integer('km')->nullable();
            $table->boolean('garanti_durumu');
            $table->integer('vites_turu',);
            $table->integer('yakit_turu');
            $table->dateTime('ilana_cikma_tarihi');
            $table->integer('status')->comment('0:pasif, 1:ilanda');
            $table->integer('fiyat');
            $table->text('description');


            $table->softDeletes();
            $table->timestamps();


            $table->foreign('user_id')
                ->on('users')
                ->references('id')
                ->onDelete('cascade');

            $table->foreign('model_id')
                ->on('araba_marka_models')
                ->references('id')
                ->onDelete('cascade');

            $table->foreign('hasar_id')
                ->on('araba_hasar_kayitlari')
                ->references('id')
                ->onDelete('cascade');

            $table->foreign('ilce_id')
                ->on('ilcelers')
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
        Schema::dropIfExists('arabalars');
    }
};

