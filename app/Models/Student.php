<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['state', 'gender', 'admission_number', 'result', 'score', 'answer', 'school_type', 'theoryResult', 'theoryAnswers'];
}
