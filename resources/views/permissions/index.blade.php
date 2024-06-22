@extends('layouts.app')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

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
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- page header end -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card user-profile-list">
                <div class="card-body">
                    <div class="row align-items-center m-l-0">
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6 text-right">
                            <a class="btn btn-success mb-3 btn-sm" href="/roles/create"><i class="fas fa-plus"></i> Create
                                Role</a>
                        </div>
                    </div>
                    <div class="dt-responsive table-responsive">
                        <table id="user-list-table" class="table nowrap">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            @foreach ($roles as $key => $role)
                                <tbody>
                                    <tr>
                                        <td>{{ $role->name }}</td>
                                        <td>
                                            <a class="btn btn-icon btn-outline-info" title="Show Details"
                                                href="{{ route('roles.show', $role->id) }}"><i
                                                    class="feather icon-eye"></i></a>
                                            <a class="btn btn-icon btn-outline-warning" title="Edit Details"
                                                href="{{ route('roles.edit', $role->id) }}"><i
                                                    class="feather icon-edit"></i></a>
                                            {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'style' => 'display:inline']) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-icon btn-outline-danger']) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! $roles->render() !!}
@endsection
