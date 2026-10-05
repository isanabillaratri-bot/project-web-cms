<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentRegistration extends Model
{
    protected $fillable = [
        'name',
        'nik',
        'birth_place',
        'birth_date',
        'address',
        'school_origin',
        'parent_name',
        'parent_phone',
        'status',
    ];
    public function documents()
    {
        return $this->hasMany(StudentDocument::class);
    }
}
