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
            $patients = Patient::where('first_name', 'LIKE', $term)
                           ->orWhere('last_name', 'LIKE', $term)
                           ->orWhere('phone_number', 'LIKE', $term)
                           ->paginate(10);
        return view('patients.index', compact('patients'));
    }
}
