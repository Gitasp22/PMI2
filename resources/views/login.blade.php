@extends('layout')

@section('navbar')
    
@endsection



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
      body{ font: 14px sans-serif;}
      .wrapper{width:350px; padding:20px;}
    </style>
    <title>Palang Merah Indonesia</title>
  </head>
  <body>

  <!--Jumbotron-->
  <div class="jumbotron" id="home">
    <div class="row">
      <div class="col-lg-6">
      <img src="/images/bgr1.svg" class="img" height="450px" alt="can't reload images :)">
      </div>
      <div class="col-lg-6">
      <br><br><br>
      
      <div class="container">
        <h1>Login</h1>
        <p>Please fill in your credentials to login.</p>
            <form action="/aksilogin" method="post">
            <div class="form-input">
                <label>Username</label>
                <input type="text" name="username">
            </div>    
            <div class="form-input">
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <input type="submit" value="LOGIN" class="btn-login">
        </form>
    </div>    
      </div>
    </div>
  </div>

    </div>
<br><br><br>


    </body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</html>