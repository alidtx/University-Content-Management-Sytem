<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class JournalPaper extends Model
{
    protected $fillable = ['paper_title', 'authors', 'editor', 'issn', 'research_area', 'volume', 'attachment1', 'attachment2', 'date', 'issue'];
}