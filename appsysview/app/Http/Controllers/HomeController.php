<?php

namespace App\Http\Controllers;
use App\Homeslider;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Bringing;
use App\Helpingview;
use App\Howareyou;
use App\Partner;
use App\Serviceoffert;
use App\Skill;

class HomeController extends Controller
{

    public function index(){
        $slideview  = Homeslider::where('status','1')->orderBy('level', 'ASC')->get();
        //dd($slideview);

        $serviv  = Serviceoffert::where('status','1')->orderBy('level', 'ASC')->limit(4)->get();

        $bringing  = Bringing::where('status','1')->limit(1)->get();

        $howareu  = Howareyou::where('status','1')->limit(1)->get();

        $helpingview  = Helpingview::where('status','1')->orderBy('level', 'ASC')->limit(3)->get();

        $skill = Skill::where('status','1')->orderBy('level', 'ASC')->limit(4)->get();

        $partner = Partner::where('status','1')->orderBy('level', 'ASC')->limit(8)->get();

        //dd($partner);
        return view('home/home',compact('partner','skill','helpingview','howareu','bringing','serviv','slideview'));
    }

    public function parnerliste(){
        $partner = Partner::where('status','1')->orderBy('level', 'ASC')->paginate(8);
        return view('home/partnerlist',compact('partner'));
    }


    public function serviceofferthome(){
        $serviceoffert = Serviceoffert::where('status','1')->orderBy('level', 'ASC')->paginate(8);
        return  view('home/services',compact('serviceoffert'));
    }



    public function servicedetailshome(Request $request){

            $service = Serviceoffert::where('codeservice',$request->code)->first();
            //dd($service);
            if($service!=NULL){
                return view('home/service_detail',compact('service'));
            }else{
                //abort('404');
                return redirect()->route('services');
            }

    }










}
