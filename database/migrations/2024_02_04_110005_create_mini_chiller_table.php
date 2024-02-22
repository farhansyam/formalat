<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiniChillerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mini_chillers', function (Blueprint $table) {
            $table->id();
            $table->text('q1');
            $table->text('q2');
            $table->text('q3');
            $table->text('q4');
            $table->text('q5');
            $table->text('q6');
            $table->text('q7');
            $table->text('q8');
            $table->text('q9');
            $table->text('q10');
            $table->text('q11');
            $table->text('q12');
            $table->text('q13');
            $table->text('q14');
            $table->text('q15');
            $table->text('q16');
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
        Schema::dropIfExists('mini_chillers');
    }
}
