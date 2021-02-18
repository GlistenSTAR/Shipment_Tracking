<?php

namespace App\Http\Controllers\Shipment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
  public function index(){
    $shipment = Shipment::get();
    return view('dashboard',compact("shipment"));
  }
}