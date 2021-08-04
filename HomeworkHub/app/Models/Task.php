<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function classroom()
    {
        return $this->belongsTo(Classroom::class, 'id');
    }

    public function task()
    {
        return $this->hasManyThrough(Task::class, 'id');
    }

    public function school()
    {
        return $this->hasOneThrough(School::class, Classroom::class);
    }
}
