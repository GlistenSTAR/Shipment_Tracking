<x-app-layout>
  <x-slot name="header">
      <div class="row">
          <div class="col-md-6 col-6 pt-2">
              <h2 class="font-semibold text-xl text-gray-800 leading-tight ml-4">
                  {{ __('Create Shipment') }}
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
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-2 pb-2" align="center">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="col-md-12 pt-2">
          <div class="row">
            <div class="col-md-6 col-6 mt-2" align="right" id="sss">
              <span style="color:red;font-size:18px">* </span>Shipment Number : 
            </div>
            <div class="col-md-6 col-6 mb-2" style="width:100%" align="left">
              <input type="text" name="shipmentnumber" style="border-radius:5px;" required>
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
                              <input type="text" id="shipname" name="shipername" style="border-radius:5px;" required>
                            </div>
                            <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                              <span style="color:red;font-size:18px">* </span>Phone number : 
                            </div>
                            <div class="col-md-8 col-6" style="text-right: left">
                              <input type="tel" id="shipname" name="shiperphone"  style="border-radius:5px;" required>
                            </div>
                            <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                              <span style="color:red;font-size:18px">* </span>Address : 
                            </div>
                            <div class="col-md-8 col-6" style="text-right: left">
                              <input type="text" id="shipname" name="shiperaddress" style="border-radius:5px;" required>
                            </div>
                            <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                              <span style="color:red;font-size:18px">* </span>Email : 
                            </div>
                            <div class="col-md-8 col-6" style="text-right: left">
                              <input type="email" id="shipname" name="shiperemail" style="border-radius:5px;" required>
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
                            <input type="text" id="shipname" name="recivername" style="border-radius:5px;" required>
                          </div>
                          <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                            <span style="color:red;font-size:18px">* </span>Phone number : 
                          </div>
                          <div class="col-md-8 col-6" style="text-right: left">
                            <input type="tel" id="shipname" name="reciverphone" style="border-radius:5px;" required>
                          </div>
                          <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                            <span style="color:red;font-size:18px">* </span>Address : 
                          </div>
                          <div class="col-md-8 col-6" style="text-right: left">
                            <input type="text" id="shipname" name="reciveraddress" style="border-radius:5px;" required>
                          </div>
                          <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                            <span style="color:red;font-size:18px">* </span>Email : 
                          </div>
                          <div class="col-md-8 col-6" style="text-right: left">
                            <input type="email" id="shipname" name="reciveremail" style="border-radius:5px;" required>
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
                      <span style="color:red;font-size:18px">* </span>Type of shipment : 
                    </div>
                    <div class="col-md-8 col-6" style="text-right: left">
                      <input type="text" id="shipname" name="type" style="border-radius:5px;" required>
                    </div>
                    {{-- <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                      <span style="color:red;font-size:18px">* </span>Status : 
                    </div>
                    <div class="col-md-8 col-6" style="text-right: left">
                      <select id="shipname" name="status" style="border-radius:5px;">
                        <option>-----</option>
                        <option value="send">Send</option>
                        <option value="pend">Pend</option>
                        <option value="receive">Receive</option>
                      </select>
                    </div> --}}
                    <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                      <span style="color:red;font-size:18px">* </span>Departure Time : 
                    </div>
                    <div class="col-md-8 col-6" style="text-right: left">
                      <input type="time" id="shipname" name="departure" style="border-radius:5px;" required>
                    </div>
                    <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                      <span style="color:red;font-size:18px">* </span>Destination : 
                    </div>
                    <div class="col-md-8 col-6" style="text-right: left">
                      <input type="text" id="shipname" name="destination" style="border-radius:5px;" required>
                    </div>
                    <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                      <span style="color:red;font-size:18px">* </span>Pickup Time : 
                    </div>
                    <div class="col-md-8 col-6" style="text-right: left">
                      <input type="time" id="shipname" name="pickuptime" style="border-radius:5px;" required>
                    </div>
                    <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                      <span style="color:red;font-size:18px">* </span>Carrier : 
                    </div>
                    <div class="col-md-8 col-6" style="text-right: left">
                      <input type="text" id="shipname" name="Carrier" style="border-radius:5px;" required>
                    </div>
                    <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                      <span style="color:red;font-size:18px">* </span>Origin : 
                    </div>
                    <div class="col-md-8 col-6" style="text-right: left">
                      <input type="text" id="shipname" name="origin" style="border-radius:5px;" required>
                    </div>
                    <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                      <span style="color:red;font-size:18px">* </span>Pickup Date : 
                    </div>
                    <div class="col-md-8 col-6" style="text-right: left">
                      <input type="date" id="shipname" name="pickupdate" style="border-radius:5px;" required>
                    </div>
                    <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                      <span style="color:red;font-size:18px">* </span>Expected Delivery Date : 
                    </div>
                    <div class="col-md-8 col-6" style="text-right: left">
                      <input type="date" id="shipname" name="expectdate" style="border-radius:5px;" required>
                    </div>
                    <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                      <span style="color:red;font-size:18px">* </span>Comments : 
                    </div>
                    <div class="col-md-8 col-6" style="text-right: left">
                      <textarea id="shipname" name="comment" style="border-radius:5px;" required></textarea>
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
                    <input type="date" id="shipname" name="date" style="border-radius:5px;" required>
                  </div>
                  <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                    <span style="color:red;font-size:18px">* </span>Time : 
                  </div>
                  <div class="col-md-8 col-6" style="text-right: left">
                    <input type="time" id="shipname" name="time" style="border-radius:5px;" required>
                  </div>
                  <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                    <span style="color:red;font-size:18px">* </span>Location : 
                  </div>
                  <div class="col-md-8 col-6" style="text-right: left">
                    <input type="text" id="shipname" name="location" style="border-radius:5px;" required>
                  </div>
                  <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                    <span style="color:red;font-size:18px">* </span>Status : 
                  </div>
                  <div class="col-md-8 col-6" style="text-right: left">
                    <input type="text" id="shipname" name="status" style="border-radius:5px;" required>
                  </div>
                  <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                    <span style="color:red;font-size:18px">* </span>Remarks : 
                  </div>
                  <div class="col-md-8 col-6" style="text-right: left">
                    <textarea id="shipname" name="remark" style="border-radius:5px;" required></textarea>
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