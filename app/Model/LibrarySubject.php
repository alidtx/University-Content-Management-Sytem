<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LibrarySubject extends Model
{
    protected $fillable = ['subject_name','sort_order','show_status'];

    public function books()
    {
        return $this->hasMany(BooksPublication::class);
    }

    public static function bookAsSubject($id)
    {
    	$data = BooksPublication::where('library_subject_id', $id)->where('show_status_for_subject', 1)->get();
    	return $data;
    }
}
