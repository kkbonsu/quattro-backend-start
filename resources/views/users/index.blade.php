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
                        <h5 class="m-b-10">Users</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/home"><i class="fas fa-hotel"></i></a></li>
                        <li class="breadcrumb-item"><a href="/users">Users</a></li>
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
                            <a class="btn btn-success mb-3 btn-sm" href="/users/create"><i class="fas fa-plus"></i> Create
                                User</a>
                        </div>
                    </div>
                    <div class="dt-responsive table-responsive">
                        <table id="user-list-table" class="table nowrap">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Roles</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            @foreach ($users as $key => $user)
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <div class="d-inline-block">
                                                    <h6 class="m-b-0">{{ $user->name }}</h6>
                                                    <p class="m-b-0">{{ $user->email }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            @if (!empty($user->getRoleNames()))
                                                @foreach ($user->getRoleNames() as $v)
                                                    <label class="badge badge-success">{{ $v }}</label>
                                                @endforeach
                                            @endif
                                        </td>
                                        <td>
                                            <a class="btn btn-icon btn-outline-dark" title="Assign Permission"
                                                href="{{ route('user-permissions', $user->id) }}"><i
                                                    class="feather icon-toggle-right"></i></a>
                                            <a class="btn btn-icon btn-outline-info" title="Show Details"
                                                href="{{ route('users.show', $user->id) }}"><i
                                                    class="feather icon-eye"></i></a>
                                            <a class="btn btn-icon btn-outline-warning" title="Edit Details"
                                                href="{{ route('users.edit', $user->id) }}"><i
                                                    class="feather icon-edit"></i></a>
                                            {{-- {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id], 'style' => 'display:inline']) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-icon btn-outline-danger']) !!}
                                            {!! Form::close() !!} --}}
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
    {!! $users->render() !!}
@endsection
