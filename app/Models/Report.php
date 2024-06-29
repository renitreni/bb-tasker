<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Report extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'bill_from',
        'bill_to',
        'invoice_number',
        'invoice_date',
        'due_date',
        'account_name',
        'account_number',
        'bank_name',
        'bank_address',
        'terms_condition'
    ];

    protected $casts = [
        'invoice_date' => 'date',
        'due_date' => 'date',
    ];

    public function details(): HasMany
    {
        return $this->hasMany(Detail::class);
    }
}
