<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\InvestmentRequest;
use App\Models\Image;
use App\Models\Invest;
use App\Models\Investment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InvestmentRequest $request)
    {
        $user_id = auth('sanctum')->user()->id;

        if($request->share_progress == 'on'){
            $share_progress = $request->share_progress;
        }else{
            $share_progress = 'off';
        }
        if ($request->company_logo) {
            $imageName = $user_id . '-' . time() . '.' . $request->company_logo->extension();
            $request->company_logo->storeAs('public/uploads', $imageName);
        }else{
            $imageName = "";
        }
        $investment = new Investment();
        $investment->company_name = $request->company_name;
        $investment->user_id      = $user_id;
        $investment->cat_id       = $request->category;
        $investment->company_logo = $imageName;
        $investment->description  = $request->description;
        $investment->am_required  = $request->am_required;
        $investment->percentage   = $request->percentage;
        $investment->objectives   = $request->objectives;
        $investment->share_progress = $share_progress;
        $investment->save();
        $Investment_with_images =  Investment::with('images')->find($investment->id);
        if ($request->hasfile('images')) {
            $images = $request->file('images');

            foreach($images as $image) {
                $name = $user_id.'-'.uniqid().'-'.time().'.'.$image->getClientOriginalName();
                Image::create([
                    'name'      => $name,
                    'add_id'    => $investment->id,
                    'add_type'  => 'investment'
                ]);
                $image->storeAs('public/investment_gallery', $name);
            }
        }
        $Investment_with_images =  Investment::with('images')->find($investment->id);
        return  response()->json([
            "Investment_with_images" => $Investment_with_images,
        ]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function change_status($id){
        $investment = Investment::find($id);
        $investment->status = '1';
        if($investment->save()){
            return  \response()->json([
                "Success"  => "Investment status was successfully changed"
            ],201);
        }else{
            return  response()->json([
                "Error"  => "something went wrong"
            ],400);
        }
    }

    public function invest(Request $request){
        $user_id = auth('sanctum')->user()->id;
        $investment = Investment::find($request->investment_id);
        $invest = (int)$request->invest_price;
        $investment->am_collected += $invest;
        $investment->save();
        Invest::query()->Create([
            'user_id'       => $user_id,
            'investment_id' => $request->investment_id,
            'invest_price'  => $invest
        ]);

        return response()->json([
            "invest_price" => $invest,
            "message" => "success you are successfully invested to this project"
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
