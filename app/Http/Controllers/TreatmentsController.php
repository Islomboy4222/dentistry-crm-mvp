<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Treatment;
use App\Models\Patient;

class TreatmentsController extends Controller
{
    public function treatments($id)
    {
        $treatments = Treatment::$TYPE;

        return view('treatments.create', compact('treatments','id'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'patient_id' => 'required',
            'tooth_position' => 'required'
        ]);

        $treatments = [
            'patient_id' => $request->post('patient_id'),
            'treated_id' => $request->post('treated_id'),
            'tooth_position' => $request->post('tooth_position')
        ];

        Treatment::create($treatments);

        return redirect()->route('patients.show',$request->id)->with('success', "Muolaja qo'shildi");
        
    }
}
