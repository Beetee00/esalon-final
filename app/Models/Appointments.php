<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Appointments extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'email',
        'user_id',
        'phone_number',
        'time',
        'date',
        'salon_id'
    ];
    public function salon() : BelongsTo
    {
        return $this->belongsTo(Salon::class);
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
