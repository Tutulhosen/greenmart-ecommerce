@extends('admin.layout.app')


@section('main-content')
<div class="container pt-5">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <div class="card" style="margin-bottom: 50px">
                <h3 class="card-header text-center bg-success text-white">Order List</h3>
                <div class="table-responsive text-nowrap">
                  <table class="table text-center">
                    <thead class="table-light">
                      <tr>
                        <th>SL</th>
                        <th>Title</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Customer Name</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Actions</th>
                        
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                       
                            @foreach ($order_list as $order)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$order->title}}</td>
                                    <td>{{$order->products_qty}}</td>
                                    <td>{{$order->total_price}}</td>
                                    <td>{{$order->full_name}}</td>
                                    <td>{{$order->phone_number}}</td>
                                    <td>{{$order->delivery_address}}</td>
                                    <td>{{order_status($order->order_status)}}</td>
                                    
                                    <td>
                                        <div class="dropdown">
                                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                          </button>
                                          <div class="dropdown-menu">
                                            {{-- <a class="dropdown-item" href=""><i class="bx bx-edit-alt me-1"></i> Edit</a> --}}
                                            @if ($order->order_status==0)
                                                <a class="dropdown-item" href="javascript:void(0);" id="accept_btn" data-id="{{$order->id}}" data-type="accept">Accept</a>
                                                <a class="dropdown-item" href="javascript:void(0);" id="cancel_btn" data-id="{{$order->id}}" data-type="cancel">Cancel</a>
                                            @endif
                                            @if ($order->order_status==1)
                                               <p style="color: red">Cancel</p>
                                            @endif
                                            @if ($order->order_status==2)
                                                <a class="dropdown-item" href="javascript:void(0);" id="on_delivery_btn" data-id="{{$order->id}}" data-type="on_delivery">On Delivery</a>
                                                <a class="dropdown-item" href="javascript:void(0);" id="cancel_btn" data-id="{{$order->id}}" data-type="cancel">Cancel</a>
                                            @endif
                                            @if ($order->order_status==3)
                                                <a class="dropdown-item" href="javascript:void(0);" id="delivery_done_btn" data-id="{{$order->id}}" data-type="delivery_done">Delivery Done</a>
                                                <a class="dropdown-item" href="javascript:void(0);" id="return_back_btn" data-id="{{$order->id}}" data-type="return_back">Return Back</a>
                                            @endif
                                            @if ($order->order_status==4)
                                                <p style="color: green">Delivery Done</p>
                                            @endif
                                            @if ($order->order_status==5)
                                                <p style="color: red">Return Back</p>
                                            @endif
                                            
                                          </div>
                                        </div>
                                      </td>
                                </tr>
                            @endforeach
                    </tbody>
                    
                  </table>
                  
                </div>
                <div class="row mt-md-4 mt-2" style="width: 100%; margin:auto">
                    <div class="col-12" >
                        
                        {!! $order_list->links('pagination::bootstrap-4') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    

<script>
    
    $(document).ready(function(){
        
        //delete sub category
        $(document).on('click', '#product_dlt_btn', function(){
            Swal.fire({
                title: "<div style='color: black;'>Are you sure?</div>",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!",
                customClass: {
                    popup: 'swal-small', 
                    title: 'swal-title-small',
                    cancelButton: 'swal-cancel-button-small', 
                    confirmButton: 'swal-confirm-button-small' 
                }
                }).then((result) => {
                if (result.isConfirmed) {
                    let id= $(this).data('id');
                   

                    $.ajax({
                       
                        url:"delete/" +id,
                        method: 'GET',
                        
                        
                        success: function(response) {
                            if (response.status==true) {
                                
                                Swal.fire({
                                    title: "<div style='color: black;'>Deleted</div>",
                                    text: "Successfully Delete A Product",
                                    icon: "success"
                                });
                                $(".table").load(" .table");
                                
                            }
                            if (response.status==false) {
                                
                                Swal.fire({
                                    title: "Warning!",
                                    text: "Product is not deleted",
                                    icon: "warning"
                                });
                                
                            }
                            
                        },
                        
                    });
                    
                }
            });
           
        });

        
        $(document).on('click', '#accept_btn, #cancel_btn, #on_delivery_btn, #delivery_done_btn, #return_back_btn', function(){
           
            Swal.fire({
                title: "<div style='color: black;'>Are you sure ?</div>",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Confirm !"
            }).then((result) => {
                if (result.isConfirmed) {
                    let id= $(this).data('id');
                    let type= $(this).data('type');
                
                    $.ajax({
                        url: '{{ route('admin.order.status.update') }}', 
                        method: 'GET',
                        data: {
                            'id' : id,
                            'type' : type,
                        },
                        
                        success: function(response) {
                            if (response.status==true) {
                                Swal.fire({
                                    title: "<div style='color: black;'>Successfully Update</div>",
                                    icon: "success"
                                });
                                $(".table").load(" .table");
                            }
                            if (response.status==false) {
                                Swal.fire({
                                    title: "<div style='color: black;'>Something went wrong</div>",
                                    icon: "warning"
                                });
                            }
                        },
                    });
                }
            });
        });
       

        


        
        





    });

</script>

@endsection



