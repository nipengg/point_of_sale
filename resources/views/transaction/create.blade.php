@extends('home')

@section('content')

<script type="text/javascript">
    $(document).on('click', '.pilih', function (e) {
                 document.getElementById("buku_judul").value = $(this).attr('data-buku_judul');
                 document.getElementById("buku_id").value = $(this).attr('data-buku_id');
                 document.getElementById("harga").value = $(this).attr('data-harga_buku');
                 document.getElementById("discount").value = $(this).attr('data-diskon_buku');
                 document.getElementById("ppn").value = $(this).attr('data-ppn_buku');
                 $('#myModal').modal('hide');
             });
           
              $(function () {
                 $("#lookup, #lookup2").dataTable();
             });
</script>
<script type="text/javascript">
function check() {
    var harga = parseInt(document.getElementById("harga").value);
    var jumlah = parseInt(document.getElementById("jumlah").value);
    var ppn = parseFloat(document.getElementById("ppn").value);
    var diskon = parseFloat(document.getElementById("discount").value);
    var harga_ppn = (harga * ppn/100);
    var harga_diskon = (harga * diskon/100);
    var total = ((harga + harga_ppn) - harga_diskon);
    document.getElementById('total').value = total * jumlah;

    var bayar = parseInt(document.getElementById("bayar").value);
    var total = parseInt(document.getElementById("total").value);
    document.getElementById('kembalian').value = bayar - total;

    var kembalian = parseInt(document.getElementById("kembalian").value);
    if(kembalian < 0){
       document.getElementById('submit').disabled = true;
       document.getElementById('message').style.color = 'red';
       document.getElementById('message').innerHTML = 'Uang Belum Cukup';
    }
    else{
       document.getElementById('submit').disabled = false;
       document.getElementById('message').style.color = 'green';
       document.getElementById('message').innerHTML = '';
    }
}
</script>

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Add Transaction</h3>
                        </div>
                        <div class="panel-body">
                            <form action="{{ url('/store/transaction') }}" method="POST">
                                {{csrf_field()}}       
                                 <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Book :</strong>
                                            <input id="buku_judul" type="text" class="form-control" placeholder="Book" readonly="" required>
                                            <input id="buku_id" type="hidden" name="buku_id" required readonly="">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-info btn-secondary" data-toggle="modal" data-target="#myModal"><b>Cari Buku</b> <span class="fa fa-search"></span></button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Harga :</strong>
                                            <input type="number" id="harga" name="harga" class="form-control" placeholder="Harga" onkeyup="check()" readonly="" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>PPN :</strong>
                                            <input type="number" id="ppn" name="ppn" class="form-control" placeholder="PPN" onkeyup="check()" readonly="" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Discount :</strong>
                                            <input type="number" id="discount" name="discount" class="form-control" placeholder="Discount" onkeyup="check()" readonly="" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Jumlah Beli :</strong>
                                            <input type="number" id="jumlah" name="jumlah" class="form-control" placeholder="Jumlah Beli" onkeyup="check();" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Bayar :</strong>
                                            <input type="number" id="bayar" name="bayar" class="form-control" placeholder="Bayar" onkeyup="check();" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Total Harga :</strong>
                                            <input type="number" id="total" name="total" class="form-control" placeholder="Total harga" onkeyup="check();" readonly="" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Kembalian :</strong>
                                            <input type="number" id="kembalian" name="kembalian" class="form-control" onkeyup="check();" placeholder="Kembalian" readonly="" required>
                                            <span id='message'></span>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                            <button type="submit" id="submit" disabled class="btn btn-success">Add</button>
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


  <!-- Modal -->
  <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
    <div class="modal-dialog modal-lg" role="document" >
      <div class="modal-content" style="background: #fff;">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cari Buku</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                          <table id="lookup" class="table table-bordered table-hover table-striped">
                              <thead>
                                  <tr>
                                      <th>Judul</th>
                                      <th>ISBN</th>
                                      <th>Penulis</th>
                                      <th>Tahun</th>
                                      <th>Stok</th>
                                      <th>PPN</th>
                                      <th>Discount</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @foreach($bukus as $data)
                                  <tr class="pilih" data-buku_id="<?php echo $data->id_buku; ?>" data-buku_judul="<?php echo $data->judul; ?>" data-harga_buku="<?php echo $data->harga_jual; ?>" data-ppn_buku="<?php echo $data->ppn; ?>" data-diskon_buku="<?php echo $data->diskon; ?>" >
                                      <td>{{$data->judul}}</td>
                                      <td>{{$data->isbn}}</td>
                                      <td>{{$data->penulis}}</td>
                                      <td>{{$data->tahun_terbit}}</td>
                                      <td>{{$data->jumlah_buku}}</td>
                                      <td>{{ $data->ppn }}%</td>
                                      <td>{{ $data->diskon }}%</td>
                                  </tr>
                                  @endforeach
                              </tbody>
                          </table>  
                      </div>
                  </div>
              </div>
          </div>

@endsection