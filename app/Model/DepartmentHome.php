<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Department;

class DepartmentHome extends Model

{
    
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }



}
