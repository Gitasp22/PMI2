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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  <link rel="stylesheet" type="text/css" href="./style.css">
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Palang Merah Indonesia</title>

</head>

<body>
  <!--Jumbotron-->
  <div class="jumbotron" id="home">
    <div class="row">
      <div class="col-lg-6">
      <img src="images/bgr1.svg" class="img" height="450px" alt="can't reload images :)">
      </div>
      <div class="col-lg-6">
      <br><br><br>
      <h1>Palang Merah Indonesia</h1>
      <h3>Kota Yogyakarta</h3>
      </div>
    </div>
  </div>

  <!--TentangKita-->
  <div class="container section pb-5" id="tentangkami">
    <!--Section heading-->
    <h2 class="section-heading h1 pt-4">TENTANG KAMI</h2>
    <!--Section desc-->
    <p class="section-description pb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque aut debitis
      numquam vel architecto assumenda incidunt, sunt similique ea ut vitae libero perspiciatis voluptates dicta
      recusandae temporibus corrupti, possimus officiis.</p>
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-5 mb-4">
        <!--Form with header-->
        <div class="card">
          <div class="card-body">
            <!--Header-->
            <div class="form-header blue accent-1">
            </div>
            <br>
            <!--Body-->
            <div>
              <img src="./images/pmi1.jpg" alt="cant't reload images" height="160px">
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate ad ipsum cum dignissimos impedit,
                hic ullam tenetur. Eum nam, alias quae esse aspernatur id perspiciatis illo minus corporis ut error.</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi aliquid magnam facere, adipisci optio
                nostrum dignissimos est alias saepe deserunt voluptates repellat molestiae? Minima facilis eveniet enim
                nisi laborum ratione!</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-7">
        <!--Google map-->
        <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.6588399996326!2d110.3900711505443!3d-7.8258862798710656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a571a9862c413%3A0xb653348bebf3e51d!2sPMI%20Yogyakarta!5e0!3m2!1sen!2sus!4v1572202091158!5m2!1sen!2sus"
            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
      </div>
    </div>
  </div>

  <!--Stok Darah-->
  <div class="container marketing" id="stok_darah">
    <h2 class="section-heading h1 pt-4">STOK DARAH</h2>
    <br><br>
    <!-- Three columns of text below -->
    <div class="row">
      <div class="col-lg-3 text-center">
        <svg class="bd-placeholder-img rounded" width="140" height="200" xmlns="http://www.w3.org/2000/svg"
          preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em"></text>
        </svg>
        <br><br>
        <h2>A</h2>
        <!--<p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>-->
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-3 text-center">
        <svg class="bd-placeholder-img rounded" width="140" height="200" xmlns="http://www.w3.org/2000/svg"
          preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
        </svg>
        <br><br>
        <h2>B</h2>
        <!--<p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>-->
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-3 text-center">
        <svg class="bd-placeholder-img rounded" width="140" height="200" xmlns="http://www.w3.org/2000/svg"
          preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
        </svg>
        <br><br>
        <h2>O</h2>
        <!--<p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>-->
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-3 text-center">
        <svg class="bd-placeholder-img rounded" width="140" height="200" xmlns="http://www.w3.org/2000/svg"
          preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
        </svg>
        <br><br>
        <h2>AB</h2>
        <!--<p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>-->
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
  </div>

  <!-- START THE FEATURETTES -->
  <div class="container" id="donasi">
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span>
          </h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
            semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
            commodo.</p>
        </div>
        <div class="col-md-5">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
            height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
            role="img" aria-label="Placeholder: 500x500">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
          </svg>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
            semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
            commodo.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
            height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
            role="img" aria-label="Placeholder: 500x500">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
          </svg>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
            semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
            commodo.</p>
        </div>
        <div class="col-md-5">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
            height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
            role="img" aria-label="Placeholder: 500x500">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
          </svg>
        </div>
      </div>

      <hr class="featurette-divider">
  </div>
  <!-- /END THE FEATURETTES -->

  <!--Optional JavaScript-->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>