<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class SearchPosts extends Component
{
    public $query = 'silas'; // Le contenu du champ de recherche
    public $results = []; // Résultats de la recherche

    // Fonction exécutée chaque fois que $query change
    // public function updatedQuery()
    // {
    //     dd('updatedQuery called');
    //     $this->results = Post::where('title', 'like', '%' . $this->query . '%')
    //         ->orWhere('description', 'like', '%' . $this->query . '%')
    //         ->orWhereHas('minister', function ($query) {
    //             $query->where('fullname', 'like', '%' . $this->query . '%');
    //         })
    //         ->orderBy('date_publication', 'desc')
    //         ->take(10) // Limite les résultats pour optimiser la requête
    //         ->get();
    //     dd($this->results); // Arrête et affiche les résultats pour déboguer
    // }

    public function render()
    {
        // dd('updatedQuery called');
        return view('livewire.search-posts', [
            'results' => $this->results,
        ]);
    }
}
