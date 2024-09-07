@extends('admin.layout.app')


@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card mt-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="headline">
                                <h3 class="text-center">Add A Slider Image</h3>
                            </div>
                        
                            <form>
                                <div class="mb-3">
                                  <label for="imageUpload" class="form-label">Upload Image</label>
                                  <input type="file" class="form-control" name="img[]" id="imageUpload" accept="image/*">
                                </div>
                                <div class="mb-3">
                                  <img id="imagePreview" class="image-preview" src="https://via.placeholder.com/300" alt="Image Preview">
                                </div>
                                <button type="button" class="btn btn-primary mr-2" id="slider_subnit_btn">Submit</button>
                                <button class="btn btn-dark">Cancel</button>
                            </form>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
@endsection
@section('scripts')

<script>
    

    $(document).ready(function(){
        
        $('#slider_subnit_btn').on('click', function(){

            var image = $('#imageUpload')[0].files[0];


            // alert(image);
            if (!image) {
                showToast('Select A Slider Image', 'error');
                return; 
            }

            let formData = new FormData();
            formData.append('image', image);
            formData.append('_token', '{{ csrf_token() }}'); 

            $.ajax({
                url: '{{ route('admin.slider.store') }}', 
                method: 'POST',
                data: formData,
                contentType: false, 
                processData: false,
                success: function(response) {
                    if (response.status==true) {
                        
                        showToast(response.success, 'success');

                        setTimeout(function() {
                            // Redirect to the list page
                            window.location.href = '/admin/slider/list';  
                        }, 1500);
                    }
                    
                },
                
            });
        });





    });

</script>

@endsection



