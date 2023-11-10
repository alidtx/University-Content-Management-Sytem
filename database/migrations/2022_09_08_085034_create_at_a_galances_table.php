<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtAGalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('at_a_galances', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('column_1_text');
            $table->string('column_1_number');
            $table->string('column_2_text');
            $table->string('column_2_number');
            $table->string('column_3_text');
            $table->string('column_3_number');
            $table->string('column_4_text');
            $table->string('column_4_number');
            $table->smallInteger('status')->default(1)->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('at_a_galances');
    }
}
