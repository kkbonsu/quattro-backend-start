<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Roles') }}
        </h2>
    </x-slot>

    {{-- @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table>
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
                                        <a class="btn title="Show Details" href="{{ route('roles.show', $role->id) }}"><i
                                                class="feather icon-eye"></i></a>
                                        <a class="btn btn-icon btn-outline-warning" title="Edit Details"
                                            href="{{ route('roles.edit', $role->id) }}"><i
                                                class="feather icon-edit"></i></a>
                                        {{-- {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'style' => 'display:inline']) !!}
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

    {!! $roles->render() !!}
</x-app-layout>
