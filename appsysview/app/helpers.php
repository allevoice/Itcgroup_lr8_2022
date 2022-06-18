<?php

use App\Headerpage;
use Illuminate\Support\Arr;
//On peut ecrire tous les fonction necessaire pour notre projet

//affichages des images depuis une models



/*
if(!function_exists('photovoiturehelp')){
    function photovoiturehelp($id, $limite=NULL){
        return  App\Models\Photo::Photovoiture($id, $limite);
    }
}
*/


if(!function_exists('dataviewhead')){
    function dataviewhead($pagename,$Level){
           $headdata = App\Headerpage::Where('page',$pagename)->Where('level',$Level)->Where('status',1)->get();
        return $headdata;
    }
}





if(!function_exists('projetlisteswitch')){
    function projetlisteswitch($id=NULL){

        if($id == NULL){
            $stliste = [
                '0' => 'All',
                '1' => 'Installation',
                '2' => 'Web development',
                '3' => 'Security',
                '4' => 'Data Management',
            ];
            return $stliste;
        }else{
            switch ($id) {
                case 0: return "All";break;
                case 1: return "Installation";break;
                case 2: return "Web development";break;
                case 3: return "Security";break;
                case 4: return "Data Management";break;
            }
        }


    }
}





if(!function_exists('detpageinfo')){
    function detpageinfo($pagename=NULL,$Level=NULL){
        if($pagename!=NULL){
            switch ($pagename) {
                case 1: return "Home";break;
                case 2: return "About";break;
                case 3: return "Service";break;
                case 4: return "Procjet";break;
                case 5: return "Blog";break;
                case 6: return "Contact";break;
                case 7: return "Patner";break;
            }
        }elseif ($Level!=NULL){
            switch ($Level) {
                case 'a': return "Premier";break;
                case 'b': return "Deuxieme";break;
                case 'c': return "Troisieme";break;
            }
        }else{
            return 'Non definie';
        }


    }
}

if(!function_exists('levelback')){
    function levelback($id=NULL){
        if($id == NULL){
            $stliste = [
                '0' => 'Non definis',
                '1' => 'First',
                '20' => 'Default',
            ];
            return $stliste;
        }else{
            return $id == 1 ? 'First' : 'Default';
        }
    }
}


if(!function_exists('statuscmdswitch')){
    function statuscmdswitch($id=NULL){

        if($id == NULL){
            $stliste = [
                    '0' => 'Non',
                    '1' => 'Yes',
                ];
            return $stliste;
        }else{
            switch ($id) {
                case 1:
                    return "Yes";break;
                case 0:
                    return "Non";break;
            }
        }


    }
}




if(!function_exists('statuscmd')){
    function statuscmd($id=NULL){

        if($id == NULL){
            $stliste = [
                    '0' => 'Non definis',
                    '1' => 'Active',
                    '2' => 'Desactiver',
                ];
            return $stliste;
        }else{
            switch ($id) {
                case 0:
                    return "Non definis";break;
                case 1:
                    return "Active";break;
                case 2:
                    return "Desactiver";break;
            }
        }


    }
}


if(!function_exists('limitemtxt')){
    function limitemtxt($content,$limit=false){
        return substr($content, 0, $limit);
    }
}




if(!function_exists('levelcmd')){
    function levelcmd($id=NULL){
        if($id==NULL){
            $liste = [
                    '0' => 'Non definis',
                    '1' => 'Premier',
                    '2' => 'Second',
                    '3' => 'Troisieme',
                    '4' => 'Quatrieme',
                    '5' => 'Cinquieme',
                    '6' => 'Sisieme',
                ];
            return $liste;
        }else{
            switch ($id) {
                case 0: return "Non definis";break;
                case 1: return "Premier";break;
                case 2: return "Second";break;
                case 3: return "Troisieme";break;
                case 4: return "Quatrieme";break;
                case 5: return "Cinquieme";break;
                case 6: return "Sisieme";break;
            }
        }
    }
}

if(!function_exists('testhelping')){
    function testhelping($id=NULL){
        if($id==NULL){
            return 'Monteste helping';
        }else{
           return 'Mon test Helping with id '.$id;
        }
    }
}


?>
