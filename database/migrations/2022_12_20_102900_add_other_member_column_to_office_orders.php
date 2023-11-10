<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOtherMemberColumnToOfficeOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('office_orders', function (Blueprint $table) {
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
        Schema::table('office_orders', function (Blueprint $table) {
            $table->dropColumn('office_name_others');
            $table->dropColumn('member_name_others');
            $table->dropColumn('member_designation_others');
        });
    }
}
