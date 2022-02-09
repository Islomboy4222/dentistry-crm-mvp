<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class SearchController extends Controller
{
    public function index()
    {
        return view('patients.index');
    }


    public function search(Request $request)
    {
        $term = $request->post('term');
        if ($term != '') 
            $term = '%'.trim($term).'%';
            $search = Patient::where('first_name', 'LIKE', $term)
                           ->orWhere('last_name', 'LIKE', $term)
                           ->orWhere('phone_number', 'LIKE', $term)
                           ->paginate(10);
            // dd($search);
        return view('patients.search', compact('search'));
    }
}
