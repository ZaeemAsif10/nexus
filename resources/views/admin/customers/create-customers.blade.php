@extends('setup.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Create Customers</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('admin')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Create Customers</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Create Customers</h4>
                        </div>
                        <div class="card-body">

                            <form action="" method="POST" id="customerForm" class="validation-form"
                                enctype="multipart/form-data">
                                 {{-- @csrf --}}
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" placeholder="Customer Name"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>S/O D/O W/O Name</label>
                                            <input type="text" name="off_name" placeholder="S/O D/O W/O Name"
                                                class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>CNIC</label>
                                            <input type="number" name="cnic" placeholder="CNIC"
                                                   class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Passport No</label>
                                            <input type="text" name="passport_no" placeholder="Passport No"
                                                class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Mailing Address</label>
                                            <input type="text" name="mailing_address" placeholder="Mailing Address"
                                                   class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Designation / Occupation</label>
                                            <input type="text" name="occupation" placeholder="Designation / Occupation"
                                                   class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" placeholder="Email"
                                                   class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Mobile No</label>
                                            <input type="number" name="mobile_no" placeholder="Mobile No"
                                                   class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="image" class="form-control" required>

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Passport Attachment</label>
                                            <input type="file" name="passport_image" class="form-control" required>

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>CNIC Attachment</label>
                                            <input type="file" name="cnic_attachment" class="form-control" required>

                                        </div>
                                    </div>
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary save_customer">Save</button>
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
            $('#customerForm').on('submit', function(e) {
                e.preventDefault();

                let formData = new FormData($('#customerForm')[0]);

                $.ajax({
                    type: "POST",
                    url: "{{ url('customer-store') }}",
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        $('.save_customer').text('Saving...');
                        $(".save_customer").prop("disabled", true);
                    },
                    success: function(response) {

                        if (response.status == 200) {
                            toastr.success(response.success);
                            $('.save_customer').text('Save');
                            $(".save_customer").prop("disabled", false);
                            $('#customerForm').trigger("reset");
                        }

                        if (response.errors) {
                            $('.save_customer').text('Save');
                            $(".save_customer").prop("disabled", false);
                            toastr.error(response.errors);
                        }
                    },
                    error: function() {
                        $('.save_customer').text('Save');
                        $(".save_customer").prop("disabled", false);
                        toastr.error('something went wrong');
                    },
                });

            });



        });
    </script>
@endsection
