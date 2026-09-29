<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ScheduleItem extends Model
{
    protected $fillable = ['schedule_id', 'title', 'description', 'start_date', 'end_date', 'status', 'progress', 'responsible_id', 'position'];

    protected $casts = ['start_date' => 'date', 'end_date' => 'date', 'progress' => 'integer', 'position' => 'integer'];

    public function schedule(): BelongsTo
    {
        return $this->belongsTo(Schedule::class);
    }

    public function responsible(): BelongsTo
    {
        return $this->belongsTo(User::class, 'responsible_id');
    }
}
