<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SyndicateMember extends Model
{
    protected $table = "syndicate_members";
    protected $fillable = ['member_id','designation_id','committee_designation','sort_order','type_id','status'];

    public function member()
    {
        return $this->belongsTo(Member::class,'member_id','id');
    }
    public function designation()
    {
        return $this->belongsTo(Designation::class,'designation_id','id');
    }
}
