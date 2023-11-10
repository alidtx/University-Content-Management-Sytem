<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOutlineToProgramInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('program_infos', function (Blueprint $table) {
            $table->longText('outline')->after('name');
            $table->longText('admission_criteria')->after('name');
            $table->longText('course_list')->after('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('program_infos', function (Blueprint $table) {
            $table->longText('outline')->after('name');
            $table->longText('admission_criteria')->after('name');
            $table->longText('course_list')->after('name');
        });
    }
}
