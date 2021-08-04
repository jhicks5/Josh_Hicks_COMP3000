<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

//    protected $guarded = [];

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function task()
    {
        return $this->hasMany(Task::class);
    }

    public function school()
    {
        return $this->hasOne(School::class, 'id');
    }

}

