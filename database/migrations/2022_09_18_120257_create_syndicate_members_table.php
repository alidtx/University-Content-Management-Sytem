<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSyndicateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('syndicate_members', function (Blueprint $table) {
            $table->id();
            $table->integer('member_id');
            $table->integer('designation_id');
            $table->integer('sort_order')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * 
     * 
*/
    public function down()
        {
            Schema::dropIfExists('syndicate_members');
        }

}
