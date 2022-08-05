<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("azienda", 100);
            $table->string("stazione_partenza", 50);
            $table->string("stazione_arrivo", 50);
            $table->string("orario_partenza");
            $table->string("orario_arrivo");
            $table->string("codice_treno", 10);
            $table->unsignedTinyInteger("numero_carrozze")->nullable();
            $table->boolean("in_orario");
            $table->boolean("cancellato")->default(0);
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
        Schema::dropIfExists('trains');
    }
}
