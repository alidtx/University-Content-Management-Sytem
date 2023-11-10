<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Faculty;
use App\Model\Member;

class Department extends Model
{
    public function faculty()
    {
        return $this->belongsTo(Faculty::class, 'faculty_id', 'id');
    }

    public function program()
    {
        return $this->hasMany(ProgramInfo::class, 'department_id', 'id');
    }


    public function member()
    {
        return $this->belongsTo(Member::class, 'department_head', 'id');
    }

    public function academicevent()
    {
        return $this->hasMany(Academicevent::class, 'department_id', 'id');
    }
}
