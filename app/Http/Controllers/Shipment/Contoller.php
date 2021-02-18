<?php

namespace App\Http\Controllers\Shipment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shipment;

class Contoller extends Controller
{
    //
    public function save(Request $req)
    {
        $shipment = new Shipment();
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
        $shipment->date = $req->date;
        $shipment->time = $req->time;
        $shipment->location = $req->location;
        $shipment->status = $req->status;
        $shipment->remarks = $req->remark;

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
        return view('dashboard');
    }
}
