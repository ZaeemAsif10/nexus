@extends('setup.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Create Blogs</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('admin')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Create Blogs</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Create Blogs</h4>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST" id="projectForm" class="validation-form"
                                enctype="multipart/form-data">
                                {{-- @csrf --}}

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" name="title" class="form-control"
                                                    placeholder="Enter Title" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Image</label>
                                                <input type="file" name="image" class="form-control"
                                                    placeholder="Enter Title" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                              <textarea class="form-control" name="description" cols="30" rows="4" placeholder="Write here..." required></textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary save_project mb-2 mr-2">Save</button>
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


            // save projects
            $('#projectForm').on('submit', function(e) {
                e.preventDefault();

                let formData = new FormData($('#projectForm')[0]);

                $.ajax({
                    type: "POST",
                    url: "{{ url('create-blog') }}",
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        $('.save_project').text('Saving...');
                        $(".save_project").prop("disabled", true);
                    },
                    success: function(response) {

                        if (response.status == 200) {
                            toastr.success(response.success);
                            $('.save_project').text('Save');
                            $(".save_project").prop("disabled", false);
                            $('#projectForm').trigger("reset");
                        }

                        if (response.errors) {
                            $('.save_project').text('Save');
                            $(".save_project").prop("disabled", false);
                            toastr.error(response.errors);
                        }
                    },
                    error: function() {
                        $('.save_project').text('Save');
                        $(".save_project").prop("disabled", false);
                        toastr.error('something went wrong');
                    },
                });

            });


        });
    </script>
@endsection
