<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Salon extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
    ];

    public function stocks(): HasMany
    {
        return $this->hasMany(Stock::class);
    }

    public function appointments(): HasMany
    {
        return $this->hasMany(Appointments::class);
    }
}
