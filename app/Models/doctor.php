<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'especialidad',
        'clinic_ids',
        'schedule_ids'
        
    ];

    // public function clinics()
    // {
    //     return $this->hasMany(Clinic::class);
    // }
}
