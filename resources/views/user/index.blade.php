@extends('home')

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h3 class="panel-title">Data User</h3>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-success" href="{{url('create/user')}}"> Add new user</a>
                            </div>
                        </div>
                        <br>
                        <div class="panel-body">
                            <table id="table_id" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Telepon</th>
                                    <th>Level</th>
                                    <th>Join at</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->telepon }}</td>
                                    <td>{{ $user->level }}</td>
                                    <td>{{ $user->created_at }}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    });
</script>
@endsection