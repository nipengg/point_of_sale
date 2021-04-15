@extends('home')

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Create Distributor</h3>
                        </div>
                        <div class="panel-body">
                            <form action="{{ url('/store/distributor') }}" method="POST">
                                {{csrf_field()}}       
                                 <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Distributor Name :</strong>
                                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Address :</strong>
                                            <textarea class="form-control" name="alamat" placeholder="Alamat" rows="4" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Telephone :</strong>
                                            <input type="number" name="telpon" class="form-control" placeholder="Telephone Number" required>
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