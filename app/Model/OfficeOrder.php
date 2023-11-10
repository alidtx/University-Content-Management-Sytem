<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OfficeOrder extends Model
{
    Protected $fillable = ['title','publish_date','status','category_type','category_id','member_id','office_name_others', 'member_name_others', 'member_designation_others'];

    public function member()
    {
        return $this->belongsTo(Member::class, 'member_id', 'id');
    }
    public function department()
    {
        return $this->belongsTo(Department::class, 'category_id', 'id');
    }
    public function office()
    {
        return $this->belongsTo(Office::class, 'category_id', 'id');
    }
}
