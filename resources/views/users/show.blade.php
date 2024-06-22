@extends('layouts.app')

@section('content')
    <!-- page header -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Assign User Permissions</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/home"><i class="fas fa-hotel"></i></a></li>
                        <li class="breadcrumb-item"><a href="/users">Users</a></li>
                        <li class="breadcrumb-item"><a href="#">Assign User Permissions</a></li>
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
                            <a class="btn btn-secondary mb-3 btn-sm" href="/users"><i class="fas fa-angle-left"></i>
                                Back</a>
                        </div>
                    </div>
                    {!! Form::model($user, ['method' => 'PATCH', 'route' => ['sync-permissions', $user->id]]) !!}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <h5>Select Permissions*:<br></h5>
                                <div class="row">
                                    @foreach ($permissions as $permission)
                                        <div class="col-xs-12 col-sm-12 col-md-3">
                                            {!! Form::checkbox(
                                                'permissions[]',
                                                $permission->id,
                                                in_array($permission->id, $userPermissions) ? true : false,
                                                ['class' => '', 'multiple'],
                                            ) !!}
                                            <label for="">{{ $permission->name }}</label><br>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-success">Save Permissions</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
