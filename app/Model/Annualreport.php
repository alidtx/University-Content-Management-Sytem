<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Annualreport extends Model
{
    use SoftDeletes;
    
    Protected $fillable = ['title','files','date', 'performance_id'];

    protected $dates = ['deleted_at'];

    public function performance()
    {
        return $this->belongsTo('App\Model\Performance','performance_id','id');
    }
}
