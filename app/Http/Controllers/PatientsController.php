<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\User;
use Auth;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::latest()->paginate(5);
        return view('patients.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'middle_name' => 'required|min:3',
            'birth_day' => 'required|date',
        ]);

        $patients = [
            'reg_user_id' => auth()->user()->id,
            'first_name' => $request->post('first_name'),
            'last_name' => $request->post('last_name'),
            'middle_name' => $request->post('middle_name'),
            'birth_day' => $request->post('birth_day'),
        ];

        Patient::create($patients);

        return redirect()->route('patients.index')->with('success', "Bemor ro'yhatdan o'tirildi");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patient::findOrFail($id);
        return view('patients.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $patient = Patient::findOrFail($id);
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_name' => 'required',
            'birth_day' => 'required'
        ]);

        $patient->update([
            'first_name' => $request->post('first_name'),
            'last_name' => $request->post('last_name'),
            'middle_name' => $request->post('middle_name'),
            'birth_day' => $request->post('birth_day'),
            
        ]);

        return redirect()->route('patients.index')->with(['success' => "Bemor ma'lumotlari tahrirlandi"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Patient::findOrFail($id);
        $delete->delete();

        return redirect()->route('patients.index')->with(['delete' => "Bemor ro'yhatdan o'chirildi"]);
    }
}
