<?php

namespace App\Http\Controllers\Shipment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shipment;
use App\Models\History;

class TrackingController extends Controller
{
    //
    public function index(){
        return view('Track.view');
    }

    public function getTrack(Request $req){
        $num = $req->input('trackingnumber');
        $shipment = Shipment::where('shipmentnumber', $num)->get();
        $history =  History::where('shipmentnumber', $num)->get();
        $result = array('0'=>$shipment,'1'=>$history);
        echo json_encode($result);
    }
}
