<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    public function classroom()
    {
        return $this->hasMany(Classroom::class);
    }

    public function task()
    {
        return $this->hasManyThrough(Task::class, Classroom::class);
    }

    public function user()
    {
        return $this->hasManyThrough(User::class, Classroom::class);
    }
}
