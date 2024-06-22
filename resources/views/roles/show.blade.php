@extends('layouts.app')

@section('content')
    <!-- page header -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Roles</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/home"><i class="fas fa-hotel"></i></a></li>
                        <li class="breadcrumb-item"><a href="/roles">Roles</a></li>
                        <li class="breadcrumb-item"><a href="#">Role Details</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- page header end -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center m-l-0">
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6 text-right">
                            <a class="btn btn-secondary mb-3 btn-sm" href="/roles"><i class="fas fa-angle-left"></i>
                                Back</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                Name:
                                <div>
                                    <strong>
                                        <h4>{{ $role->name }}</h4>
                                    </strong>
                                </div>

                            </div>
                        </div>
                        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                        Permissions:
                            @if (!empty($rolePermissions))
                                @foreach ($rolePermissions as $v)
                                    <div>
                                        <strong>
                                            <h5>
                                                <label class="label label-success">{{ $v->name }},
                                                </label>
                                            </h5>
                                        </strong>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div> --}}
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Permissions:</strong>
                                @if (!empty($rolePermissions))
                                    @foreach ($rolePermissions as $v)
                                        <label class="badge badge-success">{{ $v->name }}</label>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
