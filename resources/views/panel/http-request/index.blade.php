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
                    <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
                        <thead>
                            <tr>
                                <th class="text-center align-middle">No</th>
                                <th class="text-center align-middle">Session ID</th>
                                <th class="text-center align-middle">User ID</th>
                                <th class="text-center align-middle">IP Address</th>
                                <th class="text-center align-middle">Ajax</th>
                                <th class="text-center align-middle">URL</th>
                                <th class="text-center align-middle">Payload</th>
                                <th class="text-center align-middle">Status Code</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center" colspan="8">{{ __('Empty') }}</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="text-center align-middle">No</th>
                                <th class="text-center align-middle">Session ID</th>
                                <th class="text-center align-middle">User ID</th>
                                <th class="text-center align-middle">IP Address</th>
                                <th class="text-center align-middle">Ajax</th>
                                <th class="text-center align-middle">URL</th>
                                <th class="text-center align-middle">Payload</th>
                                <th class="text-center align-middle">Status Code</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
