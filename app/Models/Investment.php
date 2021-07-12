<?php

namespace App\Models;

use App\Http\Controllers\SearchController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory;
    /**
     * @var string[]
     */
    protected $fillable = [
        'id',
        'company_name',
        'cat_id',
        'user_id',
        'description',
        'company_logo',
        'am_required',
        'percentage',
        'objectives',
        'share_progress',
        'status'
    ];



    public function invests(){
        return $this->hasMany(Invest::class);

    }

    public function images(){
        return $this->hasMany(Image::class,'add_id')->where('images.add_type','=','investment');
    }
}
