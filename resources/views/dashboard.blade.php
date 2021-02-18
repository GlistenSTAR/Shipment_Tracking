<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-md-8 col-6 pr-5 pt-2">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight ml-4" style="">
                    {{ __('Shipment') }}
                </h2>
            </div>
            <div class="col-md-4 col-6 pr-5" style="text-align: right;padding-bottom:5px;">
                <button class="btn btn-primary" onclick="create()">Create Shipment</button>
            </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table table-striped">
                        <th>
                            <td align="center">No</td>
                            <td align="center">Tracking Number</td>
                            <td align="center">Shipper Name</td>
                            <td align="center">Receiver Name</td>
                            <td align="center">Status</td>
                            <td align="center">Shipment Type</td>
                            <td align="center">action</td>
                        </th>
                        <tbody>
                            <?php $num=1;?>
                            @foreach ($shipment as $item)
                                <tr align="center">
                                    <td>{{$num++}}</td>
                                    <td>{{$item->shipmentnumber}}</td>
                                    <td>{{$item->shippername}}</td>
                                    <td>{{$item->receivername}}</td>
                                    <td>{{$item->status}}</td>
                                    <td>{{$item->type}}</td>
                                </tr>
                            @endforeach 
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    function create(){
        window.location="create"
    }
</script>