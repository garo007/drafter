<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Business;

class Survey extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function business(){
        $this->belongsTo(Business::class,'add_id');
    }
}
