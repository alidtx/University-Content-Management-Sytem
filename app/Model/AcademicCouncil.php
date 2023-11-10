<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AcademicCouncil extends Model
{
    protected $fillable = ['member_id','designation_id','sort_order','status'];

    public function member()
    {
        return $this->belongsTo(Member::class,'member_id','id');
    }
    public function designation()
    {
        return $this->belongsTo(Designation::class,'designation_id','id');
    }



}
