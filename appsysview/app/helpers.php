<?php
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

if(!function_exists('limitmanueltext')){
    function limitmanueltext($content,$limit=false){

        if (strlen($content) > 10)
            $new_string = substr($content, 0, $limit) . '...';
        return $new_string;
        //return $content;
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
