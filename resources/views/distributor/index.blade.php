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
                                <h3 class="panel-title">Data Distributor</h3>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-success" href="{{url('create/distributor')}}"> Add new Distributor</a>
                            </div>
                        </div>
                        <br>
                        <div class="panel-body">
                            <table id="table_id" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Distributor Name</th>
                                    <th>Address</th>
                                    <th>Telephone</th>
                                    <th>Created At</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($distributors as $distributor)
                                <tr>
                                    <td>{{ $distributor->id_distributor }}</td>
                                    <td>{{ $distributor->nama_distributor }}</td>
                                    <td>{{ $distributor->alamat }}</td>
                                    <td>{{ $distributor->telpon }}</td>
                                    <td>{{ $distributor->created_at }}</td>
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