                @extends('setup.master')
                @section('content')
                    <div class="page-wrapper">
                        <div class="content container-fluid">
                            <div class="page-header">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h3 class="page-title">Welcome {{ Auth::user()->name }}!</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                                    <div class="card dash-widget">
                                        <div class="card-body">
                                            <span class="dash-widget-icon"><i class="fa fa-cubes"></i></span>
                                            <div class="dash-widget-info">
                                                <h3>10</h3>
                                                <span>Employees</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                                    <div class="card dash-widget">
                                        <div class="card-body">
                                            <span class="dash-widget-icon"><i class="fa fa-usd"></i></span>
                                            <div class="dash-widget-info">
                                                <h3>20</h3>
                                                <span>Jobs</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                                    <div class="card dash-widget">
                                        <div class="card-body">
                                            <span class="dash-widget-icon"><i class="fa fa-diamond"></i></span>
                                            <div class="dash-widget-info">
                                                <h3>30</h3>
                                                <span>Tickets</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                                    <div class="card dash-widget">
                                        <div class="card-body">
                                            <span class="dash-widget-icon"><i class="fa fa-user"></i></span>
                                            <div class="dash-widget-info">
                                                <h3>40</h3>
                                                <span>Cv Bank</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-12 col-lg-12 col-xl-6 d-flex">
                                    <div class="card flex-fill dash-statistics">
                                        <div class="card-body">
                                            <h5 class="card-title">Today</h5>
                                            <div class="stats-list">
                                                <div class="stats-info">
                                                    <p>Leaves Request <strong><small></small></strong></p>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 31%" aria-valuenow="31" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="stats-info">
                                                    <p>Pending Leaves Request <strong><small>/</small></strong></p>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 31%" aria-valuenow="31" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="stats-info">
                                                    <p>Approved Leaves Request <strong>10 <small>/ 10</small></strong></p>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 62%" aria-valuenow="62" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="stats-info">
                                                    <p>Pending Tickets <strong>10 <small>/ 10</small></strong></p>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                            style="width: 62%" aria-valuenow="62" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="stats-info">
                                                    <p>Close Tickets <strong>10 <small>/ 10</small></strong></p>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 22%" aria-valuenow="22" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-12 col-lg-6 col-xl-6 d-flex">
                                    <div class="card flex-fill" style="overflow-y:visible">
                                        <div class="card-body">
                                            <h4 class="card-title">Today Absent <span
                                                    class="badge bg-inverse-danger ml-2">10</span>
                                            </h4>


                                            <div class="leave-info-box">
                                                <div class="media align-items-center">
                                                    <a href=""><img class="avatar" alt="" src=""></a>
                                                    <div class="media-body">
                                                        <div class="text-sm my-0">20</div>
                                                    </div>
                                                </div>

                                                <div class="row align-items-center mt-3">
                                                    <div class="col-6">
                                                        <h6 class="mb-0"></h6>
                                                        <span class="text-sm text-muted">Leave Date</span>
                                                    </div>
                                                    <div class="col-6 text-right">
                                                        <span class="badge bg-inverse-danger">Pending</span>
                                                    </div>
                                                </div>
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
