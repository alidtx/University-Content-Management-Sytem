<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FacultyHome extends Model
{
    public function faculty()
    {
        return $this->belongsTo(Faculty::class, 'faculty_id', 'id');
    }
}
