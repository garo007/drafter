<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $request)
    {
        if ($request->logo) {
            $imageName = $request->user_id . '-' . time() . '.' . $request->logo;
        }else{
            $imageName = "";
        }
        $company =  Company::create([
            'user_id'        => $request->user_id,
            'logo'           => $imageName,
            'name'           => $request->company_name,
            'reg_date'       => $request->reg_date,
            'low_address'    => $request->low_address,
            'dir_full_name'  => $request->dir_fullname,
            'inn'            => $request->inn,
            'ogrn'           => $request->ogrn,
            'created_at'     => Carbon::now(),
            'updated_at'     => Carbon::now(),
        ]);

        return response()->json([
           "company"  =>  $company,
            "message" => "Company successfully created"
        ]);
    }
}
