<?php

namespace App\Http\Controllers;

use App\Http\Requests\BusinessRequest;
use App\Models\Business;
use App\Models\Image;
use App\Models\Investment;
use App\Models\Survey;
use App\Models\User;
use App\Http\Requests\SurveyRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use \Illuminate\Support\Facades\Session;

class BusinessController extends Controller
{
    /**
     * Create Business advert
     * @param BusinessRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(BusinessRequest $request)
    {

//        if ($request->company_logo) {
//            $imageName = auth()->user()->id . '-' . time() . '.' . $request->company_logo->extension();
//            $request->company_logo->storeAs('public/uploads', $imageName);
//        } else {
//            $imageName = "";
//        }
//        if (!$urgently = $request->urgently) {
//            $urgently = 0;
//        } else {
//            $urgently = 1;
//        }
//        $business = new Business();
//        $business->company_name = $request->company_name;
//        $business->user_id = auth()->user()->id;
//        $business->cat_id = $request->category;
//        $business->company_logo = $imageName;
//        $business->description = $request->description;
//        $business->cost = $request->cost;
//        $business->monthly_income = $request->monthly_income;
//        $business->city = $request->city;
//        $business->urgently = $urgently;
//        $business->save();
//        if ($request->hasfile('images')) {
//            $images = $request->file('images');
//            foreach ($images as $image) {
//                $name = auth()->user()->id . '-' . uniqid() . '-' . time() . '.' . $image->getClientOriginalName();
//                Image::create([
//                    'name' => $name,
//                    'add_id' => $business->id,
//                    'add_type' => 'business'
//                ]);
//                $image->storeAs('public/business_gallery', $name);
//            }
//        }
//        return redirect()->route('business.preview', $business->id);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function preview($id)
    {
        $business = Business::where('id', '=', $id)->first();
        $images = Image::where('add_id', '=', $id)
            ->where('add_type', '=', 'business')
            ->get();
        return view('add_preview', compact('business', 'images'));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function change_status($id)
    {
        $business = Business::where('id', '=', $id)->first();
        $business->status = '1';
        if ($business->save()) {
            return redirect()->route('business.single', ['name' => 'business', 'id' => $business->id]);
        } else {
            return redirect()->back()->withErrors(['status' => 'Что то пошло не так']);
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function purchase($id)
    {
        if (!Auth::user()->business($id)->first()) {
            Auth::user()->business()->attach($id);
        }
        $business=Business::find($id);
        $user_id = $business->user_id;
        return view('purchase_business',compact('user_id'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function sentence($id)
    {
        $sentences = Business::find($id)->users;
        return view('business_sentence', compact('sentences'));
    }

    public function showSurvey()
    {
        return view('create_add_survey');
    }

    public function createSurvey(Request $request)
    {

        if ($request->step == 'step1') {
            $input = $request->except(['_token', 'images', 'images1']);

            $messages = [
                'name.required' => 'Обязательное поле',
                'category.required' => 'Обязательное поле',
                'status_business.required' => 'Обязательное поле',
                'location.required' => 'Обязательное поле',
                'site.required' => 'Обязательное поле',
                'price.required' => 'Обязательное поле',
                'price.numeric' => 'должен быть числом',
                'reason_for_sale.required' => 'Обязательное поле',
            ];

            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'category' => 'required',
                'status_business' => 'required',
                'reason_for_sale' => 'required',
                'location' => 'required',
                'price' => 'required|numeric',
            ], $messages);

//            if ($request->hasfile('logo')) {
//                $logo = $request->logo;
//                $logoName = time() . rand(1, 100) . '.' . $logo->extension();
//                $logo->storeAs('public/uploads', $logoName);
//                $input['logo'] = $logoName;
//            }
//            if ($request->urgently == 'on'){
//                $urgently = 1;
//            }else{
//                $urgently = 0;
//            }

            if ($request->hasfile('images1')) {
                $images = $request->file('images1');
                $img_arr = [];
                foreach ($images as $image) {
                    $name = auth()->user()->id . '-' . uniqid() . '-' . time() . '.' . $image->getClientOriginalName();
                    $img_arr[] = $name;
                    $image->storeAs('public/business_gallery', $name);

                }
                Session::put('images', $img_arr);

            }


            if (!$validator->passes()) {
                return response()->json(['error' => $validator->errors()]);
            }

            Session::put('business_info_step1', $input);

            return response()->json(['success' => 'Added new records.', 'input' => $input]);

        }
        if ($request->step == 'step2') {
            $messages = [
                'Organizational_legal_form.required' => 'Обязательное поле',
                'description.required' => 'Обязательное поле',
                'employee_count.required' => 'Обязательное поле',
                'count_management_personnel.required' => 'Обязательное поле',
                'employee_count.numeric' => 'должен быть числом',
                'count_management_personnel.numeric' => 'должен быть числом',
            ];
            $validator = Validator::make($request->all(), [
                'organizational_legal_form' => 'required',
                'description' => 'required',
                'employee_count' => 'required|numeric',
                'count_management_personnel' => 'required|numeric',
            ], $messages);
            if (!$validator->passes()) {
                return response()->json(['error' => $validator->errors()]);
            }
            $input = $request->except(['_token']);

            Session::put('business_info_step2', $input);
            return response()->json(['success' => 'Added new records.', 'input' => $input]);
        }
        if ($request->step == 'step3') {
            $messages = [
                'area.required' => 'Обязательное поле',
                'residential_nonresidential.required' => 'Обязательное поле',
                'floor.required' => 'Обязательное поле',
                'floor.numeric' => 'должен быть числом',
            ];
            $validator = Validator::make($request->all(), [
                'area' => 'required|in:Аренда,Собственность',
                'residential_nonresidential' => 'required|in:Жилое,Нежилое',
                'floor' => 'required|numeric',
            ], $messages);
            if (!$validator->passes()) {
                return response()->json(['error' => $validator->errors()]);
            }
            $input = $request->except(['_token']);

            Session::put('business_info_step3', $input);

            return response()->json(['success' => 'Added new records.', 'input' => $input]);
        }
        if ($request->step == 'step4') {
            $messages = [
                'subject.required' => 'Обязательное поле',
                'equipment.required' => 'Обязательное поле',
                'licenses.required' => 'Обязательное поле',
                'area_m2.required' => 'Обязательное поле',
                'area_m2.numeric' => 'должен быть числом',
            ];
            $validator = Validator::make($request->all(), [
                'subject' => 'required',
                'area_m2' => 'required|numeric',
                'equipment' => 'required',
                'licenses' => 'required',
            ], $messages);
            if (!$validator->passes()) {
                return response()->json(['error' => $validator->errors()]);
            }
            $input = $request->except(['_token']);
            Session::put('business_info_step4', $input);

            return response()->json(['success' => 'Added new records.', 'input' => $input]);
        }
        if ($request->step == 'step5') {
            $validator = Validator::make($request->all(), [
                'avg_monthly' => 'numeric',
                'wage_fund' => 'required|numeric',
                'rent_price' => 'required|numeric',
                'cost_utility_bills' => 'required|numeric',
                'operating_expenses' => 'required|numeric',
                'net_profit_month' => 'required|numeric',
                'business_payback_period' => 'required',
                'debts_fines' => 'required',

            ]);
            if (!$validator->passes()) {
                return response()->json(['error' => $validator->errors()]);
            }
            $input = $request->except(['_token']);


//            Session::put('business_info_step5', $input);
//            dd(Session::get('business_info_step2')['count_management_personnel']);
            $survey = Survey::create([
                'user_id' => auth()->user()->id,
                'name' => Session::get('business_info_step1')['name'],
                'category' => Session::get('business_info_step1')['category'],
                'status_business' => Session::get('business_info_step1')['status_business'],
                'reason_for_sale' => Session::get('business_info_step1')['reason_for_sale'],
                'location' => Session::get('business_info_step1')['location'],
                'site' => Session::get('business_info_step1')['site'],
                'site_link' => Session::get('business_info_step1')['site_link'],
                'price' => Session::get('business_info_step1')['price'],
                'urgently' => Session::get('business_info_step1')['urgently'],
                'take_calls' => Session::get('business_info_step1')['phone'],
                'organizational_legal_form' => Session::get('business_info_step2')['organizational_legal_form'],
                'description' => Session::get('business_info_step2')['description'],
                'employee_count' => Session::get('business_info_step2')['employee_count'],
                'count_management_personnel' => Session::get('business_info_step2')['count_management_personnel'],
                'area' => Session::get('business_info_step3')['area'],
                'residential_nonresidential' => Session::get('business_info_step3')['residential_nonresidential'],
                'floor' => Session::get('business_info_step3')['floor'],
                'subject' => Session::get('business_info_step4')['subject'],
                'area_m2' => Session::get('business_info_step4')['area_m2'],
                'equipment' => Session::get('business_info_step4')['equipment'],
                'licenses' => Session::get('business_info_step4')['licenses'],
                'avg_monthly' => $request->avg_monthly,
                'wage_fund' => $request->wage_fund,
                'rent_price' => $request->rent_price,
                'cost_utility_bills' => $request->cost_utility_bills,
                'operating_expenses' => $request->operating_expenses,
                'net_profit_month' => $request->net_profit_month,
                'business_payback_period' => $request->business_payback_period,
                'debts_fines' => $request->debts_fines,
            ]);
            $images = Session::get('images');
            foreach($images as $image){
                Image::create([
                    'name' => $image,
                    'add_id' => $survey->id,
                    'add_type' => 'business'
                ]);
            }

            return response()->json(['success' => 'Added new records.', 'input' => $input]);
        }

//        $data = Arr::except($request->all,'_token');
//        Business::find($id)->survey()->create($data);


    }
    public function search(Request $request){

        $search = $request->search;

            $business=Business::where('company_name',"like",'%'.$request->search.'%')->get();
            $investment=Investment::where('company_name',"like",'%'.$request->search.'%')->get();


            return view('search_item',[
                'products' =>$business,
                '$investment' =>$investment,
            ])->render();
//                ->with([
//                'investment_s' => $investment,
//                'business' => $business,
//
//            ]);
          //  return view('/', compact('investment','business'));

//                $data=Business::where('company_name',"like",'%'.$request->search.'%')->get();
//                $data1=Investment::where('company_name',"like",'%'.$request->search.'%')->get();



    }
    public function images(){
        return $this->hasMany(Image::class,'add_id')->where('images.add_type','=','business');
    }
}
