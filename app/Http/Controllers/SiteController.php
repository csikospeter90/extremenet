<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use App\Models\Vaccine;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $vaccines = Vaccine::orderBy("name")->with('shipments')->get();
        $vaccineSelect = $vaccines->pluck('name', 'id');
        $quantity = Shipment::sum('quantity');
        return view('welcome', compact('vaccines', 'quantity', 'vaccineSelect'));
    }


}
