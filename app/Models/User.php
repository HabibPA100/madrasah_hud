<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */ 
    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
        'auth_id'
    ];
//It is for UserPost Controller 
public function UserPost()
        {
            return $this->hasMany(UserPost::class);
        }
//It is for UserPost Controller 
public function TeacherPost(){
    return $this->hasMany(TeacherPost::class);
}
//It is for UserPost Controller 
public function ParentPost(){
    return $this->hasMany(ParentPost::class);
}
//It is for UserPost Controller 
public function AdminImagePost(){
    return $this->hasMany(AdminImagePost::class);
}
//It is for UserPost Controller 
public function ExamFee(){
    return $this->hasMany(ExamFee::class);
}

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
