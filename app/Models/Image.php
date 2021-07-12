<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable= [
            'name',
            'add_id',
            'add_type'
        ];


    public function business(){
        return $this->belongsTo(Business::class);
    }
    public function investment(){
        return $this->belongsTo(Investment::class);
    }
}
