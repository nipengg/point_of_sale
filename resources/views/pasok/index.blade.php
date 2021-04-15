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
                                <h3 class="panel-title">Data Pasok</h3>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-success" href="{{url('create/pasok')}}"> Add new Pasok</a>
                            </div>
                        </div>
                        <br>
                        <div class="panel-body">
                            <table id="table_id" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Distributor Name</th>
                                    <th>Buku</th>
                                    <th>Jumlah</th>
                                    <th>Tanggal</th>
                                    <th>Created At</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($pasoks as $pasok)
                                <tr>
                                    <td>{{ $pasok->id }}</td>
                                    <td>{{ $pasok->distributor->nama_distributor }}</td>
                                    <td>{{ $pasok->book['judul'] }}</td>
                                    <td>{{ $pasok->jumlah }}</td>
                                    <td>{{ $pasok->tanggal }}</td>
                                    <td>{{ $pasok->created_at }}</td>
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