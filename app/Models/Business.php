<?php

namespace App\Models;

use App\Http\Controllers\SearchController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Survey;

class Business extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'id',
        'user_id',
        'name',
        'category',
        'status_business',
        'reason_for_sale',
        'location',
        'site',
        'site_link',
        'price',
        'urgently',
        'take_calls',
        'organizational_legal_form',
        'description',
        'employee_count',
        'count_management_personnel',
        'area',
        'residential_nonresidential',
        'floor',
        'subject',
        'area_m2',
        'equipment',
        'licenses',
        'avg_monthly',
        'wage_fund',
        'rent_price',
        'cost_utility_bills',
        'operating_expenses',
        'net_profit_month',
        'business_payback_period',
        'debts_fines',

    ];



    public function user(){
        $this->belongsTo(User::class);
    }
    public function users(){
       return $this->belongsToMany(User::class,'user_int_business')->withTimestamps();
    }
    public function images(){
        return $this->hasMany(Image::class,'add_id')->where('images.add_type','=','business');
    }
    public function survey(){
        $this->hasOne(Survey::class,'add_id');

    }

}
