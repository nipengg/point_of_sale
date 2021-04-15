@extends('home')

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Create Pasok</h3>
                        </div>
                        <div class="panel-body">
                            <form action="{{ url('/store/pasok') }}" method="POST">
                                {{csrf_field()}}       
                                 <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Distributor Name :</strong>
                                            <select class="form-control" name="distributor">
                                                @foreach ($distributors as $a)
                                                    <option value="{{ $a->id_distributor }}" name="distributor">{{ $a->nama_distributor }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Judul Buku :</strong>
                                            <select class="form-control" name="buku">
                                                @foreach ($books as $book)
                                                    <option value="{{ $book->id_buku }}" name="buku">{{ $book->judul }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Jumlah Buku :</strong>
                                            <input type="number" name="jumlah" class="form-control" placeholder="Jumlah Buku" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Date :</strong>
                                            <input type="date" name="tanggal" class="form-control" placeholder="Date" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                            <button type="submit" id="submit" class="btn btn-success">Submit</button>
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