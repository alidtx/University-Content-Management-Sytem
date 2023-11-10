<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSortOrderToDepartmentToFacultyMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('department_to_faculty_members', function (Blueprint $table) {
            $table->integer('sort_order')->after('is_faculty');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('department_to_faculty_members', function (Blueprint $table) {
            $table->dropColumn('sort_order');
        });
    }
}
