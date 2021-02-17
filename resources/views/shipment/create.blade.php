<x-app-layout>
  <x-slot name="header">
      <div class="row">
          <div class="col-md-8 col-6 pr-5 pt-2">
              <h2 class="font-semibold text-xl text-gray-800 leading-tight ml-4">
                  {{ __('Create Shipment') }}
              </h2>
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
      <div class="row">
        <div class="col-md-6 col-6 pr-2">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-5">
              <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                  <h1 align='center' style="font-size: 28px; color:blue" class="mt-3">Shipper Information</h1>
                  <div class="p-6 bg-white border-b border-gray-200">
                      <div class="row">
                        <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                          <span style="color:red;font-size:18px">* </span>Shipper Name : 
                        </div>
                        <div class="col-md-8 col-6" style="text-right: left">
                          <input type="text" id="shipname" name="shipername" style="border-radius:5px;">
                        </div>
                        <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                          <span style="color:red;font-size:18px">* </span>Phone number : 
                        </div>
                        <div class="col-md-8 col-6" style="text-right: left">
                          <input type="number" id="shipname" name="shiperphone" style="border-radius:5px;">
                        </div>
                        <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                          <span style="color:red;font-size:18px">* </span>Address : 
                        </div>
                        <div class="col-md-8 col-6" style="text-right: left">
                          <input type="text" id="shipname" name="shiperaddress" style="border-radius:5px;">
                        </div>
                        <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                          <span style="color:red;font-size:18px">* </span>Email : 
                        </div>
                        <div class="col-md-8 col-6" style="text-right: left">
                          <input type="email" id="shipname" name="shiperemail" style="border-radius:5px;">
                        </div>
                      </div> 
                  </div>
              </div>
          </div>
        </div>
        <div class="col-md-6 col-6">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1 align='center' style="font-size: 28px; color:blue" class="mt-3">Receiver Information</h1>
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row">
                      <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                        <span style="color:red;font-size:18px">* </span>Receiver Name : 
                      </div>
                      <div class="col-md-8 col-6" style="text-right: left">
                        <input type="text" id="shipname" name="recivername" style="border-radius:5px;">
                      </div>
                      <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                        <span style="color:red;font-size:18px">* </span>Phone number : 
                      </div>
                      <div class="col-md-8 col-6" style="text-right: left">
                        <input type="number" id="shipname" name="reciverphone" style="border-radius:5px;">
                      </div>
                      <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                        <span style="color:red;font-size:18px">* </span>Address : 
                      </div>
                      <div class="col-md-8 col-6" style="text-right: left">
                        <input type="text" id="shipname" name="reciveraddress" style="border-radius:5px;">
                      </div>
                      <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                        <span style="color:red;font-size:18px">* </span>Email : 
                      </div>
                      <div class="col-md-8 col-6" style="text-right: left">
                        <input type="email" id="shipname" name="reciveremail" style="border-radius:5px;">
                      </div>
                    </div> 
                </div>
            </div>
        </div>
      </div>
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <h1 align='center' style="font-size: 28px; color:blue" class="mt-3">History</h1>
          <div class="p-6 bg-white border-b border-gray-200">
              <div class="row">
                <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                  <span style="color:red;font-size:18px">* </span>Date : 
                </div>
                <div class="col-md-8 col-6" style="text-right: left">
                  <input type="date" id="shipname" name="date" style="border-radius:5px;">
                </div>
                <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                  <span style="color:red;font-size:18px">* </span>Time : 
                </div>
                <div class="col-md-8 col-6" style="text-right: left">
                  <input type="time" id="shipname" name="time" style="border-radius:5px;">
                </div>
                <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                  <span style="color:red;font-size:18px">* </span>Location : 
                </div>
                <div class="col-md-8 col-6" style="text-right: left">
                  <input type="text" id="shipname" name="location" style="border-radius:5px;">
                </div>
                <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                  <span style="color:red;font-size:18px">* </span>Status : 
                </div>
                <div class="col-md-8 col-6" style="text-right: left">
                  <select id="shipname" name="status" style="border-radius:5px;">
                    <option>-----</option>
                    <option value="send">Send</option>
                    <option value="pend">Pend</option>
                    <option value="receive">Receive</option>
                  </select>
                </div>
                <div class="col-md-4 col-6 pt-2" style="text-align:right; ">
                  Remarks : 
                </div>
                <div class="col-md-8 col-6" style="text-right: left">
                  <textarea id="shipname" name="remark" style="border-radius:5px;"></textarea>
                </div>
              </div> 
            <button type="submit" class="btn-lg btn-primary form-control">Create Shipment</button>
          </div>
      </div>
    </form>
  </div>
  
</x-app-layout>