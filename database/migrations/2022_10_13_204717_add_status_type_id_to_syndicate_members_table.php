<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusTypeIdToSyndicateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('syndicate_members', function (Blueprint $table) {
            $table->integer('type_id')->after('id')->nullable();
            $table->integer('status')->after('sort_order')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('syndicate_members', function (Blueprint $table) {
            $table->dropColumn('type_id');
            $table->dropColumn('status');
        });
    }
}
