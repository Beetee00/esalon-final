<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'customer_image',
        'date',
        'user_id',
        'salon_id',
        'rated',
        'message'
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
