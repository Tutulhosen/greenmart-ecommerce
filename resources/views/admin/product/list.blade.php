@extends('admin.layout.app')


@section('main-content')
<div class="container pt-5" style="padding-bottom: 20px">
    <div class="row">
        
        <div class="col-12">
            <div class="card">
                <h3 class="card-header text-center bg-success text-white">Slider List</h3>
                <div class="table-responsive text-nowrap">
                  <table class="table text-center">
                    <thead class="table-light">
                      <tr>
                        <th>SL</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Thumbnail</th>
                        <th>Status</th>
                        <th>Actions</th>
                        
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                            @foreach ($product_array as $product)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$product['title']}}</td>
                                    <td>{{get_category_name($product['category_id'])}}</td>
                                    <td>{{$product['quantity']}}</td>
                            
                                    
                                    <td>{{$product['price']}}</td>
                                    <td>{{$product['discount']}}</td>
                                    <td><img style="height: 50px;width:50px; object-fit:cover"  src="{{asset('images/galleries/'.$product['thumbnail'])}}" alt=""></td>
                                    <td>
                                        @if ($product['status']==1)
                                            <a style="cursor: pointer" id="active_btn" data-id="{{$product['id']}}"><span class="badge bg-label-primary me-1">Active</span></a>
                                        @endif
                                        @if ($product['status']==0)
                                        <a style="cursor: pointer" id="deactivate_btn" data-id="{{$product['id']}}"><span class="badge bg-label-danger me-1">InActive</span></a>
                                        @endif
                                      
                                      
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                          </button>
                                          <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('admin.product.update.page', ['id' => $product['id'], 'type' => 'update']) }}">
                                                <i class="bx bx-edit-alt me-1"></i> Edit
                                            </a>
                                            
                                            <a class="dropdown-item" href="{{ route('admin.product.update.page', ['id' => $product['id'], 'type' => 'copy']) }}">
                                                <i class="bx bx-edit-alt me-1"></i> Copy
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0);" id="product_dlt_btn" data-id="{{$product['id']}}"><i class="bx bx-trash me-1"></i> Delete</a>
                                          </div>
                                        </div>
                                      </td>
                                </tr>
                            @endforeach
                    </tbody>
                  </table>
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

        //click for deactivate
        $(document).on('click', '#active_btn', function(){
            
            Swal.fire({
                title: "<div style='color: black;'>Are you sure to InActive this Product?</div>",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Confirm !"
            }).then((result) => {
                if (result.isConfirmed) {
                    let id= $(this).data('id');
                 
                    $.ajax({
                        url:"status/update/" +id,
                        method: 'GET',
                        success: function(response) {
                            if (response.status==true) {
                                Swal.fire({
                                    title: "<div style='color: black;'>Successfully InActive The Product</div>",
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

        //click for Active
        $(document).on('click', '#deactivate_btn', function(){
            Swal.fire({
                title: "<div style='color: black;'>Are you sure to Active this Product?</div>",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Confirm !"
            }).then((result) => {
                if (result.isConfirmed) {
                    let id= $(this).data('id');

                    $.ajax({
                        url:"status/update/" +id,
                        method: 'GET',
                        success: function(response) {
                            if (response.status==true) {
                                Swal.fire({
                                    title: "<div style='color: black;'>Successfully Active The Product</div>",
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



