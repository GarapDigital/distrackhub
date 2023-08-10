@extends('panel.layout.app', ['breadcrumb_heading' => 'Dashboard', 'breadcrumb_sections' => ['Dashboard']])

@section('content')
    <!-- *************************************************************** -->
    <!-- Start First Cards -->
    <!-- *************************************************************** -->
    <div class="row">
        <div class="col-12">
            <div class="card border-end">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="d-inline-flex align-items-center">
                                <h2 class="text-dark mb-1 font-weight-medium">0</h2>
                            </div>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Total Repository
                            </h6>
                        </div>
                        <div class="ms-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i class="fas fa-code-branch" style="font-size: 2em"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- *************************************************************** -->
    <!-- End First Cards -->
    <!-- *************************************************************** -->
    <!-- *************************************************************** -->
    <!-- *************************************************************** -->
    <!-- Start Location and Earnings Charts Section -->
    <!-- *************************************************************** -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Http Request Activity</h4>
                    <div class="mt-4 activity">
                        <div class="d-flex align-items-start border-left-line">
                            <div>
                                <a href="javascript:void(0)" class="btn btn-cyan btn-circle mb-2 btn-item">
                                    <i data-feather="bell"></i>
                                </a>
                            </div>
                            <div class="ms-3 mt-2">
                                <h5 class="text-dark font-weight-medium mb-2">Notification
                                </h5>
                                <p class="font-14 mb-2 text-muted">Create Assessment Group from {John Schaap Doe}</p>
                                <span class="font-weight-light font-14 mb-1 d-block text-muted">{Now.}</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-start border-left-line">
                            <div>
                                <a href="javascript:void(0)" class="btn btn-cyan btn-circle mb-2 btn-item">
                                    <i data-feather="bell"></i>
                                </a>
                            </div>
                            <div class="ms-3 mt-2">
                                <h5 class="text-dark font-weight-medium mb-2">Notification
                                </h5>
                                <p class="font-14 mb-2 text-muted">Create Assessment Group from {John Schaap Doe}</p>
                                <span class="font-weight-light font-14 mb-1 d-block text-muted">{3 Minutes Ago.}</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-start border-left-line">
                            <div>
                                <a href="javascript:void(0)" class="btn btn-cyan btn-circle mb-2 btn-item">
                                    <i data-feather="bell"></i>
                                </a>
                            </div>
                            <div class="ms-3 mt-2">
                                <h5 class="text-dark font-weight-medium mb-2">Notification
                                </h5>
                                <p class="font-14 mb-2 text-muted">Create Assessment Group from {John Schaap Doe}</p>
                                <span class="font-weight-light font-14 mb-1 d-block text-muted">{5 Minutes Ago.}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <a href="#">{{ __('Load More') }}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- *************************************************************** -->
    <!-- End Location and Earnings Charts Section -->
    <!-- *************************************************************** -->
@endsection
