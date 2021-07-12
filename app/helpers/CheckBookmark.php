<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

if (!function_exists('check_bookmark')){
    function check_bookmark($add_id,$add_type){
           $check = Auth::user()->bookmarks()
            ->where('add_id',  $add_id)
            ->where('add_type', $add_type)
            ->exists();
        if (!empty($check) ){

            return true;
        }else{
            return false;
        }
    }
}
