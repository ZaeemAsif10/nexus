@extends('setup.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Create Home Slider</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Create Home Slider</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Create Home Slider</h4>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST" id="homeSliderForm" class="validation-form"
                                enctype="multipart/form-data">
                                {{-- @csrf --}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" placeholder="Enter title"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="image" class="form-control" required>
                                        </div>
                                    </div>

                                </div>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary save_slider mr-2 mb-2">Save</button>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {


            // save slider
            $('#homeSliderForm').on('submit', function(e) {
                e.preventDefault();

                let formData = new FormData($('#homeSliderForm')[0]);

                $.ajax({
                    type: "POST",
                    url: "{{ url('store-home-slider') }}",
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        $('.save_slider').text('Saving...');
                        $(".save_slider").prop("disabled", true);
                    },
                    success: function(response) {

                        if (response.status == 200) {

                            toastr.success(response.success);
                            $('.save_slider').text('Save');
                            $(".save_slider").prop("disabled", false);
                            $('#homeSliderForm').trigger("reset");
                        }

                        if (response.errors) {
                            $('.save_slider').text('Save');
                            $(".save_slider").prop("disabled", false);
                            toastr.error(response.errors);
                        }
                    },
                    error: function() {
                        $('.save_slider').text('Save');
                        $(".save_slider").prop("disabled", false);
                        toastr.error('something went wrong');
                    },
                });

            });


        });
    </script>
@endsection
