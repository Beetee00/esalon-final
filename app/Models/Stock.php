<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Stock extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'type',
        'units',
        'salon_id'
    ];
    public function salon() : BelongsTo
    {
        return $this->belongsTo(Salon::class);
    }

    public function stock_requests(): HasMany
    {
        return $this->hasMany(StockRequest::class);
    }
}
