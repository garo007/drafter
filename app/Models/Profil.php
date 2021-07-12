<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Profil extends Model
{
    use HasFactory;



    protected $fillable = [
        'user_id',
        'profil_photo',
        'passport_number',
        'passport_photo',
        'snills',
        'snills_photo',
        'selfi_passport',
    ];


	public function user()
    {
        return $this->belongsTo(User::class);
    }
}
