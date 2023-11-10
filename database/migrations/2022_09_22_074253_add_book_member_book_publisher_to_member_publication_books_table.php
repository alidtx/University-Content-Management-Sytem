<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBookMemberBookPublisherToMemberPublicationBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('member_publication_books', function (Blueprint $table) {
            $table->string('book_member_list')->after('book_url_link')->nullable();
            $table->string('book_publisher_name')->after('book_member_list')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('member_publication_books', function (Blueprint $table) {
            $table->dropColumn('book_member_list');
            $table->dropColumn('book_publisher_name');
        });
    }
}
