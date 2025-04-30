@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Superuser Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">User Management</h5>
                                    <p class="card-text">Manage all users in the system</p>
                                    <a href="{{ route('users.index') }}" class="btn btn-primary">Manage Users</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">System Settings</h5>
                                    <p class="card-text">Configure system-wide settings</p>
                                    <a href="{{ route('settings.index') }}" class="btn btn-primary">Settings</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">Audit Logs</h5>
                                    <p class="card-text">View system activity logs</p>
                                    <a href="{{ route('audit-logs.index') }}" class="btn btn-primary">View Logs</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">Reports</h5>
                                    <p class="card-text">Generate system reports</p>
                                    <a href="{{ route('reports.index') }}" class="btn btn-primary">View Reports</a>
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