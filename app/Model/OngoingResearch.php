<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OngoingResearch extends Model
{
    protected $table = 'ongoing_researches';

    protected $fillable = ['title', 'author', 'date', 'area_of_research', 'status', 'source_of_fund'];
}