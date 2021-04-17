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
                                <a class="btn btn-success" href="{{url('book/cetak_pdf')}}" target="_blank"> Export PDF</a>
                            </div>
                        </div>
                        <br/>
                        <div class="panel-body">
                            <table id="table_id" class="table table-hover" style="font-size: 11pt">
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
                                    <th>Action</th>
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
                                    <td style="text-align: center">{{ $book->diskon }}%</td>
                                    <td>
                                        <a class="btn btn-success btn-xs" href="{{url('/edit/book/'.$book->id_buku)}}">Edit</a>
                                        <a class="btn btn-danger btn-xs" href="{{url('/delete/book/'.$book->id_buku)}}">Delete</a>
                                    </td>
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