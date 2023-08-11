@extends('panel.layout.app', ['breadcrumb_heading' => 'Github Repository', 'breadcrumb_sections' => ['Connect Github', 'Github Repository']])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div>
                            <a href="{{ route('panel.github.create') }}" class="btn btn-info">
                                <i class="fa fa-plus-circle"></i>
                            </a>
                        </div>
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
                                    <th class="text-center align-middle">Action</th>
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
                                        <td class="text-center">
                                            <a href="{{ route('panel.github.detail', $repository['name']) }}" class="btn btn-primary btn-sm">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="{{ route('panel.github.edit', $repository['name']) }}" class="btn btn-success btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </a>
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
                                    <th class="text-center align-middle">Action</th>
                                </tr>
                            </tfoot>
                        </table>
                        @if (count($repositories) > 0)
                            <x-pagination :data="$repositories" />
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
