<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>kuisPWL</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-home.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Pemrograman Web Lanjut</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="homeKuis">Home
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutKuis">Knowledge</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tentangKuis">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contactKuis">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Ayo Jaga Lingkunganmu!
          <!-- <small>Secondary Text</small> -->
        </h1>

        @foreach($lihat as $li)
        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="{{$li->imageUrl}}" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">{{$li -> title}}</h2>
            <p class="card-text">{{Str::limit($li->content, 100, "...")}}</p>
            <a href="{{ './articleKuis/'.$li->id }}" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on October, 2020 by Ella
            <a href="#">Start Bootstrap</a>
          </div>
        </div>
        @endforeach
        <!-- Blog Post -->
        @foreach($lihat as $li)
        <div class="card mb-4">
          <img class="card-img-top" src="{{$li->imageUrl}}" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">{{$li -> title}}</h2>
            <p class="card-text">Pentingnya menjaga lingkungan wajib harus kita tanamkan sejak dini. Penebangan hutan secara liar/pembalakan hutan, polusi air dari limbah industri dan pertambangan, polusi udara di daerah perkotaan, dan masalah mengenai rusaknya lingkungan kita khususnya di Indonesia bukan merupakan masalah yang baru lagi, yang seharusnya dibenahi sesegera mungkin.</p>
            <a href="{{ './articleKuis/'.$li->id }}"class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on October, 2020 by Ella
            <a href="#">Start Bootstrap</a>
          </div>
        </div>
        @endforeach

        <!-- Blog Post -->
        @foreach($lihat as $li)
        <div class="card mb-4">
          <img class="card-img-top" src="{{$li->imageUrl}}" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">{{$li -> title}}</h2>
            <p class="card-text">Eksploitasi yang dilakukan oleh manusia bisa membuat kondisi dari lingkungan hidup menjadi berubah secara drastis. Berbagai teknologi dan pengetahuan terus digunakan untuk mengambil hasil alam dan merubahnya menjadi lingkungan baru yang berbeda dari kondisi alam awalnya. Berbagai komponen alam dan biotik yang ada bisa menjadi tidak seimbang apabila tidak adanya perasaan untuk sadar dan ikut serta untuk menjaga lingkungan sekitar Anda</p>
            <a href="{{ './articleKuis/'.$li->id }}" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on October, 2020 by Ella
            <a href="#">Start Bootstrap</a>
          </div>
        </div>
        @endforeach

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Information</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="http://www.Instagram.com/ellafk_">Instagram</a>
                  </li>
                  <li>
                    <a class="nav-link" href="contactKuis">Email</a>
                  </li>
                  <li>
                    <a href="http://www.twitter.com/BarbaraPalvin">Twitter</a>
                  </li>
                </ul>
              </div>
              

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            Ayo jaga Lingkunganmu, jangan sampai kamu menyesal ketika dunia telah rusak!
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Ella Fitri Kusumaningrum</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
