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

	  <section class="container-fluid mt-2">
	  	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="https://via.placeholder.com/1000x200" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="https://via.placeholder.com/1000x200" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="https://via.placeholder.com/1000x200" alt="Third slide">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	  </section>

	<section class="container-fluid">
		<div class="row mt-2">
			<div class="col-md-4 offset-md-8">
				<form class="form-inline">
			      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			    </form>
			</div>
		</div>

		<div class="row mt-1">
			<div class="col-md-6">
				<img class="img-fluid" src="{{ asset('image/gambar.jpg')}}" alt="Third slide">
			</div>

			<div class="col-md-6 text-center" style="padding-top: 150px">
				<h2>Pilih Percetakan <br>Upload Desain mu <br>Tunggu notifikasi</h2>
			</div>
		</div>
	</section>

	<section class="section-official container-fluid mt-2">

		<h5>Official Printing</h5>

		<div class="row">
			<div  class="col-md-3">
				<img class="img-fluid" src="https://via.placeholder.com/300x300" alt="Third slide">
			</div>
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-3 pl-1">
						<a href="{{ asset('/percetakan/show') }}"><img class="img-fluid" src="https://via.placeholder.com/300x200" alt="Third slide"></a>
					</div>
					<div class="col-md-3 pl-1">
						<img class="img-fluid" src="https://via.placeholder.com/300x200" alt="Third slide">
					</div>
					<div class="col-md-3 pl-1">
						<img class="img-fluid" src="https://via.placeholder.com/300x200" alt="Third slide">
					</div>
					<div class="col-md-3 pl-1">
						<img class="img-fluid" src="https://via.placeholder.com/300x200" alt="Third slide">
					</div>
				</div>

				<div class="row mt-1">
					<div class="col-md-3 pl-1">
						<img class="img-fluid" src="https://via.placeholder.com/300x200" alt="Third slide">
					</div>
					<div class="col-md-3 pl-1">
						<img class="img-fluid" src="https://via.placeholder.com/300x200" alt="Third slide">
					</div>
					<div class="col-md-3 pl-1">
						<img class="img-fluid" src="https://via.placeholder.com/300x200" alt="Third slide">
					</div>
					<div class="col-md-3 pl-1">
						<img class="img-fluid" src="https://via.placeholder.com/300x200" alt="Third slide">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="row">
			
		</div>
	</section>

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>