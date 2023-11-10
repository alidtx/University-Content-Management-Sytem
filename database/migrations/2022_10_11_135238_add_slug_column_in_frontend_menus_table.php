<?php

use App\Model\FrontendMenu;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSlugColumnInFrontendMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('frontend_menus', function (Blueprint $table) {
            $table->text('slug')->after('sort_order')->nullable();
        });

    $all_menus = FrontendMenu::all();
        foreach($all_menus as $list){
            $updateData = FrontendMenu::find($list->id);
            $updateData->slug = slugChecker($editSlug=null,$slug = $list->title_en);
            $updateData->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('frontend_menus', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
}
