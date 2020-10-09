<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCineFunctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cine_functions', function (Blueprint $table) {
            $table->id();
            $table->time('start', 0);
            $table->time('end', 0);
            $table->boolean('available')->default(true);
            $table->enum('level', ['mañana', 'tarde','noche']);
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
        Schema::dropIfExists('cine_functions');
    }
}
