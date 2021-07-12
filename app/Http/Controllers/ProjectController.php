<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use App\Models\Business;
use App\Models\Category;
use App\Models\Company;
use App\Models\Image;
use App\Models\Investment;
use App\Models\Survey;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;


class ProjectController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {

        $categories = Category::all();
        $investments = Investment::all();
        $surveys = Survey::all();
        $businesses = Business::all();
        $images = Image::all();
        $results = $investments->concat($surveys);
        $results = $results->sortByDesc('created_at');
        $count = $results->count();
        $results = $results->forPage($request->get('page',1),4)->toArray();
        $results = new LengthAwarePaginator($results,$count,4,$request->get('page',1));


        return view('projects', compact('businesses', 'categories','results','images'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function addToBookmarks(Request $request)
    {
        if ($request->add == true) {
            Auth::user()->bookmarks()->create(['add_id' => $request->id, 'add_type' => $request->type]);
            return response()->json('success', '200');
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function remove_bookmark(Request $request)
    {

        if ($request->remove == true) {
            $bookmark = Auth::user()->bookmarks()
                ->where('add_id', $request->id)
                ->where('add_type', $request->type)
                ->first();

            Auth::user()->bookmarks()->detach($bookmark->id);
            Bookmark::find($bookmark->id)->delete();
            return response()->json('success', '200');
        }
    }

    /**
     * @param $addType
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create($addType)
    {
        $categories = DB::table('categories')->get();

        if ($addType == "business") {
            return view('create_add_survey', compact('categories'));
        }
        else{
            return view('create_add', compact('addType', 'categories'));
        }

    }


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function chooseType()
    {
        return view('add');
    }

    /**
     * @param $name
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function single($name,$id)
    {

        if ($name == 'investment'){
            $investment = Investment::find($id);
            $add_images = Image::query()
                ->where('add_id',"=",$id)
                ->where('add_type',"=",$name)
                ->get();
            return view('add_single_page',compact('investment','add_images'));
        }elseif ($name == 'business'){
            $business = Survey  ::find($id);
            $add_images = Image::query()
                ->where('add_id',"=",$id)
                ->where('add_type',"=",$name)
                ->get();
            return view('add_single_page',compact('business','add_images'));
        }
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function myProjectsShow(){
        $categories = Category::all();
        $invests = Auth::user()->investedTo()->select('invests.investment_id')->groupBy('invests.investment_id')->with('investment')->get();
        $businesses = Auth::user()->businesses;
        return view('my_projects',compact('categories','invests','businesses'));
    }

    public function showInvestors($id){
       $investors = Investment::find($id)->invests()->with('user')->get();
        return view('investors',compact('investors'));
    }
    public function filter(Request $request)
    {
        $arr = [];
        $data = $request->all();
        foreach ($data as $value)
        {
          $arr[] = Business::where('cat_id',$value)->get();
          $arr[] = Investment::where('cat_id',$value)->get();
        }
        dd($arr);
    }

}
