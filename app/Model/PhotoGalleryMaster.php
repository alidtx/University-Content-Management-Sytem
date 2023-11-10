<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PhotoGalleryMaster extends Model
{

    public function category1()
    {
        return $this->belongsTo(Faculty::class, 'category', 'id');
    }
    public function category2()
    {
        return $this->belongsTo(Department::class, 'category', 'id');
    }
    public function category3()
    {
        return $this->belongsTo(Office::class, 'category', 'id');
    }
    public function category4()
    {
        return $this->belongsTo(Hall::class, 'category', 'id');
    }
   
}
