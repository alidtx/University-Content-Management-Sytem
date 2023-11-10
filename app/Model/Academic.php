<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    Protected $fillable = ['type_id','faculty_id','department_id','program_id','session','file','status'];

    public function faculty()
    {
        return $this->belongsTo(Faculty::class, 'faculty_id', 'id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }
    public function program()
    {
        return $this->belongsTo(ProgramInfo::class, 'program_id', 'id');
    }

}
