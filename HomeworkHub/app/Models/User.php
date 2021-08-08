<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'role',
        'school_id',
        'classroom_id',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

//    public function task()
//    {
//        return $this->hasMany(Task::class);
//    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class, 'id');
    }

    public function school()
    {
        return $this->hasOneThrough(School::class, Classroom::class);
    }

    public function task()
    {
        return $this->hasManyThrough(Task::class, Classroom::class);
    }
}
