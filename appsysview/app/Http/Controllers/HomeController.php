<?php

namespace App\Http\Controllers;

use App\Helpingview;
use App\Partner;
use App\Skill;

class HomeController extends Controller
{

    public function index(){
        $helpingview  = Helpingview::where('status','1')->orderBy('level', 'ASC')->limit(3)->get();

        $skill = Skill::where('status','1')->orderBy('level', 'ASC')->limit(4)->get();

        $partner = Partner::where('status','1')->orderBy('level', 'ASC')->limit(8)->get();
        //dd($partner);
        return view('home/home',compact('partner','skill','helpingview'));
    }

    public function parnerliste(){
        $partner = Partner::where('status','1')->orderBy('level', 'ASC')->paginate(8);
        return view('home/partnerlist',compact('partner'));
    }










}
