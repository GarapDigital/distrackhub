@extends('panel.layout.app', ['breadcrumb_heading' => 'Http Request', 'breadcrumb_sections' => ['Feature', 'Http Request']])

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    {{-- <div>
                        <a href="" class="btn btn-info">
                            <i class="fa fa-plus-circle"></i>
                            {{ __('Create') }}
                        </a>
                    </div> --}}
                </div>
                <div class="table-responsive">
                    <table class="table border table-striped table-bordered text-nowrap">
                        <thead>
                            <tr>
                                <th class="text-center align-middle">No</th>
                                <th class="text-center align-middle">Session ID</th>
                                <th class="text-center align-middle">IP Address</th>
                                <th class="text-center align-middle">Ajax</th>
                                <th class="text-center align-middle">URL</th>
                                <th class="text-center align-middle">Status Code</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($http_requests['data'] as $http_request)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $http_request['session_id'] }}</td>
                                <td class="text-center">{{ $http_request['ip'] }}</td>
                                <td class="text-center">{{ $http_request['ajax'] }}</td>
                                <td class="text-center">{{ $http_request['url'] }}</td>
                                <td class="text-center">{{ $http_request['status_code'] }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td class="text-center" colspan="8">{{ __('Empty') }}</td>
                            </tr>
                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="text-center align-middle">No</th>
                                <th class="text-center align-middle">Session ID</th>
                                <th class="text-center align-middle">IP Address</th>
                                <th class="text-center align-middle">Ajax</th>
                                <th class="text-center align-middle">URL</th>
                                <th class="text-center align-middle">Status Code</th>
                            </tr>
                        </tfoot>
                    </table>
                    @if (count($http_requests) > 0)
                        <x-pagination :data="$http_requests" />
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
