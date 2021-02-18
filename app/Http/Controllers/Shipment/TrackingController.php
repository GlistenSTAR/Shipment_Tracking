<?php

namespace App\Http\Controllers\Shipment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shipment;

class TrackingController extends Controller
{
    //
    public function index(){
        return view('Track.view');
    }

    public function getTrack(Request $req){
        $num = $req->input('trackingnumber');
        $shipment = Shipment::where('shipmentnumber', $num)->get();
        echo json_encode($shipment);
    }
}
