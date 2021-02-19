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
  <div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-2 pb-2" align="center">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
      <div class="col-md-12 pt-2">
        <div class="col-md-12 pt-2">
          <div class="row">
            <div class="col-md-4 col-3 mt-2" align="right" id="sss">
              <span style="color:red;font-size:18px">* </span>Shipment Number : 
            </div>
            <div class="col-md-6 col-6 mb-2" style="width:100%" align="left">
              <input type="text" class="form-control" value="321654987" id="shipmentnumber" name="shipmentnumber" style="border-radius:5px;" required>
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
        for(var i in result[0]){
          var table = "";
          for(var j in result[1]){
            table += "<tr>\
              <td>"+result[1][j]['date']+"</td>\
              <td>"+result[1][j]['time']+"</td>\
              <td>"+result[1][j]['location']+"</td>\
              <td>"+result[1][j]['status']+"</td>\
              <td>"+result[1][j]['user']+"</td>\
              <td>"+result[1][j]['remarks']+"</td>\
            </tr>"
          }
          element += "<div style='border:1px solid grey;border-radius:10px;margin:20px'><i class='fa fa-barcode' style='font-size:100px;text-align:center'></i><h2 style='font-size:32px;color:blue;' align='center'>"+result[0][i]['shipmentnumber']+"</h2>\
            <div class='row'>\
              <div class='col-md-6 pl-5 pr-5' align='left' >\
                <h4 align='left' class='pl-2 pr-2' style='font-family:bold;font-size:40px; border-bottom:2px solid black'><span >Shipper info</span><h4>\
                <div class='row' style='font-size:20px;padding:5px;padding-top:10px;padding-bottom:10px'>\
                  <div class='col-md-4' align='left'><b>ShipperName : </b></div>\
                  <div class='col-md-8'>"
                      +result[0][i]['shippername']+
                  "</div>\
                </div>\
                <div class='row' style='font-size:20px;padding:5px;padding-top:10px;padding-bottom:10px'>\
                  <div class='col-md-4' align='left'><b>PhoneNumber : </b></div>\
                  <div class='col-md-8'>"
                      +result[0][i]['shipperphone']+
                  "</div>\
                </div>\
                <div class='row' style='font-size:20px;padding:5px;padding-top:10px;padding-bottom:10px'>\
                  <div class='col-md-4' align='left'><b>Address : </b></div>\
                  <div class='col-md-8'>"
                      +result[0][i]['shipperaddress']+
                  "</div>\
                </div>\
                <div class='row' style='font-size:20px;padding:5px;padding-top:10px;padding-bottom:10px'>\
                  <div class='col-md-4' align='left'><b>Email : </b></div>\
                  <div class='col-md-8'>"
                      +result[0][i]['shipperemail']+
                  "</div>\
                </div>\
              </div>\
              \
              <div class='col-md-6 pl-5 pr-5' align='left'>\
                <h4 align='left' class='pl-2' style='font-family:bold;font-size:40px; border-bottom:2px solid black'><span >Receiver info</span><h4>\
                <div class='row' style='font-size:20px;padding:5px;padding-top:10px;padding-bottom:10px'>\
                  <div class='col-md-4' align='left'><b>ReceiverName : </b></div>\
                  <div class='col-md-8'>"
                      +result[0][i]['receivername']+
                  "</div>\
                </div>\
                <div class='row' style='font-size:20px;padding:5px;padding-top:10px;padding-bottom:10px'>\
                  <div class='col-md-4' align='left'><b>PhoneNumber : </b></div>\
                  <div class='col-md-8'>"
                      +result[0][i]['receiverphone']+
                  "</div>\
                </div>\
                <div class='row' style='font-size:20px;padding:5px;padding-top:10px;padding-bottom:10px'>\
                  <div class='col-md-4' align='left'><b>Address : </b></div>\
                  <div class='col-md-8'>"
                      +result[0][i]['receiveraddress']+
                  "</div>\
                </div>\
                <div class='row' style='font-size:20px;padding:5px;padding-top:10px;padding-bottom:10px'>\
                  <div class='col-md-4' align='left'><b>Email : </b></div>\
                  <div class='col-md-8'>"
                      +result[0][i]['receiveremail']+
                  "</div>\
                </div>\
              </div>\
            </div>\
            <h4 align='left' class='pl-2 mt-3' style='font-family:bold;font-size:40px;margin-left:30px;margin-right:30px; border-bottom:2px solid black'><span >Shipment Information</span><h4>\
            <div class='row'>\
              <div class='col-md-12 pl-5' align='left' >\
                <div class='row' style='font-size:20px;padding:5px;padding-top:10px;padding-bottom:10px'>\
                  <div class='col-md-4' align='left'><b>Type of Shipperment : </b></div>\
                  <div class='col-md-8'>"
                      +result[0][i]['type']+
                  "</div>\
                </div>\
                <div class='row' style='font-size:20px;padding:5px;padding-top:10px;padding-bottom:10px'>\
                  <div class='col-md-4' align='left'><b>Courrier : </b></div>\
                  <div class='col-md-8'>"
                      +result[0][i]['courrier']+
                  "</div>\
                </div>\
                <div class='row' style='font-size:20px;padding:5px;padding-top:10px;padding-bottom:10px'>\
                  <div class='col-md-4' align='left'><b>Departure Time : </b></div>\
                  <div class='col-md-8'>"
                      +result[0][i]['departuretime']+
                  "</div>\
                </div>\
                <div class='row' style='font-size:20px;padding:5px;padding-top:10px;padding-bottom:10px'>\
                  <div class='col-md-4' align='left'><b>Origin : </b></div>\
                  <div class='col-md-8'>"
                      +result[0][i]['origin']+
                  "</div>\
                </div>\
                <div class='row' style='font-size:20px;padding:5px;padding-top:10px;padding-bottom:10px'>\
                  <div class='col-md-4' align='left'><b>Destination : </b></div>\
                  <div class='col-md-8'>"
                      +result[0][i]['destination']+
                  "</div>\
                </div>\
                <div class='row' style='font-size:20px;padding:5px;padding-top:10px;padding-bottom:10px'>\
                  <div class='col-md-4' align='left'><b>Pickup Date : </b></div>\
                  <div class='col-md-8'>"
                      +result[0][i]['pickupdate']+
                  "</div>\
                </div>\
                <div class='row' style='font-size:20px;padding:5px;padding-top:10px;padding-bottom:10px'>\
                  <div class='col-md-4' align='left'><b>Pickup Time : </b></div>\
                  <div class='col-md-8'>"
                      +result[0][i]['pickuptime']+
                  "</div>\
                </div>\
                <div class='row' style='font-size:20px;padding:5px;padding-top:10px;padding-bottom:10px'>\
                  <div class='col-md-4' align='left'><b>Expexted Dilvery Date : </b></div>\
                  <div class='col-md-8'>"
                      +result[0][i]['expectdate']+
                  "</div>\
                </div>\
                <div class='row' style='font-size:20px;padding:5px;padding-top:10px;padding-bottom:10px'>\
                  <div class='col-md-4' align='left'><b>Comments : </b></div>\
                  <div class='col-md-8'>"
                      +result[0][i]['commit']+
                  "</div>\
                </div>\
              </div>\
          </div>\
          <div>\
            <h4 align='left' class='pl-2 mt-3' style='font-family:bold;font-size:40px;margin-left:30px;margin-right:30px; text-align:center;color:blue'><span >Shipment History</span><h4>\
            <table class='table table-striped' style='width:90%'>\
              <tr style='background-color:green' algin='center'>\
                <th>Date</th>\
                <th>Time</th>\
                <th>Location</th>\
                <th>Status</th>\
                <th>UpdateBy</th>\
                <th>Remarks</th>\
              </tr>\
              <tbody>"+
                table
              +"</tbody>\
            </table>\
          </div>"
          ;
        }
        $('#newelement').html(element);
      }).catch(function(err){
        console.log(err);
      });    
    })
  });
</script>