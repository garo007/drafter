<?php

namespace App\Models;

use App\Http\Controllers\BusinessController;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Profil;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'surname',
        'fullname',
        'phone',
        'email',
        'role',
        'password',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
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
    public function companies(){
        return $this->hasMany(Company::class);
    }
    public function profile(){
      return  $this->hasOne(Profil::class);
    }
    public function bookmarks(){
        return  $this->belongsToMany(Bookmark::class,'bookmark_user');
    }
    public function invests(){
        return $this->hasManyThrough(Invest::class , Investment::class);
    }
    public function investments(){
        return $this->hasMany(Investment::class);
    }
    public function businesses(){
        return $this->hasMany(Business::class);
    }
    public function investedTo(){
        return $this->hasMany(Invest::class);
    }
    public function business(){
       return $this->belongsToMany(Business::class,'user_int_business')->withTimestamps();
    }

}
