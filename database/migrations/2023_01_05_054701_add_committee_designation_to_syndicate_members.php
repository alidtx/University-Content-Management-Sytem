<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCommitteeDesignationToSyndicateMembers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('syndicate_members', function (Blueprint $table) {
            //committee_designation
            $table->string('committee_designation')->after('designation_id')->nullable();
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
            $table->dropColumn('committee_designation');
        });
    }
}
