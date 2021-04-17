<!DOCTYPE html>
<html>
<head>
	<title>Data Buku</title>
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
		<h5>Data Book</h4>
	</center>

	<table id="table_id" class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>ISBN</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Jumlah Buku</th>
                <th>Harga Pokok</th>
                <th>Harga Jual</th>
                <th>PPN</th>
                <th>Discount</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($books as $book)
            <tr>
              <td>{{ $book->id_buku }}</td>
              <td>{{ $book->judul }}</td>
              <td>{{ $book->isbn }}</td>
              <td>{{ $book->penulis }}</td>
              <td>{{ $book->penerbit }}</td>
              <td>{{ $book->tahun_terbit }}</td>
              <td>{{ $book->jumlah_buku }}</td>
              <td>@currency( $book->harga_pokok )</td>
              <td>@currency( $book->harga_jual )</td>
              <td>{{ $book->ppn }}%</td>
              <td>{{ $book->diskon }}%</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>