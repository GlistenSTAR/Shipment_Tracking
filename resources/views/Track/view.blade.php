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
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-2 pb-2" align="center">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
      <div class="col-md-12 pt-2">
        <div class="col-md-12 pt-2">
          <div class="row">
            <div class="col-md-4 col-3 mt-2" align="right" id="sss">
              <span style="color:red;font-size:18px">* </span>Shipment Number : 
            </div>
            <div class="col-md-6 col-6 mb-2" style="width:100%" align="left">
              <input type="text" class="form-control" id="shipmentnumber" name="shipmentnumber" style="border-radius:5px;" required>
            </div>
            <div class="col-md-2 col-3">
              <button class="btn btn-primary" autofocus>OK</button>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-2 pb-2" align="center">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="row">
          <div id="newelement" style="width:100%"></div>
        </div>
    </div>
  </div>
</div>
</x-app-layout>
<script>
  $(document).ready(function(){
    $('.btn-primary').click(function(){
      var num = $("#shipmentnumber").val();
      $.ajaxSetup({
           headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
      });
      var data = { trackingnumber : num };
      $.post('getTrack', data).then(function(res){
        var result = JSON.parse(res);
        console.log(result);
        var element = "";
        for(var i in result){
          element += "<div style='border:1px solid grey;border-radius:10px;margin:20px'><i class='fa fa-barcode' style='font-size:100px;text-align:center'></i><h2 style='font-size:32px;color:blue;' align='center'>"+result[i]['shipmentnumber']+"</h2>\
            <div class='row'>\
              <div class='col-md-6 pl-5' align='left' >\
                <h4 align='left' class='pl-2' style='font-family:bold;font-size:40px; border-bottom:2px solid black'><span >Shipper info</span><h4>\
                <div class='row' style='font-size:20px;padding:5px;padding-top:10px;padding-bottom:10px'>\
                  <div class='col-md-4' align='left'><b>ShipperName : </b></div>\
                  <div class='col-md-8'>"
                      +result[i]['shippername']+
                  "</div>\
                </div>\
                <div class='row' style='font-size:20px;padding:5px;padding-top:10px;padding-bottom:10px'>\
                  <div class='col-md-4' align='left'><b>PhoneNumber : </b></div>\
                  <div class='col-md-8'>"
                      +result[i]['shipperphone']+
                  "</div>\
                </div>\
                <div class='row' style='font-size:20px;padding:5px;padding-top:10px;padding-bottom:10px'>\
                  <div class='col-md-4' align='left'><b>Address : </b></div>\
                  <div class='col-md-8'>"
                      +result[i]['shipperaddress']+
                  "</div>\
                </div>\
                <div class='row' style='font-size:20px;padding:5px;padding-top:10px;padding-bottom:10px'>\
                  <div class='col-md-4' align='left'><b>Email : </b></div>\
                  <div class='col-md-8'>"
                      +result[i]['shipperemail']+
                  "</div>\
                </div>\
              </div>\
              \
              <div class='col-md-6' align='left'>\
                <h4 align='left' class='pl-2' style='font-family:bold;font-size:40px; border-bottom:2px solid black'><span >Receiver info</span><h4>\
                <div class='row' style='font-size:20px;padding:5px;padding-top:10px;padding-bottom:10px'>\
                  <div class='col-md-4' align='left'><b>ReceiverName : </b></div>\
                  <div class='col-md-8'>"
                      +result[i]['receivername']+
                  "</div>\
                </div>\
                <div class='row' style='font-size:20px;padding:5px;padding-top:10px;padding-bottom:10px'>\
                  <div class='col-md-4' align='left'><b>PhoneNumber : </b></div>\
                  <div class='col-md-8'>"
                      +result[i]['receiverphone']+
                  "</div>\
                </div>\
                <div class='row' style='font-size:20px;padding:5px;padding-top:10px;padding-bottom:10px'>\
                  <div class='col-md-4' align='left'><b>Address : </b></div>\
                  <div class='col-md-8'>"
                      +result[i]['receiveraddress']+
                  "</div>\
                </div>\
                <div class='row' style='font-size:20px;padding:5px;padding-top:10px;padding-bottom:10px'>\
                  <div class='col-md-4' align='left'><b>Email : </b></div>\
                  <div class='col-md-8'>"
                      +result[i]['receiveremail']+
                  "</div>\
                </div>\
              </div>\
            </div></div>";
        }
        $('#newelement').html(element);
      }).catch(function(err){
        console.log(err);
      });    
    })
  });
</script>