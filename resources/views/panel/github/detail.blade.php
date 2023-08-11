@extends('panel.layout.app', ['breadcrumb_heading' => 'Github Repository', 'breadcrumb_sections' => ['Connect Github', 'Github Repository', 'Detail']])

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="card-title">Detail Github Repository</h4>
                    <a href="{{ route('panel.github.index') }}" class="btn btn-secondary">
                        <i class="fa fa-arrow-left"></i>
                        {{ __('Back') }}
                    </a>
                </div>
                <form action="" method="POST">
                    @csrf
                    <div class="form-body">
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label class="form-label">ID</label>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" value="{{ $repository['id'] }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Node ID</label>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" value="{{ $repository['node_id'] }}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label class="form-label">Full Name</label>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" value="{{ $repository['full_name'] }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Name</label>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" value="{{ $repository['name'] }}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="form-label">Description</label>
                                <div class="form-group mb-3">
                                    <textarea class="form-control" rows="5" disabled>{{ $repository['description'] }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label class="form-label">Clone URL</label>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" value="{{ $repository['clone_url'] }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">SSH Url</label>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" value="{{ $repository['ssh_url'] }}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <label class="form-label">Stars</label>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" value="{{ $repository['stars_count'] }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Forks</label>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" value="{{ $repository['forks_count'] }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Visibility</label>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" value="{{ $repository['is_private'] ? 'Private' : 'Public' }}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label class="form-label">Created at</label>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" value="{{ \Carbon\Carbon::parse($repository['created_at'])->format('D, d F Y H:i:s') }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Updated at</label>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" value="{{ \Carbon\Carbon::parse($repository['updated_at'])->format('D, d F Y H:i:s') }}" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
