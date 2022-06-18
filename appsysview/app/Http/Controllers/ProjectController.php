<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function messageerreur(){

        //Les messages
        $message_fr = [
            'backimg.required'=> 'Vous devez mettre une image pour le background',
            'backimg.max'    => 'The :attribute ne doit pas depasser cette valeur  :max Bite. ',
            'backimg.mimes' => 'Le type format de l\'image n\'est pas prise en charge',

            'title.required'=> 'Le champ titre ne doit pas etre vide',
            'title.max'=> 'Le champ titre ne doit pas depasser les :max caractères',
            'title.min'=> 'Le champ titre ne doit pas inferieur les :min caractères',

            'post.required'=> 'Le champ Poste ne doit pas etre vide',
            'post.max'=> 'Le champ Poste ne doit pas depasser les :max caractères',
            'post.min'=> 'Le champ Poste ne doit pas inferieur les :min caractères',


            'link.required'=> 'Le champ Url ne doit pas etre vide',
            'link.url'=> 'Ce n\'est pas un adresse et doit ecrire de cette facon "http://www.mondomaine.com"',
        ];
        return  $message_fr;


    }








    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Project::orderBy('updated_at', 'desc')->get();
        //dd($data);
        return view('admin/projects/liste',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/projects/new');
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
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param  \App\Project $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Project $project)
    {
        //$data=$project;
        //dd($request->all());
        $id= $request->projectdatum;
        $data=Project::Where('id',$id)->first();
        //dd($service);
        if($data !=NULL){
            return view('admin/projects/edit',compact('data'));
        }else{
            //abort('404');
            return redirect()->route('listprojectdata');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param  \App\Project $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Project $project)
    {
        //dd('del',$request->id,$project->id);
        Project::destroy($request->id);
        return redirect()->route('listprojectdata');
    }



    //recuperon et supression total les elementys
    public function sofderestore()
    {
        //afficher les elements suprimers
        $data = Project::onlyTrashed()->get();;
        return view('admin/projects/del', compact('data'));
    }

    //restauration des element suprimer par son ID
    public function restoredestroy(Request $request)
    {
        //dd($request->id);
        Project::onlyTrashed()
            ->where('id', $request->id)
            ->restore();
        return redirect()->route('listprojectdata');
    }


    //supression definitivement de la table
    public function destoredefinitely(Request $request)
    {
        //dd($request->id);
        Project::onlyTrashed()
            ->where('id', $request->id)
            ->forceDelete();
        return redirect()->route('listprojectdata');
    }





    public function newdata(){
        //dd('new data');
        $user = '1';
        $today = now();

        $data = Project::insert([

            [
                'title'=>'Anual Company Growth',
                'backimg' =>'default/project-banner.jpg',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim aquis nostrud
                                                    exercitatio ullamco laboris nisi ut aliquip ex ea commodo consequat.',

                'link'=>NULL,
                'level' => '1',
                'status' => '1',
                'langues' => '1',
                'iduser' => $user,
                'created_at'=>$today,
            ],
            [
                'title'=>'Estelle Solution',
                'backimg' =>'default/project-banner.jpg',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim aquis nostrud
                                                    exercitatio ullamco laboris nisi ut aliquip ex ea commodo consequat.',

                'link'=>NULL,
                'level' => '2',
                'status' => '1',
                'langues' => '1',
                'iduser' => $user,
                'created_at'=>$today,
            ],
            [
                'title'=>'Insurance',
                'backimg' =>'default/project-banner.jpg',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim aquis nostrud
                                                    exercitatio ullamco laboris nisi ut aliquip ex ea commodo consequat.',

                'link'=>NULL,
                'level' => '3',
                'status' => '1',
                'langues' => '1',
                'iduser' => $user,
                'created_at'=>$today,
            ],
            [
                'title'=>'Estelle Solution',
                'backimg' =>'default/project-banner.jpg',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim aquis nostrud
                                                    exercitatio ullamco laboris nisi ut aliquip ex ea commodo consequat.',

                'link'=>NULL,
                'level' => '4',
                'status' => '1',
                'langues' => '1',
                'iduser' => $user,
                'created_at'=>$today,
            ]
        ]);

        if($data == true){
            return redirect()->route('listprojectdata');
        }else{
            return 'erreur';
        }

    }













}
