<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\Category;
use App\Models\Image;
use App\Models\Investment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $investments =  Investment::all();
        $businesses = Business::all();
        return response()->json([
            "categories"  => $categories,
            "investments" => $investments,
            "businesses"  => $businesses
        ]);
    }

    /**
     * Show the form for creating a new Project.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return response()->json([
            "categories" => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *Show the project single page (Business || Investment)
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!request('type'))
        {
            return response()->json([
                "error" => "The Type parameter is empty"
            ]);
        }
        if (request('type','') == 'investment'){
            $add = Investment::find($id);
            $add_images = Image::query()
                ->where('add_id',"=",$id)
                ->where('add_type',"=",request('type'))
                ->get();
            return response()->json([
                "add"    => $add,
                "images" => $add_images
            ]);
        }elseif (request('type') == 'business'){
            $add = Business::find($id);
            $add_images = Image::query()
                ->where('add_id',"=",$id)
                ->where('add_type',"=",request('type'))
                ->get();
            return response()->json([
                "add"    => $add,
                "images" => $add_images
            ]);
        }
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

    /**
     * @param $id
     * Show users who invested to current investment project
     * @return \Illuminate\Http\JsonResponse
     */
    public function showInvestors($id)
    {
        if(Investment::find($id)){
            $invests_users =  Investment::find($id)->invests()->with('user')->get();
            return response()->json([
               "invests_users" => $invests_users
            ]);
            }
        else
        {
            return response()->json([
                "error" => "Invests with current id is not found"
            ],404);
        }
    }

}
