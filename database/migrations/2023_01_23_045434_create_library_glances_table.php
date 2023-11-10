<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibraryGlancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('library_glances', function (Blueprint $table) {
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
            $table->string('status');
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
        Schema::dropIfExists('library_glances');
    }
}
