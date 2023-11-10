<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['name','email','phone','about','image','member_designation','work_place','show_phone','member_type','designation_id'];

    public function BOT()
    {
        return $this->belongsTo(BoardofTrustee::class,'member_id','id');
    }

    public function GOV()
    {
        return $this->belongsTo(GoverningBody::class,'member_id','id');
    }

    public function faculty()
    {
        return $this->belongsTo(Faculty::class,'id','faculty_head');
    }
    public function designation()
    {
        return $this->belongsTo(Designation::class,'designation_id','id');
    }

}

