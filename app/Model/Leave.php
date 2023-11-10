<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    public function member()
    {
        return $this->belongsTo(Member::class, 'member_id', 'id');
    }
    public function deptMember()
    {
        return $this->belongsTo(DepartmentToFacultyMember::class, 'member_id', 'member_id');
    }
    public function officeMember()
    {
        return $this->belongsTo(OfficeToMember::class, 'member_id', 'member_id');
    }
}
