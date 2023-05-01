<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Auth\Notifications\VerifyEmail;


class User extends Authenticatable 
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'lname',
        'department',
        'type',
        'gender',
        'second_email',
        'image_profile','cover_image','bio','about','job',

    ];

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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }


    

    public function hasVerifiedEmail()
    {
        if (empty($this->second_email_verified_at)) {
            return false;
        }

        return true;
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function contact()
    {
        return $this->hasMany(ContactUser::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    //send notification for users to verify hehe email address
    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmail);
    }
}


