<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MemberMembership extends Model
{
    protected $table = "member_memberships";
    protected $fillable = ['member_id','title','type','membership_from_month','membership_from_year','membership_to_month','membership_to_year'];

    public function member()
    {
        return $this->belongsTo(Member::class,'member_id','id');
    }
}
