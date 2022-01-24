<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

    public function department()
    {
        return $this->belongsTo(Department::class,'department_id','id');
    }

    public function designation()
    {
        return $this->belongsTo(Designation::class,'designation_id','id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
        'address',
        'department_id',
        'designation_id',
        'gender',
        'joined_on',
        'contact_no'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
