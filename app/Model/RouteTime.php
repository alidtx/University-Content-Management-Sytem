<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RouteTime extends Model
{
    protected $table = 'route_times';

    protected $fillable = [ 'start_time', 'end_time', 'route_way', 'transport_id' ];

    protected $hidden = array('transport_id');

    public function transport()
    {
        return $this->belongsTo(Transport::class);
    }
}
