<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentDocument extends Model
{
    protected $fillable = [
        'student_registration_id',
        'document_type',
        'file_path',
    ];
    public function studentRegistration()
    {
        return $this->belongsTo(StudentRegistration::class);
    }
}
