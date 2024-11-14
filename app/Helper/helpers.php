<?php

use App\Models\Post;
use App\Models\Minister;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;

if (!function_exists('format_date')) {
    function format_date($date)
    {
        return \Carbon\Carbon::parse($date)->format('d/m/Y');
    }
}
if (!function_exists('bySlug')) {
    function bySlug($slug, $table,$col=null)
    {
        if($col==null){
            return $table::where([['slug', $slug], ['is_active', true]])->first();
        }else{
            $post=Minister::where('fullname', 'like', '%' . $slug . '%')->first();
            //  dd($post->posts);
             if ($post->posts) {
                return $post->posts;
                // // Récupérer les posts de cet auteur
                // $posts = $post->posts; // Cela utilise la relation définie

            }
        }
    }
}
if (!function_exists('creatSlug')) {
    function creatSlug($id)
    {
        $res = Post::where([['id', $id], ['is_active', true]])->first();
        $ret = "";
        //  dd($res);
        if ($res->slug == null) {
            $res->slug = Str::slug($res->title); // Mettez à jour avec la valeur du formulaire
            $ret = $res->save();
        } else {
            $ret = $res->slug;
        }
        return $ret;
    }
}
if (!function_exists('isNull')) {
    function isNull($var)
    {
        return $var !== null ? true : false;
    }
}

if (!function_exists('getTitle')) {
    function getTitle($name)
    {
        $titre = [];
        switch ($name) {
            case 'home':
                return $titre = ['titre' => "Accueil", 'retour' => "home"];
                break;
            case 'about':
                return $titre = ['titre' => "Apropos", 't2' => "Qui sommes-nous", 'Pretour' => "home", 'PretourT' => "Accueil"];
                break;
            case 'services':
                return $titre = ['titre' => "Nos services", 't2' => "Tous nos services", 'Pretour' => "home", 'PretourT' => "Accueil"];
                break;
            case 'domaines':
                return $titre = ['titre' => "Nos domaines", 't2' => "Tous nos domaines d'activités", 'Pretour' => "home", 'PretourT' => "Accueil"];
                break;
            case 'equipe':
                return $titre = ['titre' => "Notre équipe", 't2' => "Toute l'équipe", 'Pretour' => "home", 'PretourT' => "Accueil"];
                break;
            case 'projets':
                return $titre = ['titre' => "Nos projets", 't2' => "Tous nos projets", 'Pretour' => "home", 'PretourT' => "Accueil"];
                break;
            case 'publications':
                return $titre = ['titre' => "Nos publications", 't2' => "Toutes nos publications", 'Pretour' => "home", 'PretourT' => "Accueil"];
                break;
            case 'contact':
                return $titre = ['titre' => "Contact", 't2' => "Contactez-nous", 'Pretour' => "home", 'PretourT' => "Accueil"];
                break;
            case 'detailTeam':
                return $titre = ['titre' => "Activité", 't2' => "Detail de l'activité", 'Pretour' => "home", 'PretourT' => "Accueil", 't3' => "Activités", 'retourT3' => "activites"];
                break;
            case 'detailDomaine':
                return $titre = ['titre' => "Detail du domaine d'expertise", 't2' => "Detail du domaine d'expertise", 'Pretour' => "home", 'PretourT' => "Accueil", 't3' => "domaines", 'retourT3' => "domaines"];
                break;
            case 'detailProjet':
                return $titre = ['titre' => "Detail du projet", 't2' => "Detail du projet", 'Pretour' => "home", 'PretourT' => "Accueil", 't3' => "projets", 'retourT3' => "projets"];
                break;
            case 'detailBlog':
                return $titre = ['titre' => "Detail de la publication", 't2' => "Detail de la publication", 'Pretour' => "home", 'PretourT' => "Accueil", 't3' => "publications", 'retourT3' => "publications"];
                break;
            case 'detailService':
                return $titre = ['titre' => "Detail du service", 't2' => "Detail du service", 'Pretour' => "home", 'PretourT' => "Accueil", 't3' => "services", 'retourT3' => "services"];
                break;

            default:
                return $titre = ['titre' => "", 't2' => "", 'Pretour' => "home", 'PretourT' => "Accueil"];
                break;
        }
    }
}
if (!function_exists('active')) {
    function active($name)
    {
        $titre = Route::currentRouteName();
        switch ($name) {
            case $titre:
                return "current";
                break;

            default:
                return "";
                break;
        }
    }
}
