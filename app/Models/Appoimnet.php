<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appoimnet extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_id',
        'clinic_id',
        'schedule_id'
        
    ];

    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function clinics()
    {
        return $this->hasMany(Clinic::class);
    }
}
