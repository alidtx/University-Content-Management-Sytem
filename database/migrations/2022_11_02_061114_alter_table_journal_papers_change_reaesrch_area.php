<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableJournalPapersChangeReaesrchArea extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('journal_papers', function (Blueprint $table) {
            $table->renameColumn('email', 'editor');
            $table->renameColumn('abstract', 'issn');
            $table->renameColumn('country', 'volume');
            $table->renameColumn('mobile', 'issue');
            $table
                ->string('date')
                ->after('attachment2')
                ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('journal_papers', function (Blueprint $table) {
            $table->renameColumn('editor', 'email');
            $table->renameColumn('issn', 'abstract');
            $table->renameColumn('volume', 'country');
            $table->renameColumn('issue', 'mobile');
            $table->dropColumn('date');
        });
    }
}