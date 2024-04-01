@extends('user/template')
@section('content')
    <div class=" py-5 text-center">
        <div class="pb-5">
            <div class="d-flex justify-content-between">
                <div class="">
                    <h2>CRUD user</h2>
                </div>
                <div class="">
                    <a class="btn btn-success" href="{{ route('user.create') }}"> Input
                        User</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table ">
            <tr class="bg-warning bg-gradient text-white">
                <th width="200px" class="text-center">User id</th>
                <th width="150px" class="text-center">Level id</th>
                <th width="200px"class="text-center">username</th>
                <th width="10px"class="text-center">nama</th>
                <th width="100px"class="text-center">password</th>
                <th width="100px"class="text-center"></th>
            </tr>
            @foreach ($useri as $m_user)
                <tr>
                    <td class="bg-light">{{ $m_user->user_id }}</td>
                    <td>{{ $m_user->level_id }}</td>
                    <td class="bg-light">{{ $m_user->username }}</td>
                    <td>{{ $m_user->name }}</td>
                    <td class="bg-light">{{ $m_user->password }}</td>
                    <td class="text-center">
                        <form action="{{ route('user.destroy', $m_user->user_id) }}"method="POST"
                            class="d-flex justify-content-center">
                            <a class="btn btn-info btn-sm mx-1" href="{{ route('user.show', $m_user->user_id) }}">Show</a>
                            <a class="btn btn-primary btn-sm mx-1"
                                href="{{ route('user.edit', $m_user->user_id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm mx-1"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
