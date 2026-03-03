<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResearchLog extends Model
{
    //
    protected $table = 'research_logs';
    protected $fillable = [
        'ancestor_id',
        'institution_id',
        'sent_at',
        'status',
        'cost',
        'response_notes',
    ];
}
