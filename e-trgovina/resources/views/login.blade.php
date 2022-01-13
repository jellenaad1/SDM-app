@extends('master')
@section("content")
<div class= "container custom-login .bg-light.bg-gradient">
    <div class="row">
        <div class = "col-sm-4 offset-sm-4">
        <form action="/login" method = "POST">
            <div class="mb-3">
                    @csrf
                <label for="exampleInputEmail1" class="form-label">Email adresa</label>
                 <input type="email" name = "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
             </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Sifra</label>
                     <input type="password" name = "password" class="form-control" id="exampleInputPassword1">
                </div>

            <button type="submit" class="btn btn-dark">Prijavi se</button>
                </form>
        </div>

    </div>




</div>
@endsection