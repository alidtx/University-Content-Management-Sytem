<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Academicevent extends Model
{
    use SoftDeletes;

    protected $table = "academicevents";
    
    protected $fillable = ['title', 'color', 'type','start_date', 'end_date', 'department_id', 'status', 'description'];

    protected $dates = ['deleted_at'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
