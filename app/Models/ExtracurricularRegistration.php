<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExtracurricularRegistration extends Model
{
    protected $fillable = [
        'extracurricular_id',
        'student_name',
        'class',
        'student_number',
        'phone',
        'status',
    ];
    public function extracurricular()
    {
        return $this->belongsTo(Extracurricular::class);
    }
}
