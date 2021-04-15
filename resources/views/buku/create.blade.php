@extends('home')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Input Book</h3>
                        </div>
                        <div class="panel-body">
                            <form action="{{ url('/store/book') }}" method="POST">
                                {{csrf_field()}}       
                                 <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Judul :</strong>
                                            <input type="text" name="judul" class="form-control" placeholder="Judul" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>ISBN :</strong>
                                            <input type="number" name="isbn" class="form-control" placeholder="ISBN" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Penulis :</strong>
                                            <input type="text" name="penulis" class="form-control" placeholder="Penulis" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Penerbit :</strong>
                                            <input type="text" name="penerbit" class="form-control" placeholder="Penerbit" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Jumlah Buku :</strong>
                                            <input type="number" name="jumlah_buku" class="form-control" placeholder="Jumlah Buku" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Tahun Terbit :</strong>
                                            <input type="date" name="tahun_terbit" class="form-control" placeholder="Tahun Terbit" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Harga Pokok :</strong>
                                            <input type="number" name="harga_pokok" class="form-control" placeholder="Harga Pokok" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Harga Jual :</strong>
                                            <input type="number" name="harga_jual" class="form-control" placeholder="Harga Jual" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>PPN :</strong>
                                            <input type="number" name="ppn" class="form-control" placeholder="PPN" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Discount :</strong>
                                            <input type="number" name="diskon" class="form-control" placeholder="Discount" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                            <button type="submit" class="btn btn-success">Submit</button>
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