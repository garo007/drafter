<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\Image;
use http\Env\Response;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BusinessController extends Controller
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
    public function store(Request $request)
    {
        $user_id = auth('sanctum')->user()->id;
        if ($request->company_logo) {
            $imageName = $user_id . '-' . time() . '.' . $request->company_logo->extension();
            $request->company_logo->storeAs('public/uploads', $imageName);
        }else{
            $imageName = "";
        }
        $business = new Business();
        $business->company_name = $request->company_name;
        $business->user_id      = $user_id;
        $business->cat_id       = $request->category;
        $business->company_logo = $imageName;
        $business->description  = $request->description;
        $business->cost  = $request->cost;
        $business->monthly_income   = $request->monthly_income;
        $business->city   = $request->city;
        $business->save();
        if ($request->hasfile('images')) {
            $images = $request->file('images');

            foreach($images as $image) {
                $name = $user_id.'-'.uniqid().'-'.time().'.'.$image->getClientOriginalName();
                Image::create([
                    'name'      => $name,
                    'add_id'    => $business->id,
                    'add_type'  => 'business'
                ]);
                $image->storeAs('public/business_gallery', $name);
            }
        }
         $business_with_images =  Business::with('images')->find($business->id);
        return  response()->json([
          "business_with_images" => $business_with_images
        ]);
    }

    /**
     * Change business status from 0 to 1
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function change_status($id){
        $business = Business::find($id);
        $business->status = '1';
        if($business->save()){
            return  \response()->json([
                "Success"  => "Business status was successfully changed"
            ],201);
        }else{
            return  response()->json([
                "Error"  => "something went wrong"
            ],400);
        }
    }

    /**
     * send request for purchase current business
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function purchase($id){
        $user = auth('sanctum')->user();
        if (!$user->business($id)->first()) {
            $user->business()->attach($id);
        }
        return response()->json([
            "success"  => "purcase request is successfully sended"
        ],201);
    }

    /**
     *
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function sentence($id){
        $sentences = Business::find($id)->users;
        return $sentences;
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
