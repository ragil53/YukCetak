<!DOCTYPE html>
<html>
<head>
	<title>
		Home
	</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
<body>

    @include('partials.navbar')

    
    <div class="banner container-fluid">

    </div>

    <div class="container">

        <div class="banner-detail row">
            <div class="col-md-3 banner-img-container">
                <img class="img-fluid banner-img img-thumbnail" src="https://via.placeholder.com/200x200" alt="">
            </div>
            <div class="col-md-8">
                <h3>Nama Percetakan</h3>
                <p>Rating</p>
            </div>
            <div class="col-md-1 pt-1">
                <a href="" class="btn btn-primary btn-lg">Chat</a>
            </div>
        </div>
    </div>

    
    <div class="container mt-5">
        <br>
        <hr>
        <ul class="nav ">
            <li class="nav-item">
                <a class="nav-link active" href="#">Produk</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Ulasan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Informasi Percetakan</a>
            </li>
        </ul>
        
        <hr>
    </div>
    
    <section class="container">
        <div class="row">
            <div class="col-md-3 pl-1">
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://via.placeholder.com/300x200" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Banner</h5>
                        <p class="card-text">Rp xx.xxx /m</p>
                        <a href="" class="btn btn-primary btn-block">Pesan</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pl-1">
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://via.placeholder.com/300x200" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Kartu nama</h5>
                        <p class="card-text">Rp xx.xxx /m</p>
                        <a href="" class="btn btn-primary btn-block">Pesan</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pl-1">
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://via.placeholder.com/300x200" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Poster</h5>
                        <p class="card-text">Rp xx.xxx /m</p>
                        <a href="" class="btn btn-primary btn-block">Pesan</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pl-1">
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://via.placeholder.com/300x200" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Browsur</h5>
                        <p class="card-text">Rp xx.xxx /m</p>
                        <a href="" class="btn btn-primary btn-block">Pesan</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3 pl-1">
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://via.placeholder.com/300x200" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Baju</h5>
                        <p class="card-text">Rp xx.xxx /m</p>
                        <a href="" class="btn btn-primary btn-block">Pesan</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pl-1">
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://via.placeholder.com/300x200" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">..........</h5>
                        <p class="card-text">Rp xx.xxx /m</p>
                        <a href="" class="btn btn-primary btn-block">Pesan</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pl-1">
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://via.placeholder.com/300x200" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"></p>
                        {{-- <a href="" class="btn btn-primary btn-block">Pesan</a> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-3 pl-1">
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://via.placeholder.com/300x200" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"></p>
                        {{-- <a href="" class="btn btn-primary btn-block">Pesan</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>