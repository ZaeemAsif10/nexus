@extends('setup.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Project Detail Slider</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Project Detail Slider</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="{{ url('create-detail-slider') }}" class="btn add-btn" title="Add Project Detail Slider"><i
                                class="fa fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card mb-0">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Project Detail Slider</h4>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-stripped mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Project</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="featureTable">

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
    <div class="modal fade" id="edit_project_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Edit Project</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="" enctype="multipart/form-data" id="edit_project_form">
                        <input type="hidden" name="project_id">
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
                            <button class="btn btn-primary update_project">Save Changes</button>
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

            toastr.options.timeOut = 3000;
            @if (Session::has('error'))
                toastr.error('{{ Session::get('error') }}');
            @elseif (Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
            @endif

            getFeature();
            //Get Projects
            function getFeature() {

                $.ajax({

                    url: '{{ url('/project-detail-slider') }}',
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
                                '<td>' + data[i].project.name + '</td>' +
                                '<td>' + data[i].title + '</td>' +
                                '<td><img src="{{ asset('storage/app/public/uploads/project/detail/slider/') }}/' +
                                data[i].slide_image + '" width="50px" height="40px" ></td>' +
                                '<td class="text-right">' +
                                '<div class="dropdown dropdown-action">' +
                                '<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>' +
                                '<div class="dropdown-menu dropdown-menu-right">' +
                                '<a class="dropdown-item" href="edit-detail-slider/' + data[i].id +
                                '"><i class="la la-pencil" style="font-size:20px;"></i></a>' +
                                '</div>' +
                                '</div>' +
                                '</td>' +
                                '</tr>';
                        }


                        $('#featureTable').html(html);

                    },
                    error: function() {
                        toastr.error('something went wrong');
                    }

                });
            }

            //Edit Projects
            $('#featureTable').on('click', '.edit_project', function(e) {
                e.preventDefault();

                var id = $(this).attr('data');

                $('#edit_project_modal').modal('show');

                $.ajax({

                    type: 'ajax',
                    method: 'get',
                    url: '{{ url('projects-edit') }}',
                    data: {
                        id: id
                    },
                    async: false,
                    dataType: 'json',
                    success: function(data) {

                        $('input[name=project_id]').val(data.project.id);
                        $('input[name=title]').val(data.project.title);
                        $('#store_image').html(
                            '<img src="{{ asset('storage/app/public/uploads/projects/') }}/' +
                            data.project.image +
                            '" class="mt-4 ml-4" width="40px" height="50px" />'
                        );
                        $('#store_image').append(
                            '<input type="hidden" name="hidden_image" value="' + data
                            .project
                            .image + '" />');
                    },

                    error: function() {

                        toastr.error('something went wrong');

                    }

                });

            });

            //Update Projects
            $('.update_project').on('click', function(e) {
                e.preventDefault();

                let EditFormData = new FormData($('#edit_project_form')[0]);

                $.ajax({
                    type: "POST",
                    url: "{{ url('projects-update') }}",
                    data: EditFormData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    contentType: false,
                    processData: false,
                    dataType: "json",
                    beforeSend: function() {
                        $('.update_project').text('Saving...');
                        $(".update_project").prop("disabled", true);
                    },
                    success: function(response) {

                        if (response.status == 200) {
                            $('#edit_project_modal').modal('hide');
                            $('#edit_project_form').trigger("reset");
                            $('.update_project').text('Save Changes');
                            $(".update_project").prop("disabled", false);
                            toastr.success(response.success);
                            getProjects();
                        }

                        if (response.errors) {
                            $('.update_project').text('Save Changes');
                            $(".update_project").prop("disabled", false);
                            toastr.error(response.errors);
                        }
                    },
                    error: function() {
                        toastr.error('something went wrong');
                        $('.update_project').text('Save Changes');
                        $(".update_project").prop("disabled", false);
                    }
                });

            });

            // Delete Projects
            $('#featureTable').on('click', '.delete_project', function(e) {
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
                            url: "{{ url('projects-delete') }}",
                            data: {
                                id: id
                            },
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            dataType: "json",
                            success: function(response) {

                                toastr.success(response.success);
                                getProjects();
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
