<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDocumentToTrainingWorkShopSeminarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('training_work_shop_seminars', function (Blueprint $table) {
            $table->string('document')->after('seminar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('training_work_shop_seminars', function (Blueprint $table) {
            $table->dropColumn('document');
        });
    }
}
