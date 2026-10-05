<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Extracurricular extends Model
{
    protected $fillable = [
        'name',
        'description',
        'coach',
        'schedule',
        'location',
        'quota',
        'image',
        'status',
        'whatsapp_group_link',
    ];
    public function registrations()
    {
        return $this->hasMany(ExtracurricularRegistration::class);
    }
}
