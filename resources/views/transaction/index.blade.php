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
                                <h3 class="panel-title">Data Transaction</h3>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-success" href="{{url('create/transaction')}}"> Add new Transaction</a>
                            </div>
                        </div>
                        <br>
                        <div class="panel-body">
                            <table id="table_id" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Buku</th>
                                    <th>Kasir</th>
                                    <th>Jumlah Buku</th>
                                    <th>Bayar</th>
                                    <th>Kembalian</th>
                                    <th>Total</th>
                                    <th>Created At</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($transactions as $transaction)
                                <tr>
                                    <td>{{ $transaction->id }}</td>
                                    <td>{{ $transaction->id_buku }}</td>
                                    <td>{{ $transaction->id_kasir }}</td>
                                    <td>{{ $transaction->jumlah_buku }}</td>
                                    <td>{{ $transaction->bayar }}</td>
                                    <td>{{ $transaction->kembalian }}</td>
                                    <td>{{ $transaction->total_harga }}</td>
                                    <td>{{ $transaction->tanggal }}</td>
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