
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'PMI Yogyakarta')</title>
</head>
<body>
    @yield('navbar')
    
    <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
                <div class="container">
                <img src="/images/PMI.png" class="image_pmi" height="40px" alt="" style="vertical-align:top !important"> 
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                    <a class="nav-link js-scroll-trigger" href="#home"> HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#tentangkami">TENTANG KAMI</a>
                    </li>
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="informasi" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            INFORMASI
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#stok_darah">STOK DARAH</a>
                            <a class="dropdown-item" href="#prasyaratan">PRASYARATAN DONOR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#donasi">DONASI</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/login" target="_blank">LOGIN</a>
                    </li>
                </ul>
                </div>
            </div>
            </nav>
        </div>
</body>
</html>
