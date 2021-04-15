<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
       $patients = Patient::with('vaccine')->orderBy('created_at','desc')->get();

       return view('admin.registrations.index',compact('patients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required', 'email' => 'required', 'vaccine' => 'required']);
        Patient::create([
            'name' => $request->name,
            'email' => $request->email,
            'vaccine_id' => $request->vaccine,
        ]);

        return redirect()->back()->with('message', 'Sikeresen regisztrált az oltásra.');
    }

}
