<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Category;
use App\Models\Investment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\DB;
use PHPUnit\Util\Json;
use Symfony\Component\Console\Input\Input;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $request->validate([
            'search' => 'required'
        ]);
        $search = $request->search;
        $business = Business::where('company_name', 'LIKE', "%{$search}%")->get();
        $investment = Investment::where('company_name', 'LIKE', "%{$search}%")->get();
        return view('search', compact('business', 'investment', 'search'));
    }

    public function cat_search(Request $request)
    {

        $category_ids = $request->tmp;
        $businesses = Business::whereIn('cat_id',$category_ids)->get();
        $investments = Investment::whereIn('cat_id', $category_ids)->get();


            return view('cat_search',compact('businesses','investments'));

    }
}

