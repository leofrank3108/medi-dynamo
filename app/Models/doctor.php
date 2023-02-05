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
        'clinic_id',
        'schedule_id'
        
    ];

    public function clinics()
    {
        return $this->hasMany(Clinic::class);
    }
}
