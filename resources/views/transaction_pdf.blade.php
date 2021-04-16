<!DOCTYPE html>
<html>
<head>
	<title>Data Transaksi</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
    
    <center>
		<h5>Data Transaksi</h4>
	</center>

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
              <td>{{ $transaction->id_transaksi }}</td>
              <td>{{ $transaction->book['judul'] }}</td>
              <td>{{ $user = App\User::find($transaction->id_kasir)->name }}</td>
              <td>{{ $transaction->jumlah_buku }}</td>
              <td>{{ $transaction->bayar }}</td>
              <td>{{ $transaction->kembalian }}</td>
              <td>{{ $transaction->total_harga }}</td>
              <td>{{ $transaction->tanggal }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>