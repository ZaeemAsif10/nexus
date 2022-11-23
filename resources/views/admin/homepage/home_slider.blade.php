@extends('setup.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Home Slider</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Home Slider</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="{{ url('create-home-slider') }}" class="btn add-btn" title="Add Home Slider"><i
                                class="fa fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card mb-0">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Home Slider</h4>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-stripped mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="sliderTable">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Edit Porject Modal Start --}}
    <div class="modal fade" id="edit_slider_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Edit Home Slider</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="" enctype="multipart/form-data" id="edit_slider_form">
                        <input type="hidden" name="slider_id">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" name="title" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input type="file" name="image" class="form-control">
                                    <span id="store_image"></span>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary update_slider">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Edit Porject Modal End --}}
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {

            getHomeSlider();
            //Get slider
            function getHomeSlider() {

                $.ajax({

                    url: '{{ url('/get-slider') }}',
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
                                '<td>' + data[i].title + '</td>' +
                                '<td><img src="{{ asset('storage/app/public/uploads/home/slider/') }}/' +
                                data[i].image + '" width="50px" height="40px" ></td>' +
                                '<td class="text-right">' +
                                '<div class="dropdown dropdown-action">' +
                                '<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>' +
                                '<div class="dropdown-menu dropdown-menu-right">' +
                                '<a class="dropdown-item edit_slider" href="#" data="' + data[i].id +
                                '"><i class="la la-pencil" style="font-size:20px;"></i></a>' +
                                '<a class="dropdown-item delete_slider" href="#" data="' + data[i].id +
                                '"><i class="la la-trash" style="font-size:20px;"></i></a>' +
                                '</div>' +
                                '</div>' +
                                '</td>' +

                                '</tr>';
                        }


                        $('#sliderTable').html(html);

                    },
                    error: function() {
                        toastr.error('something went wrong');
                    }

                });
            }

            //Edit slider
            $('#sliderTable').on('click', '.edit_slider', function(e) {
                e.preventDefault();

                var id = $(this).attr('data');

                $('#edit_slider_modal').modal('show');

                $.ajax({

                    type: 'ajax',
                    method: 'get',
                    url: '{{ url('edit-home-slider') }}',
                    data: {
                        id: id
                    },
                    async: false,
                    dataType: 'json',
                    success: function(data) {

                        $('input[name=slider_id]').val(data.slider.id);
                        $('input[name=title]').val(data.slider.title);
                        $('#store_image').html(
                            '<img src="{{ asset('storage/app/public/uploads/home/slider/') }}/' +
                            data.slider.image +
                            '" class="mt-4 ml-4" width="40px" height="50px" />'
                        );
                        $('#store_image').append(
                            '<input type="hidden" name="hidden_image" value="' + data
                            .slider
                            .image + '" />');
                    },

                    error: function() {

                        toastr.error('something went wrong');

                    }

                });

            });

            //Update slider
            $('.update_slider').on('click', function(e) {
                e.preventDefault();

                let EditFormData = new FormData($('#edit_slider_form')[0]);

                $.ajax({
                    type: "POST",
                    url: "{{ url('update-home-slider') }}",
                    data: EditFormData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    contentType: false,
                    processData: false,
                    dataType: "json",
                    beforeSend: function() {
                        $('.update_slider').text('Saving...');
                        $(".update_slider").prop("disabled", true);
                    },
                    success: function(response) {

                        if (response.status == 200) {
                            $('#edit_slider_modal').modal('hide');
                            $('#edit_slider_form').trigger("reset");
                            $('.update_slider').text('Save Changes');
                            $(".update_slider").prop("disabled", false);
                            toastr.success(response.success);
                            getHomeSlider();
                        }

                        if (response.errors) {
                            $('.update_slider').text('Save Changes');
                            $(".update_slider").prop("disabled", false);
                            toastr.error(response.errors);
                        }
                    },
                    error: function() {
                        toastr.error('something went wrong');
                        $('.update_slider').text('Save Changes');
                        $(".update_slider").prop("disabled", false);
                    }
                });

            });

            // Delete Projects
            $('#sliderTable').on('click', '.delete_slider', function(e) {
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
                            url: "{{ url('delete-home-slider') }}",
                            data: {
                                id: id
                            },
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            dataType: "json",
                            success: function(response) {

                                toastr.success(response.success);
                                getHomeSlider();
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
