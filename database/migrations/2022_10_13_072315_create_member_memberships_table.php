<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberMembershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_memberships', function (Blueprint $table) {
            $table->id();
            $table->integer('member_id')->nullable();
            $table->string('membership_title')->nullable();
            $table->string('membership_type')->nullable();
            $table->string('membership_from_month')->nullable();
            $table->string('membership_from_year')->nullable();
            $table->string('membership_to_month')->nullable();
            $table->string('membership_to_year')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member_memberships');
    }
}
