@extends('back.master')
@section('title', __('lang.show_role'))
@section('roles_active', 'active bg-light')
@includeIf("$directory.pushStyles")


@section('content')
    <!-- page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h2 class="h5 page-title">{{ __('lang.show_role') }}</h2>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">

            {{-- MODIFICATIONS FROM HERE --}}
            <div class="row">
                <div class="form-group col-md-6">
                    <label class="form-label">{{ __('lang.name') }}</label>
                    <p class="border form-control">{{ $admin->name ?? '--' }}</p>
                </div>

                <div class="form-group col-md-6">
                    <label class="form-label">{{ __('lang.email') }}</label>
                    <p class="border form-control">{{ $admin->email ?? '--' }}</p>
                </div>

                <div class="form-group col-12">
                    <label class="form-label">{{ __('lang.role') }}</label>
                    <p class="border form-control mb-1">{{ $admin->getRoleNames()[0] ?? '--' }}</p>
                </div>
            </div>
            {{-- MODIFICATIONS TO HERE --}}

            <hr class="text-muted">

            <div class="form-group float-end">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">{{ __('lang.close') }}</button>
            </div>

        </div>
    </div>

@endsection
@includeIf("$directory.scripts")
@includeIf("$directory.pushScripts")
