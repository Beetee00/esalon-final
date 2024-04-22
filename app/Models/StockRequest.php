<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StockRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'salon_id',
        'units',
        'user',
        'stock_id'


    ];

    public function salon() : BelongsTo
    {
        return $this->belongsTo(Salon::class);
    }

    public function stock() : BelongsTo
    {
        return $this->belongsTo(Stock::class);
    }
}
