<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryToOfficeOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('office_orders', function (Blueprint $table) {
            $table->integer('category_type')->after('id')->nullable();
            $table->integer('category_id')->after('category_type')->nullable();
            $table->integer('member_id')->after('category_id')->nullable();

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
            $table->dropColumn('category_type');
            $table->dropColumn('category_id');
            $table->dropColumn('member_id');
        });
    }
}
