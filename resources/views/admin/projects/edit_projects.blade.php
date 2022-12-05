@extends('setup.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Edit Projects</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit Projects</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Edit Projects</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('update-projects') }}" method="POST" id="projectForm" class="validation-form"
                                enctype="multipart/form-data">

                                <input type="hidden" name="project_edit_id" value="{{ $data['projects']->id }}">
                                @csrf
                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Project Name</label>
                                            <input type="text" name="name" value="{{ $data['projects']->name }}"
                                                class="form-control" placeholder="Enter Project Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="p_image" class="form-control">
                                            <img src="{{ asset('storage/app/public/uploads/projects/' . $data['projects']->p_image ?? '') }}"
                                                class="mt-3" width="50" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea name="description" class="form-control" cols="30" rows="3" placeholder="Message here..." required>{{ $data['projects']->description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary save_project mb-2 mr-2">Save
                                        Changes</button>
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

        });
    </script>
@endsection
