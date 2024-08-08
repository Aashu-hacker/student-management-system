<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'student_name',
        'class_teacher_id',
        'class',
        'admission_date',
        'yearly_fees',
    ];

    protected $dates = ['admission_date', 'deleted_at'];

    /**
     * Get the teacher that owns the student.
     */
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'class_teacher_id');
    }
}
