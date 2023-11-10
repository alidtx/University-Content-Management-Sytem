<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageToCompletedResearches extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('completed_researches', function (Blueprint $table) {
            $table->string('image')->after('publish_status')->nullable();
            $table->renameColumn('pdf', 'file');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('completed_researches', function (Blueprint $table) {
            $table->dropColumn('image');
            $table->renameColumn('file', 'pdf');
        });
    }
}
