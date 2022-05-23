<?php

namespace App\Http\Controllers;

use App\Bringing;
use App\Helpingview;
use App\Howareyou;
use App\Partner;
use App\Skill;

class HomeController extends Controller
{

    public function index(){
        $bringing  = Bringing::where('status','1')->limit(1)->get();

        $howareu  = Howareyou::where('status','1')->limit(1)->get();

        $helpingview  = Helpingview::where('status','1')->orderBy('level', 'ASC')->limit(3)->get();

        $skill = Skill::where('status','1')->orderBy('level', 'ASC')->limit(4)->get();

        $partner = Partner::where('status','1')->orderBy('level', 'ASC')->limit(8)->get();
        //dd($partner);
        return view('home/home',compact('partner','skill','helpingview','howareu','bringing'));
    }

    public function parnerliste(){
        $partner = Partner::where('status','1')->orderBy('level', 'ASC')->paginate(8);
        return view('home/partnerlist',compact('partner'));
    }










}
