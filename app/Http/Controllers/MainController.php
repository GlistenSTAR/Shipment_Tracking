<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shipment;

class MainController extends Controller
{
  public function index(){
    $shipment = Shipment::get();
    return view('dashboard',compact("shipment"));
  }
}