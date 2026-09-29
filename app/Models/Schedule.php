<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Schedule extends Model
{
    protected $fillable = ['name', 'description', 'start_date', 'end_date'];

    protected $casts = ['start_date' => 'date', 'end_date' => 'date'];

    public function items(): HasMany
    {
        return $this->hasMany(ScheduleItem::class);
    }
}
