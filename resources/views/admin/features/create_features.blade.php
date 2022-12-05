@extends('setup.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Create Features</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('admin')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Create Features</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Create Features</h4>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST" id="projectForm" class="validation-form"
                                enctype="multipart/form-data">
                                {{-- @csrf --}}

                                    <table class="table" id="new_row">
                                        <tr>
                                            <td class="border-0">
                                                <div class="form-group">
                                                    <label>Project</label>
                                                   <select name="project_id[]" class="form-control" required>
                                                    <option value="" selected disabled>Choose</option>
                                                    @isset($data)
                                                        @foreach ($data['projects'] as $project)
                                                            <option value="{{ $project->id }}">{{ $project->name }}</option>
                                                        @endforeach
                                                    @endisset
                                                   </select>
                                                </div>
                                            </td>
                                            <td class="border-0">
                                                <div class="form-group">
                                                    <label>Feature</label>
                                                    <input type="text" name="feature[]" class="form-control"
                                                        placeholder="Enter Feature" required>
                                                </div>
                                            </td>

                                            <td class="border-0">
                                                <div class="form-group">
                                                    <label>Icon</label>
                                                    <input type="file" name="icon[]" class="form-control"
                                                        placeholder="Enter Icon" required>
                                                </div>
                                            </td>

                                            <td class="border-0">
                                                <button type="button" class="btn btn-primary add_more"
                                                    style="margin-top: 35px;" title="Add Feature"><i
                                                        class="fa fa-plus"></i></button>
                                            </td>
                                        </tr>
                                    </table>

                                </div>
                                <div class="row" id="new_row">

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


            // Add New Row
            $('#projectForm').on('click', '.add_more', function() {
                var html1 = '';
                html1 += '<tr class="secondRow">' +
                    '<td class="border-0">' +
                        '<div class="form-group">' +
                            '<label>Project</label>' +
                            '<select name="project_id[]" class="form-control" required>' +
                            '<option value="" selected disabled>Choose</option>' +
                            '@isset($data)' +
                                '@foreach ($data["projects"] as $project)' +
                                    '<option value="{{ $project->id }}">{{ $project->name }}</option>' +
                                '@endforeach' +
                            '@endisset' +
                            '</select>' +
                        '</div>' +
                    '</td>' +
                    '<td class="border-0">' +
                    '<div class="form-group" id="fc">' +
                    '<label>Feature</label>' +
                    '<input type="text" name="feature[]" class="form-control" placeholder="Enter Feature" required>' +
                    '</div>' +
                    '</td>' +
                    '<td class="border-0">' +
                    '<div class="form-group" id="fc">' +
                    '<label>Icon</label>' +
                    '<input type="file" name="icon[]" class="form-control" placeholder="Enter Icon" required>' +
                    '</div>' +
                    '</td>' +
                    '<td class="border-0">' +
                    '<button type="button" class="btn btn-danger remove_row" style="margin-top: 35px;" title="Remove Feature"><i class="fa fa-trash"></button>' +
                    '</td>' +
                    '</tr>';
                $('#new_row').append(html1);
            });


            // Remove New Row
            $("#new_row").on('click', '.remove_row', function() {

                $(this).closest('tr').remove();
            });


            // save projects
            $('#projectForm').on('submit', function(e) {
                e.preventDefault();

                let formData = new FormData($('#projectForm')[0]);

                $.ajax({
                    type: "POST",
                    url: "{{ url('store-feature') }}",
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
                            // Remove New Row
                            $('.secondRow').remove();
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
