<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFacultiesToDepartmentsTable extends Migration
{


    public function up()
    {
        Schema::table('departments', function (Blueprint $table) {
            $table->dropColumn('dept_name');
            $table->string('name')->after('id');
            $table->integer('faculty_id')->after('id');
            $table->smallInteger('status')->after('dept_name')->nullable();
            $table->softDeletes()->after('dept_name');
            $table->integer('updated_by')->after('dept_name')->nullable();
            $table->integer('created_by')->after('dept_name')->nullable();
        });
    }


    public function down()
    {
        Schema::table('departments', function (Blueprint $table) {
        });
    }
}
