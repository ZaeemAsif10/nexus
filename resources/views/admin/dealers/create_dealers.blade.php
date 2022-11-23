@extends('setup.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Create Dealers</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('admin')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Create Dealers</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Create Dealers</h4>
                        </div>
                        <div class="card-body">
                           
                            <form action="{{url('dealers-store')}}" method="POST" id="dealerForm" class="validation-form"
                                enctype="multipart/form-data">
                                 @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Firm Name</label>
                                            <input type="text" name="firm_name" placeholder="Enter title"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>CEO Name</label>
                                            <input type="text" name="ceo_name" placeholder="CEO Name"
                                                class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Contact</label>
                                            <input type="text" name="contact" placeholder="Contact#"
                                                   class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" placeholder="Enter Email"
                                                class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>CEO CNIC</label>
                                            <input type="number" name="cnic" placeholder="CEO CNIC"
                                                   class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="number" name="phone" placeholder="Phone"
                                                   class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Establishment</label>
                                            <select name="estable" id="" class="form-control">
                                                <option value="">Choose One</option>
                                                @for($i=date('Y',strtotime(date('d-m-Y'))); $i>=1960 ;$i--)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                    @endfor
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>NTN#</label>
                                            <input type="text" name="ntn" placeholder="NTN"
                                                   class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Registered With Others Society?</label>
                                            <select name="other_society" id="" class="form-control">
                                                <option value="">Choose One</option>
                                                <option value="DHA">DHA</option>
                                                <option value="Bahriya Town">Bahriya Town</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Bank</label>
                                            <select name="bank_name" id="" class="form-control">
                                                <option value="">Choose One</option>
                                                <option value="HBL">HBL</option>
                                                <option value="Meezan">Meezan</option>
                                                <option value="MCB">MCB</option>
                                                <option value="Bank Al Habib">Bank Al Habib</option>
                                                <option value="Fysal Bank">Fysal Bank</option>
                                                <option value="Js Bank">Js Bank</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Bank A/C Number</label>
                                            <input type="text" name="bank_ac_number" placeholder="Bank A/C Number"
                                                   class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" name="address" placeholder="Address"
                                                   class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Photo Graph</label>
                                            <input type="file" name="image" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>CNIC</label>
                                            <input type="file" name="cnic_image" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>NTN Certificate</label>
                                            <input type="file" name="ntn_image" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Rent Agreement</label>
                                            <input type="file" name="rent_agreement" class="form-control" required>
                                        </div>
                                    </div>

                                </div>

                                <div class="text-left">
                                    <input type="checkbox"> <a href="">Terms & Conditions</a>
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary save_dealer">Save</button>
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
            $('#dealerForm').on('submit', function(e) {
                e.preventDefault();

                let formData = new FormData($('#dealerForm')[0]);

                $.ajax({
                    type: "POST",
                    url: "{{ url('dealers-store') }}",
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        $('.save_dealer').text('Saving...');
                        $(".save_dealer").prop("disabled", true);
                    },
                    success: function(response) {

                        if (response.status == 200) {
                            toastr.success(response.success);
                            $('.save_dealer').text('Save');
                            $(".save_dealer").prop("disabled", false);
                            $('#dealerForm').trigger("reset");
                        }

                        if (response.errors) {
                            $('.save_dealer').text('Save');
                            $(".save_dealer").prop("disabled", false);
                            toastr.error(response.errors);
                        }
                    },
                    error: function() {
                        $('.save_dealer').text('Save');
                        $(".save_dealer").prop("disabled", false);
                        toastr.error('something went wrong');
                    },
                });

            });



        });
    </script>
@endsection
