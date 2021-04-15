<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shipment;
use App\Models\Vaccine;
use Illuminate\Http\Request;

class ShimpentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shipments = Shipment::orderBy('arrival_date','desc')->with('vaccine')->get();

        $vaccines = Vaccine::orderBy("name")->with('shipments')->get();
        $vaccineSelect = $vaccines->pluck('name', 'id');
        return view('admin.shipment.index',compact('shipments','vaccineSelect'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['quantity'=>'required|numeric|min:1','arrival_date'=>'required']);

        Shipment::create([
            'vaccine_id'=>$request->vaccine,
            'quantity'=>$request->quantity,
            'arrival_date'=>$request->arrival_date
        ]);

        return redirect()->back()->with('message', 'Szállítmány sikeresen elmentve');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shipment  $shipment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shipment $shipment)
    {
        $this->validate($request,['quantity'=>'required|numeric|min:1']);

        $shipment->update([
            'vaccine_id'=>$request->vaccine,
            'quantity'=>$request->quantity,
            'arrival_date'=>$request->arrival_date
        ]);

        return redirect()->back()->with('message', 'Szállítmány sikeresen módosítva');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shipment  $shipment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shipment $shipment)
    {
        $shipment->delete();
        return redirect()->back()->with('message','A szállítmány sikeresen törölve.');
    }
}
