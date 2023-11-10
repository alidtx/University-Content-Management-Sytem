<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OfficeToMember extends Model
{

    public function office()
    {
        return $this->belongsTo(Office::class, 'office_id', 'id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }
    public function member()
    {
        return $this->belongsTo(Member::class, 'member_id', 'id');
    }



}
