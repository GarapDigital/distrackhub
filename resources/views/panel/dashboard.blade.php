@extends('panel.layout.app', ['breadcrumb_heading' => 'Dashboard', 'breadcrumb_sections' => ['Dashboard']])

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Latest Http Request Activity</h4>
                    <div class="mt-4 activity">
                        @forelse($http_requests as $http_request)
                        <div class="d-flex align-items-start border-left-line">
                            <div>
                                <a href="javascript:void(0)" class="btn btn-cyan btn-circle mb-2 btn-item">
                                    <i data-feather="bell"></i>
                                </a>
                            </div>
                            <div class="ms-3 mt-2">
                                <h5 class="text-dark font-weight-medium mb-2">
                                    {{ 'Session id: '.substr($http_request->session_id, 0, 7).' | '.'Ip Address: '.$http_request->ip }}
                                </h5>
                                <p class="font-14 mb-2 text-muted">
                                    {{ $http_request->url }}
                                </p>
                                <span class="font-weight-light font-14 mb-1 d-block text-muted">
                                    {{ \Carbon\Carbon::parse($http_request->created_at)->diffForHumans() }}
                                </span>
                            </div>
                        </div>
                        @empty
                        <h5 class="text-center">{{ __('Empty') }}</h5>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- *************************************************************** -->
    <!-- End Location and Earnings Charts Section -->
    <!-- *************************************************************** -->
@endsection
