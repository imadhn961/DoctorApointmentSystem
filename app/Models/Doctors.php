<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Doctors extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        'available_times' => 'array', // Automatically handle JSON (array) casting
    ];

    public function User():BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function Apointments():HasMany{
        return $this->hasMany(Apointment::class);
    }
}
