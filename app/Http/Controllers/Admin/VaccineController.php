<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vaccine;
use Illuminate\Http\Request;

class VaccineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vaccines = Vaccine::orderBy('name')->get();
        return view('admin.vaccine.index',compact('vaccines'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['name'=>'required']);
        Vaccine::create(['name'=>$request->name]);
        return redirect()->back()->with('message','vakcina sikeresen elmentve');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vaccine  $vaccine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vaccine $vaccine)
    {
        $this->validate($request,['name'=>'required']);
        $vaccine->update(['name'=>$request->name]);
        return redirect()->back()->with('message','vakcina sikeresen módosítva');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vaccine  $vaccine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vaccine $vaccine)
    {
        $vaccine->delete();
        return redirect()->back()->with('message','vakcina sikeresen törölve');
    }
}
