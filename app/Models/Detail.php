<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Detail extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'report_id',
        'task_name',
        'status',
        'record_date',
        'task_link',
        'hours_spent'
    ];

    protected $casts = [
        'record_date' => 'date'
    ];

    public function report(): BelongsTo
    {
        return $this->belongsTo(Detail::class);
    }

    public function totalHours(): Attribute
    {
        return Attribute::make(get: fn ($value, $attr) => $attr->detail());
    }
}
