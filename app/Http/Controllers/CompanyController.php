<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CompanyController extends Controller
{
    /**
     * @param CompanyRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CompanyRequest $request)
    {
        if ($request->logo) {
            $imageName = auth()->user()->id . '-' . time() . '.' . $request->logo->extension();
            $request->logo->storeAs('public/uploads/companies', $imageName);
        }else{
            $imageName = "";
        }

        Company::create([
            'user_id'        => auth()->user()->id,
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
        return redirect()->back()->with('company_success' , 'true');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function upload_comp_docs(Request $request)
    {

        if ($request->file('file')) {
            $imageName = auth()->user()->id . '-' . time() . '.' . $request->file('file')->extension();
            $request->file('file')->storeAs('public/uploads/companies/docs', $imageName);
        }else{
            $imageName = "";
        }
        $company = Auth::user()->companies()->where('id', $request->comp_id)->first();
        $company->{$request->doc_type} = $imageName;
        $company->save();
        return response()->json('success','200');

    }
}
