<?php

namespace App\Http\Controllers;
use App\Advisor;
use App\Homeslider;
use App\Ourcompagnie;
use App\Project;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Bringing;
use App\Helpingview;
use App\Howareyou;
use App\Partner;
use App\Serviceoffert;
use App\Skill;
use App\Founder;

class HomeController extends Controller
{



    public function index(){
        //AVant on veriri isi les tables exite

            $slideview  = Homeslider::where('status','1')->orderBy('level', 'ASC')->get();

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
        $partner = Partner::where('status','1')->orderBy('level', 'ASC')->Paginate(8);
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

    public function aboutpage(){
        $advisor = Advisor::where('status','1')->limit(4)->get();

        $ourcomapgnie = Ourcompagnie::where('status','1')->limit(1)->get();

        $founder  = Founder::where('status','1')->limit(1)->get();
        //dd($ourcomapgnie);
        return view('home/about',compact('ourcomapgnie','founder','advisor'));
    }

    public function projetpage(){
        $projetdata  = Project::where('status','1')->get();
        //dd($ourcomapgnie);
        return view('home/projects',compact('projetdata'));
    }








}
