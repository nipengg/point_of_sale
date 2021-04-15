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
                                <h3 class="panel-title">Data Buku</h3>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-success" href="{{url('create/book')}}"> Add new Book</a>
                            </div>
                        </div>
                        <br/>
                        <div class="panel-body">
                            <table id="table_id" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Judul</th>
                                    <th>ISBN</th>
                                    <th>Penulisan</th>
                                    <th>Penerbit</th>
                                    <th>Tahun Terbit</th>
                                    <th>Jumlah Buku</th>
                                    <th>Harga Pokok</th>
                                    <th>Harga Jual</th>
                                    <th>PPN</th>
                                    <th>Diskon</th>
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
                                    <td>{{ $book->harga_pokok }}</td>
                                    <td>{{ $book->harga_jual }}</td>
                                    <td>{{ $book->ppn }}</td>
                                    <td>{{ $book->diskon }}</td>
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