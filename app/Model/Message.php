<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function member()
    {
        return $this->belongsTo(Member::class, 'member_id', 'id');
    }
    public function category1()
    {
        return $this->belongsTo(Faculty::class, 'category_id', 'id');
    }
    public function category2()
    {
        return $this->belongsTo(Department::class, 'category_id', 'id');
    }
    public function category3()
    {
        return $this->belongsTo(Office::class, 'category_id', 'id');
    }
    public function category4()
    {
        return $this->belongsTo(Hall::class, 'category_id', 'id');
    }
}
