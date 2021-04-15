@extends('home')

@section('content')
<script type="text/javascript">
    var check = function() {
     if (document.getElementById('password').value == document.getElementById('confirm_password').value) {
       document.getElementById('submit').disabled = false;
       document.getElementById('message').style.color = 'green';
       document.getElementById('message').innerHTML = 'matching';
     } else {
       document.getElementById('submit').disabled = true;
       document.getElementById('message').style.color = 'red';
       document.getElementById('message').innerHTML = 'not matching';
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
                            <h3 class="panel-title">Create User</h3>
                        </div>
                        <div class="panel-body">
                            <form action="{{ url('/store/user') }}" method="POST">
                                {{csrf_field()}}       
                                 <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>ID :</strong>
                                            <input type="text" name="id" value="{{ $lastId->id + 1 }}" class="form-control" placeholder="ID" readonly>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Name :</strong>
                                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Username :</strong>
                                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Email :</strong>
                                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Password :</strong>
                                            <input type="password" name="password" id="password" onkeyup='check();' class="form-control" placeholder="Password" required>                              
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Confirm Password :</strong>
                                            <input type="password" id="confirm_password" name="password_confirmation" onkeyup='check();' class="form-control" placeholder="Confrim Password" required>
                                            <span id='message'></span>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Telepon :</strong>
                                            <input type="number" name="telepon" class="form-control" placeholder="Telephone Number" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Level :</strong>
                                            <select class="form-control" name="level" required>
                                                <option value="kasir">Kasir</option>
                                                <option value="admin">Admin</option>
                                                <option value="manager">Manager</option>
                                            </select>
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