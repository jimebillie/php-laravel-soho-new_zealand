<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function MenuAllDay_ALL(){
        $data = DB::select("CALL MenuAllDay_ALL()");
        return $data;
    }
    public function CountMenuAllDay_Sub_id($id){
        $data = DB::select("CALL CountMenuAllDay_Sub_id($id)");
        return $data;
    }
    public function MenuAllDay_Sub_id($id){
        $data = DB::select("CALL MenuAllDay_Sub_id($id)");
        return $data;
    }
    public function Select_Menu_Cocktail_All(){
        $data = DB::select("CALL Select_Menu_Cocktail_All()");
        return $data;
    }

}
