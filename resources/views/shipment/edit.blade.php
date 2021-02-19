<x-app-layout>
  <x-slot name="header">
      <div class="row">
          <div class="col-md-6 col-6 pt-2">
              <h2 class="font-semibold text-xl text-gray-800 leading-tight ml-4">
                  {{ __('Edit Shipment') }}
              </h2>
          </div>
      </div>
  </x-slot>

  @if (session('error'))
    <div class="alert alert-danger mt-4" align="center" style="">
          {{ session('error') }}
    </div>
  @endif
  <div class="py-12">
    <form action="{{route('saveshipment')}}" method="POST">
      @csrf
      <input type="hidden" value="{{$shipment->id}}" name="id">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-2 pb-2" align="center">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="col-md-12 pt-2">
          <div class="row">
            <div class="col-md-6 col-6 mt-2" align="right" id="sss">
              <span style="color:red;font-size:18px">* </span>Shipment Number : 
            </div>
            <div class="col-md-6 col-6 mb-2" style="width:100%" align="left">
              <input type="text" name="shipmentnumber" value="{{$shipment->shipmentnumber}}" style="border-radius:5px;" required>
            </div>
          </div>
        </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-12 col-sm-12">
          <div class="row">
            <div class="col-md-12 col-xl-6 col-12">
              <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-5">
                  <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                      <h1 align='center' style="font-size: 28px; color:blue" class="mt-3">Shipper Information</h1>
                      <div class="p-3 bg-white border-b border-gray-200">
                          <div class="row">
                            <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                              <span style="color:red;font-size:18px">* </span>Shipper Name : 
                            </div>
                            <div class="col-md-8 col-6" style="text-right: left">
                              <input type="text" id="shipname" name="shipername" value="{{$shipment->shippername}}" style="border-radius:5px;" required>
                            </div>
                            <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                              <span style="color:red;font-size:18px">* </span>Phone number : 
                            </div>
                            <div class="col-md-8 col-6" style="text-right: left">
                              <input type="tel" id="shipname" name="shiperphone" value="{{$shipment->shipperphone}}" style="border-radius:5px;" required>
                            </div>
                            <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                              <span style="color:red;font-size:18px">* </span>Address : 
                            </div>
                            <div class="col-md-8 col-6" style="text-right: left">
                              <input type="text" id="shipname" name="shiperaddress" value="{{$shipment->shipperaddress}}" style="border-radius:5px;" required>
                            </div>
                            <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                              <span style="color:red;font-size:18px">* </span>Email : 
                            </div>
                            <div class="col-md-8 col-6" style="text-right: left">
                              <input type="email" id="shipname" name="shiperemail" value="{{$shipment->shipperemail}}" style="border-radius:5px;" required>
                            </div>
                          </div> 
                      </div>
                  </div>
              </div>
            </div>
            <div class="col-md-12 col-xl-6 col-12">
              <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <h1 align='center' style="font-size: 28px; color:blue" class="mt-3">Receiver Information</h1>
                    <div class="p-3 bg-white border-b border-gray-200">
                        <div class="row">
                          <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                            <span style="color:red;font-size:18px">* </span>Receiver Name : 
                          </div>
                          <div class="col-md-8 col-6" style="text-right: left">
                            <input type="text" id="shipname" name="recivername" value="{{$shipment->receivername}}" style="border-radius:5px;" required>
                          </div>
                          <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                            <span style="color:red;font-size:18px">* </span>Phone number : 
                          </div>
                          <div class="col-md-8 col-6" style="text-right: left">
                            <input type="tel" id="shipname" name="reciverphone" value="{{$shipment->receiverphone}}" style="border-radius:5px;" required>
                          </div>
                          <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                            <span style="color:red;font-size:18px">* </span>Address : 
                          </div>
                          <div class="col-md-8 col-6" style="text-right: left">
                            <input type="text" id="shipname" name="reciveraddress" value="{{$shipment->receiveraddress}}" style="border-radius:5px;" required>
                          </div>
                          <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                            <span style="color:red;font-size:18px">* </span>Email : 
                          </div>
                          <div class="col-md-8 col-6" style="text-right: left">
                            <input type="email" id="shipname" name="reciveremail" value="{{$shipment->receiveremail}}" style="border-radius:5px;" required>
                          </div>
                        </div> 
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row" >
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
              <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1 align='center' style="font-size: 28px; color:blue" class="mt-3">Shipment Information</h1>
                <div class="p-3 bg-white border-b border-gray-200">
                  <div class="row">
                    <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                      Type of shipment : 
                    </div>
                    <div class="col-md-8 col-6" style="text-right: left">
                      <input type="text" id="shipname" name="type" value="{{$shipment->type}}" style="border-radius:5px;">
                    </div>
                    <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                      Departure Time : 
                    </div>
                    <div class="col-md-8 col-6" style="text-right: left">
                      <input type="time" id="shipname" name="departure" value="{{$shipment->departuretime}}" style="border-radius:5px;">
                    </div>
                    <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                      Destination : 
                    </div>
                    <div class="col-md-8 col-6" style="text-right: left">
                      <input type="text" id="shipname" name="destination" value="{{$shipment->destination}}" style="border-radius:5px;">
                    </div>
                    <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                      Pickup Time : 
                    </div>
                    <div class="col-md-8 col-6" style="text-right: left">
                      <input type="time" id="shipname" name="pickuptime" value="{{$shipment->pickuptime}}" style="border-radius:5px;">
                    </div>
                    <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                      Carrier : 
                    </div>
                    <div class="col-md-8 col-6" style="text-right: left">
                      <input type="text" id="shipname" name="Carrier" value="{{$shipment->carrier}}" style="border-radius:5px;">
                    </div>
                    <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                      Origin : 
                    </div>
                    <div class="col-md-8 col-6" style="text-right: left">
                      <input type="text" id="shipname" name="origin" value="{{$shipment->origin}}" style="border-radius:5px;">
                    </div>
                    <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                      Pickup Date : 
                    </div>
                    <div class="col-md-8 col-6" style="text-right: left">
                      <input type="date" id="shipname" name="pickupdate" value="{{$shipment->pickupdate}}" style="border-radius:5px;">
                    </div>
                    <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                      Expected Delivery Date : 
                    </div>
                    <div class="col-md-8 col-6" style="text-right: left">
                      <input type="date" id="shipname" name="expectdate" value="{{$shipment->expectdate}}" style="border-radius:5px;">
                    </div>
                    <div class="col-md-4 col-6 pt-2" style="text-align:right;">
                      Comments : 
                    </div>
                    <div class="col-md-8 col-6" style="text-right: left">
                      <textarea id="shipname" name="comment" style="border-radius:5px;">{{$shipment->commit}}</textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12 col-sm-12">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <h1 align='center' style="font-size: 28px; color:blue" class="mt-3">History</h1>
              <div class="p-3 bg-white border-b border-gray-200">
                <div class="row">
                  <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                    <span style="color:red;font-size:18px">* </span>Date : 
                  </div>
                  <div class="col-md-8 col-6" style="text-right: left">
                    <input type="date" id="shipname" name="date" <?php if($history_state) echo 'value='.$history->date;?> style="border-radius:5px;" required>
                  </div>
                  <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                    <span style="color:red;font-size:18px">* </span>Time : 
                  </div>
                  <div class="col-md-8 col-6" style="text-right: left">
                    <input type="time" id="shipname" name="time" <?php if($history_state) echo 'value='.$history->time;?> style="border-radius:5px;" required>
                  </div>
                  <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                    <span style="color:red;font-size:18px">* </span>Location : 
                  </div>
                  <div class="col-md-8 col-6" style="text-right: left">
                    <input type="text" id="shipname" name="location" <?php if($history_state) echo 'value='.$history->location;?> style="border-radius:5px;" required>
                  </div>
                  <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                    <span style="color:red;font-size:18px">* </span>Status : 
                  </div>
                  <div class="col-md-8 col-6" style="text-right: left">
                    <input type="text" id="shipname" name="status" <?php if($history_state) echo 'value='.$history->status;?> style="border-radius:5px;" required>
                  </div>
                  <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                    <span style="color:red;font-size:18px">* </span>Remarks : 
                  </div>
                  <div class="col-md-8 col-6" style="text-right: left">
                    <textarea id="shipname" name="remark" style="border-radius:5px;" required><?php if($history_state) echo $history->remarks;?></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary mt-5 form-control">Save Shipment</button>
        </div> 
      </div>
      
  </div>
</form>
</x-app-layout>