<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FrontendMenu extends Model
{

    // public function parent()
    // {
    //     return $this->hasOne(FrontendMenu::class, 'id', 'parent_id')->orderBy('sort_order');
    // }

    // public function children()
    // {

    //     return $this->hasMany(FrontendMenu::class, 'parent_id', 'rand_id');
    // }
    public function childs()
    {
        return $this->hasMany(FrontendMenu::class, 'parent_id', 'rand_id');
    }
    // public static function tree()
    // {
    //     return static::with('children')->where('parent_id', '=', '0')->orderBy('sort_order')->get();
    // }
}
