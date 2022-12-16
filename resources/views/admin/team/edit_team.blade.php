@extends('setup.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Edit Team</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit Team</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Edit Team</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('update-team') }}" method="POST" id="projectForm222" class="validation-form"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="edit_team_id" value="{{ $data['team']->id }}">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" value="{{ $data['team']->name ?? '' }}"
                                                class="form-control" placeholder="Enter Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Designation</label>
                                            <input type="text" name="desig" value="{{ $data['team']->desig ?? '' }}"
                                                class="form-control" placeholder="Enter Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="image" class="form-control"
                                                placeholder="Enter Title">
                                            <img src="{{ asset('storage/app/public/uploads/team/' . $data['team']->image ?? '') }}"
                                                width="50" class="mt-3" alt="">
                                        </div>
                                    </div>
                                </div>

                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary save_project mb-2 mr-2">Save Changes</button>
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
