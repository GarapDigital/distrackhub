@extends('panel.layout.app', ['breadcrumb_heading' => 'Github Repository', 'breadcrumb_sections' => ['Connect Github', 'Github Repository']])

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
                                    <th class="text-center align-middle">Repo Name</th>
                                    <th class="text-center align-middle">Stars</th>
                                    <th class="text-center align-middle">Fork</th>
                                    <th class="text-center align-middle">Url</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($repositories as $repository)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $repository['full_name'] }}</td>
                                        <td class="text-center">{{ $repository['stars_count'] }}</td>
                                        <td class="text-center">{{ $repository['forks_count'] }}</td>
                                        <td class="text-center">
                                            <a href="{{ $repository['html_url'] }}">Visit Url</a>
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
                                    <th class="text-center align-middle">Repo Name</th>
                                    <th class="text-center align-middle">Stars</th>
                                    <th class="text-center align-middle">Fork</th>
                                    <th class="text-center align-middle">Url</th>
                                </tr>
                            </tfoot>
                        </table>
                        <x-pagination :data="$repositories"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
