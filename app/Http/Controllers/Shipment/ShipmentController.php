<?php

namespace App\Http\Controllers\Shipment;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Shipment;
use App\Models\History;

class ShipmentController extends Controller
{
    //
    public function index(){
        // $shipment = DB::table('shipments')
        //             ->leftJoin('histories','shipments.shipmentnumber', '=', 'histories.shipmentnumber')
        //             ->get();
        // $shipment = DB::table('shipments')
        //             ->join('histories', function ($join) {
        //                 $join->on('shipments.shipmentnumber', '=', 'histories.shipmentnumber')
        //                     ->where('histories.created_at','>','2000-01-01')
        //                     ->limit(1);
        //             })
        //             ->get();
        // var_dump($shipment);die;
        $shipment = Shipment::get();
        return view('dashboard',compact("shipment"));
    }

    public function create(){
        return view('shipment.create');
    }

    public function edit(Request $req){
        
        $shipment = Shipment::where('shipmentnumber',$req->id)->first();
        $history = History::where('shipmentnumber', $shipment->shipmentnumber)->first();
        $history_state = true;
        if($history){
            return view('shipment.edit', compact("shipment","history","history_state"));
        } else{
            $history_state = false;
            return view('shipment.edit', compact('shipment',"history","history_state"));
        }
    }

    public function save(Request $req)
    {
        if($req->id){
            $shipment = Shipment::find($req->id);
        } else {
            $shipment = new Shipment();
            $check = Shipment::where('shipmentnumber',$req->shipmentnumber)->first();
            if($check){
                return redirect('create')->with('error', 'Shipment Number is already exist!');
            }
        }
        if(strlen($req->shiperphone)<10&&strlen($req->reciverphone)<10){
            return redirect('create')->with('error', 'Correct input the phone number!');
        }
        if(strlen($req->shipername)==0 || strlen($req->shiperaddress)==0 || strlen($req->shiperemail)==0||strlen($req->shipername)==0 || strlen($req->shiperaddress)==0 || strlen($req->shiperemail)==0 || strlen($req->location)==0 || strlen($req->status)==0 || strlen($req->date)==0 || strlen($req->time)==0){
            return redirect('create')->with('error', 'Please input all field!');
        }
        $shipment->shipmentnumber = $req->shipmentnumber;
        $shipment->shippername = $req->shipername;
        $shipment->shipperphone = $req->shiperphone;
        $shipment->shipperaddress = $req->shiperaddress;
        $shipment->shipperemail = $req->shiperemail;
        $shipment->receivername = $req->recivername;
        $shipment->receiverphone = $req->reciverphone;
        $shipment->receiveraddress = $req->reciveraddress;
        $shipment->receiveremail = $req->reciveremail;
        //history
        $history = new History();
        $history->shipmentnumber = $req->shipmentnumber;
        $history->date = $req->date;
        $history->time = $req->time;
        $history->location = $req->location;
        $history->status = $req->status;
        $history->remarks = $req->remark;
        $history->save();

        $shipment->type = $req->type;
        $shipment->departuretime = $req->departure;
        $shipment->destination = $req->destination;
        $shipment->pickuptime = $req->pickuptime;
        $shipment->carrier = $req->Carrier;
        $shipment->origin = $req->origin;
        $shipment->pickupdate = $req->pickupdate;
        $shipment->expectdate = $req->expectdate;
        $shipment->commit = $req->comment;
        $shipment->save();
        return redirect('dashboard');
    }

    public function delete(Request $req)
    {   
        $flight = Shipment::where('shipmentnumber',$req->id);
        $flight->delete();
        return redirect('dashboard');
    }
}
