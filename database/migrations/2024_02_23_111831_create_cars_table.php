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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('marca', 50);
            $table->string('modello', 50);
            $table->float('prezzo', 10, 2);
            $table->string('alimentazione', 50);
            $table->smallInteger('cilindrata');
            $table->string('cambio', 20);
            $table->tinyInteger('porte')->nullable();
            $table->tinyInteger('posti')->nullable();
            $table->string('tipologia', 50)->nullable();
            $table->string('stato', 20)->default('nuovo');
            $table->date('anno_immatricolazione')->nullable();
            $table->mediumInteger('km')->nullable()->default(0);
            $table->string('immagine', 255);
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
        Schema::dropIfExists('cars');
    }
};
