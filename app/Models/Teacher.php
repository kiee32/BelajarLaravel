<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'niy', 'start_date'];

    
    public function subject()
    {
        return $this->hasOne(Subject::class, 'teacher_id');
    }
}
