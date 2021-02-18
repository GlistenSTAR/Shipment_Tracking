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
                        <thead align="center">
                            <th >No</th>
                            <th align="center">Tracking Number</th>
                            <th align="center">Shipper Name</th>
                            <th align="center">Receiver Name</th>
                            <th align="center">Status</th>
                            <th align="center">Shipment Type</th>
                            <th align="center">action</th>
                        </thead>
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
                                    <td>
                                        <a href="./edit?id=<?php echo $item->id;?>" class="text-success"><i class="fa fa-edit" style="font-size: 20px; margin:5px"></i></a>
                                        <button del-id={{$item->id}} class="text-danger delete-shipment"><i class="fa fa-bitbucket" style="font-size: 20px; margin:5px"></i></button>
                                    </td>
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
    $(document).ready(function(){
        $('.delete-shipment').click(function(){
            if (window.confirm('Are you sure? This shipment data deleted!')) {
                window.location="delete?id="+$(this).attr('del-id'); 
            }
        });
    });
    function create(){
        window.location="create"
    }
</script>