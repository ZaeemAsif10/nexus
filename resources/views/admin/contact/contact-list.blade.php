@extends('setup.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Contact List</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Contact List</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card mb-0">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Contact List</h4>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-stripped mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                        </tr>
                                    </thead>
                                    <tbody id="dealersTable">
                                        @isset($data)
                                            @foreach ($data['contacts'] as $key => $contact)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $contact->name }}</td>
                                                    <td>{{ $contact->email }}</td>
                                                    <td>{{ $contact->subject }}</td>
                                                    <td>{{ $contact->message }}</td>
                                                </tr>
                                            @endforeach
                                        @endisset
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
@endsection
