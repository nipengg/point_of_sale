@extends('home')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Edit Book</h3>
                        </div>
                        <div class="panel-body">
                            <form action="{{ url('/update/book/'.$books->id_buku) }}" method="POST">
                                {{csrf_field()}}       
                                 <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Judul :</strong>
                                            <input type="text" name="judul" value="{{ $books->judul }}" class="form-control" placeholder="Judul" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>ISBN :</strong>
                                            <input type="number" name="isbn" value="{{ $books->isbn }}" class="form-control" placeholder="ISBN" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Penulis :</strong>
                                            <input type="text" name="penulis" value="{{ $books->penulis }}" class="form-control" placeholder="Penulis" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Penerbit :</strong>
                                            <input type="text" name="penerbit" value="{{ $books->penerbit }}" class="form-control" placeholder="Penerbit" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Jumlah Buku :</strong>
                                            <input type="number" name="jumlah_buku" value="{{ $books->jumlah_buku }}" class="form-control" placeholder="Jumlah Buku" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Tahun Terbit :</strong>
                                            <input type="date" name="tahun_terbit" value="{{ $books->tahun_terbit }}" class="form-control" placeholder="Tahun Terbit" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Harga Pokok :</strong>
                                            <input type="number" name="harga_pokok" value="{{ $books->harga_pokok }}" class="form-control" placeholder="Harga Pokok" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Harga Jual :</strong>
                                            <input type="number" name="harga_jual" value="{{ $books->harga_jual }}" class="form-control" placeholder="Harga Jual" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>PPN :</strong>
                                            <input type="number" name="ppn" value="{{ $books->ppn }}" class="form-control" placeholder="PPN" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Discount :</strong>
                                            <input type="number" name="diskon" value="{{ $books->diskon }}" class="form-control" placeholder="Discount" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                            <button type="submit" class="btn btn-success">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection