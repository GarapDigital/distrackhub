@extends('panel.layout.app', ['breadcrumb_heading' => 'Github Repository', 'breadcrumb_sections' => ['Connect Github', 'Github Repository', 'Commit List']])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h4 class="card-title">Commit List</h4>
                        <a href="{{ route('panel.github.index') }}" class="btn btn-secondary">
                            <i class="fa fa-arrow-left"></i>
                            {{ __('Back') }}
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table border table-striped table-bordered text-nowrap">
                            <thead>
                                <tr>
                                    <th class="text-center align-middle">No</th>
                                    <th class="text-center align-middle">Sha</th>
                                    <th class="text-center align-middle">Committed By</th>
                                    <th class="text-center align-middle">Commit Message</th>
                                    <th class="text-center align-middle">Visit Commit Url</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($commits as $commit)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ substr_replace($commit['sha'], '...', 10) }}</td>
                                        <td class="text-center">{{ $commit['committer']['name'] }}</td>
                                        <td>{{ substr_replace($commit['message'], '...', 30) }}</td>
                                        <td class="text-center">
                                            <a href="{{ $commit['html_url'] }}" target="_blank">Visit Url</a>
                                        </td>
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
                                    <th class="text-center align-middle">Sha</th>
                                    <th class="text-center align-middle">Committed By</th>
                                    <th class="text-center align-middle">Commit Message</th>
                                    <th class="text-center align-middle">Visit Commit Url</th>
                                </tr>
                            </tfoot>
                        </table>
                        @if (count($commits) > 0)
                            <x-pagination :data="$commits" />
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
