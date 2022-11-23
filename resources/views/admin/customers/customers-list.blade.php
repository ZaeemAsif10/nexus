@extends('setup.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Customers</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('admin')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Customers List</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="{{ url('create/customer') }}" class="btn add-btn" title="Add Customers"><i
                                class="fa fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card mb-0">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Customers</h4>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-stripped mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>F/H/ Name</th>
                                            <th>CNIC</th>
                                            <th>Email</th>
                                            <th>Mobile No</th>
                                            <th>Passport</th>
                                            <th>Address</th>
                                            <th>Occupation</th>
                                        </tr>
                                    </thead>
                                    <tbody id="dealersTable">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Edit Dealer Modal Start --}}
    <div class="modal fade" id="edit_dealer_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Edit Dealer</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="" enctype="multipart/form-data" id="edit_dealer_form">
                        <input type="hidden" name="dealer_id">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" name="title" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input type="text" name="phone" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" name="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input type="file" name="image" class="form-control">
                                    <span id="store_image"></span>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary update_dealer">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Edit Dealer Modal End --}}
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {

            getDealers();
            //Get Dealers
            function getDealers() {

                $.ajax({

                    url: '{{ url('/get-customer') }}',
                    type: 'get',
                    async: false,
                    dataType: 'json',

                    success: function(data) {
                        var html = '';
                        var i;
                        var c = 0;

                        for (i = 0; i < data.length; i++) {
                            c++;
                            html += '<tr>' +
                                '<td>' + c + '</td>' +
                                '<td>' + data[i].name + '</td>' +
                                '<td>' + data[i].off_name + '</td>' +
                                '<td>' + data[i].cnic + '</td>' +
                                '<td>' + data[i].email + '</td>' +
                                '<td>' + data[i].mobile_no+ '</td>' +
                                '<td>' + data[i].passport_no+ '</td>' +
                                '<td>' + data[i].mailing_address+ '</td>' +
                                '<td>' + data[i].occupation+ '</td>' +
                                // '<td class="text-right">' +
                                // '<div class="dropdown dropdown-action">' +
                                // '<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>' +
                                // '<div class="dropdown-menu dropdown-menu-right">' +
                                // '<a class="dropdown-item edit_dealers" href="#" data-toggle="modal" data-target="#edit_dealers" data="' +
                                // data[i].id +
                                // '"><i class="la la-pencil" style="font-size:20px;"></i></a>' +
                                // '<a class="dropdown-item delete_dealers" href="#" data-toggle="modal" data-target="#delete_dealers" data="' +
                                // data[i].id +
                                // '"><i class="la la-trash" style="font-size:20px;"></i></a>' +
                                // '</div>' +
                                // '</div>' +
                                // '</td>' +

                                '</tr>';
                        }


                        $('#dealersTable').html(html);

                    },
                    error: function() {
                        toastr.error('something went wrong');
                    }

                });
            }

            //Edit Dealers
            $('#dealersTable').on('click', '.edit_dealers', function(e) {
                e.preventDefault();

                var id = $(this).attr('data');

                $('#edit_dealer_modal').modal('show');

                $.ajax({

                    type: 'ajax',
                    method: 'get',
                    url: '{{ url('dealers-edit') }}',
                    data: {
                        id: id
                    },
                    async: false,
                    dataType: 'json',
                    success: function(data) {

                        $('input[name=dealer_id]').val(data.dealer.id);
                        $('input[name=title]').val(data.dealer.title);
                        $('input[name=phone]').val(data.dealer.phone);
                        $('input[name=email]').val(data.dealer.email);
                        $('#store_image').html(
                            '<img src="{{ asset('storage/app/public/uploads/dealers/') }}/' +
                            data.dealer.image +
                            '" class="mt-4 ml-4" width="40px" height="50px" />'
                        );
                        $('#store_image').append(
                            '<input type="hidden" name="hidden_image" value="' + data
                            .dealer
                            .image + '" />');
                    },

                    error: function() {

                        toastr.error('something went wrong');

                    }

                });

            });

            //Update Dealer
            $('.update_dealer').on('click', function(e) {
                e.preventDefault();

                let EditFormData = new FormData($('#edit_dealer_form')[0]);

                $.ajax({
                    type: "POST",
                    url: "{{ url('dealers-update') }}",
                    data: EditFormData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    contentType: false,
                    processData: false,
                    dataType: "json",
                    beforeSend: function() {
                        $('.update_dealer').text('Saving...');
                        $(".update_dealer").prop("disabled", true);
                    },
                    success: function(response) {

                        if (response.status == 200) {
                            $('#edit_dealer_modal').modal('hide');
                            $('#edit_dealer_form').trigger("reset");
                            $('.update_dealer').text('Save Changes');
                            $(".update_dealer").prop("disabled", false);
                            toastr.success(response.success);
                            getDealers();
                        }

                        if (response.errors) {
                            $('.update_dealer').text('Save Changes');
                            $(".update_dealer").prop("disabled", false);
                            toastr.error(response.errors);
                        }
                    },
                    error: function() {
                        toastr.error('something went wrong');
                        $('.update_dealer').text('Save Changes');
                        $(".update_dealer").prop("disabled", false);
                    }
                });

            });

            // Delete Dealer
            $('#dealersTable').on('click', '.delete_dealers', function(e) {
                e.preventDefault();

                var id = $(this).attr('data');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to Delete this Data!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "GET",
                            url: "{{ url('dealers-delete') }}",
                            data: {
                                id: id
                            },
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            dataType: "json",
                            success: function(response) {

                                toastr.success(response.success);
                                getDealers();
                            }
                        });
                    }
                })

            });


            //Datatables
            $('table').DataTable();
        });
    </script>
@endsection
