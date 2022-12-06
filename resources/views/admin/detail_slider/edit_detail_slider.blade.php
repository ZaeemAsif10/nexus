@extends('setup.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Edit Project Slider Detail</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit Project Slider Detail</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Edit Project Slider Detail</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('update-detail-slider') }}" method="POST" id="projectForm"
                                class="validation-form" enctype="multipart/form-data">
                                <input type="hidden" name="edit_detail_id" value="{{ $data['detail_slider']->id }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Project</label>
                                            <select name="project_id" class="form-control" required>
                                                <option value="" selected disabled>Choose</option>
                                                @isset($data)
                                                    @foreach ($data['projects'] as $project)
                                                        <option value="{{ $project->id }}"
                                                        {{ $data['detail_slider']->project_id == $project->id ? 'selected' : '' }}
                                                        >{{ $project->name }}</option>
                                                    @endforeach
                                                @endisset
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" value="{{ $data['detail_slider']->title }}"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="slide_image" class="form-control">
                                            <img src="{{ asset('storage/app/public/uploads/project/detail/slider/' . $data['detail_slider']->slide_image) }}"
                                                width="50px" class="mt-3" alt="">
                                        </div>
                                    </div>
                                </div>

                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary mb-2 mr-2">Save Changes</button>
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
