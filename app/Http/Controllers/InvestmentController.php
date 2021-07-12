<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Invest;
use App\Models\Investment;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class InvestmentController extends Controller
{

    /**
     * @param Request $request
     */
    public function store(Request $request)
    {

$request->validate(

           [
                'category'          => 'required',
                'company_name'      => 'required|min:2',
                'am_required'       => 'required|integer',
                'percentage'        => 'required|integer',
                'description'       => 'required',
                'objectives'        => 'required|min:5'
            ],
             [
            'category.required'          => 'Обязательное поле',
            'company_name.required'      => 'Обязательное поле',
            'company_name.min'           => 'Введите не менее 2 символов',
            'am_required.required'       => 'Обязательное поле',
            'am_required.integer'        => 'Введите только цифры',
            'percentage.required'        => 'Обязательное поле',
            'percentage.integer'         => 'Введите только цифры',
            'description.required'       => 'Обязательное поле',
            'objectives.required'        => 'Обязательное поле',
            'objectives.min'             => 'Введите не менее 5 символов'
            ]

               );

        if($request->share_progress == 'on'){
            $share_progress = $request->share_progress;
        }else{
            $share_progress = 'off';
        }
        if ($request->company_logo) {
            $imageName = auth()->user()->id . '-' . time() . '.' . $request->company_logo->extension();
            $request->company_logo->storeAs('public/uploads', $imageName);
        }else{
            $imageName = "";
        }
        if ($request->urgently == 'on'){
            $urgently = 1;
        }else{
            $urgently = 0;
        }
            $investment = new Investment();
        $investment->company_name = $request->company_name;
        $investment->user_id      = auth()->user()->id;
        $investment->cat_id       = $request->category;
        $investment->company_logo = $imageName;
        $investment->description  = $request->description;
        $investment->am_required  = $request->am_required;
        $investment->percentage   = $request->percentage;
        $investment->objectives   = $request->objectives;
        $investment->urgently     = $urgently;
        $investment->share_progress = $share_progress;
        $investment->save();
        if ($request->hasfile('images')) {
            $images = $request->file('images');

            foreach($images as $image) {
                $name = auth()->user()->id.'-'.uniqid().'-'.time().'.'.$image->getClientOriginalName();
                Image::create([
                    'name'      => $name,
                    'add_id'    => $investment->id,
                    'add_type'  => 'investment'
                ]);
                $image->storeAs('public/investment_gallery', $name);
            }
        }
        return route('investment.preview',$investment->id);
    }
    public function preview($id){
        $investment = Investment::where('id', '=', $id)->first();
        $images = Image::where('add_id', '=', $id)
                        ->where('add_type', '=', 'investment')
                        ->get();
        return view('add_preview', compact('investment','images'));
    }
    public function change_status($id){
        $investment = Investment::where('id', '=', $id)->first();
        $investment->status = '1';
        if($investment->save()){
            return  redirect()->route('business.single',['name'=>'investment','id'=>$investment->id]);
        }else{
            return redirect()->back()->withErrors(['status'=>'Что то пошло не так']);
        }


    }
    public function invest(Request $request){
        $investment = Investment::find($request->investment_id);
        $invest = (int)$request->invest_price;
        $investment->am_collected += $invest;
        $investment->save();
        Invest::query()->Create([
           'user_id'       => auth()->user()->id,
           'investment_id' => $request->investment_id,
           'invest_price'  => $invest
        ]);
        return redirect()->back()->with("invest_success","Вы успешно инвестировали $invest рублей в этот проект");
    }
}
