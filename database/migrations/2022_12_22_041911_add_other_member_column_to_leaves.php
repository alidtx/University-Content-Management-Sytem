<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOtherMemberColumnToLeaves extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('leaves', function (Blueprint $table) {
            $table->integer('category_id')->after('id')->nullable();
            $table->integer('category_type')->after('category_id')->nullable();
            $table->string('office_name_others')->after('member_id')->nullable();
            $table->string('member_name_others')->after('office_name_others')->nullable();
            $table->string('member_designation_others')->after('member_name_others')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('leaves', function (Blueprint $table) {
            $table->dropColumn('category_id');
            $table->dropColumn('category_type');
            $table->dropColumn('office_name_others');
            $table->dropColumn('member_name_others');
            $table->dropColumn('member_designation_others');
        });
    }
}
