@extends('setup.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Edit Features</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit Features</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Edit Features</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('update-feature') }}" method="POST" id="projectForm" class="validation-form"
                                enctype="multipart/form-data">
                                <input type="hidden" name="edit_f_id" value="{{ $data['feature']->id }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="feature" value="{{ $data['feature']->feature }}" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="file" name="icon" class="form-control">
                                            <img src="{{ asset('storage/app/public/uploads/features/'.$data['feature']->icon) }}" width="50px" class="mt-3" alt="">
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
