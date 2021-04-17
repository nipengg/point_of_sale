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
		<h5>Struk Penjualan</h5>
        <h5>Toko buku</h5>
	</center>

	<table id="table_id" class="table table-sm">
        <thead>
            <tr>
                <th>ID</th>
                <th>Buku</th>
                <th>Kasir</th>
                <th>Jumlah Buku</th>
                <th>Total</th>
                <th>Bayar</th>
                <th>Kembalian</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <tr>
              <td>{{ $transactions->id_transaksi }}</td>
              <td>{{ $transactions->book['judul'] }}</td>
              <td>{{ $user = App\User::find($transactions->id_kasir)->name }}</td>
              <td>{{ $transactions->jumlah_buku }}</td>
              <td>@currency( $transactions->total_harga )</td>
              <td>@currency( $transactions->bayar )</td>
              <td>@currency( $transactions->kembalian )</td>
              <td>{{ $transactions->tanggal }}</td>
            </tr>
            <tr>
                <td colspan="6" style="text-align: center">Total Harga :</td>
                <td>Grand Total :</td>
                <td>@currency( $transactions->total_harga )</td>
            </tr>
            <tr>
                <td colspan="6" style="text-align: center"></td>
                <td>Bayar :</td>
                <td>@currency( $transactions->bayar )</td>
            </tr>
            <tr>
                <td colspan="6" style="text-align: center"></td>
                <td>Kembalian :</td>
                <td>@currency( $transactions->kembalian )</td>
            </tr>
        </tbody>
    </table>
</body>
</html>