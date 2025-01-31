<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Apointment extends Model
{
    use HasFactory;
    protected $guarded =[];
    
    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctors::class);
    }
    public function patient():BelongsTo{
        return $this->belongsTo(User::class  ,'patient_id') ; 
    }
}
