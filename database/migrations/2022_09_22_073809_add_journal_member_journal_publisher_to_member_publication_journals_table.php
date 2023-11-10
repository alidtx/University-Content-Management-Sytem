<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJournalMemberJournalPublisherToMemberPublicationJournalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('member_publication_journals', function (Blueprint $table) {
            $table->string('journal_member_list')->after('journal_url_link')->nullable();
            $table->string('journal_publisher_name')->after('journal_member_list')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('member_publication_journals', function (Blueprint $table) {
            $table->dropColumn('journal_member_list');
            $table->dropColumn('journal_publisher_name');
        });
    }
}
