<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class SearchController extends Controller
{
       public function index(Request $request)
    {
        $query = $request->input('query');

        // Recherche dans les services
        $results = Service::where('name', 'LIKE', "%{$query}%")
                    ->get();

        return view('service-detail', compact('results', 'query'));
    }

}
