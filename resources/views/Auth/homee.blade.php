
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css//style">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <style>
   *{ margin: 0; padding: 0; box-sizing: border box; }
.carousel-inner img {
    width: 100%;
    height: 30vh;

    .container {
        margin-top: 50px;
      }
      
      .card {
        margin-bottom: 20px;
      }
      
      .card-title {
        font-size: 20px;
        font-weight: bold;
      }
      
      .card-text {
        font-size: 16px;
      }
      .mt-5 {
            margin-top: 3rem !important;
        }

        .mt-4 {
            margin-top: 2rem !important;
        }

        .card {
            margin-bottom: 1rem;
        }
        
      </style>

</head>

<body> 
<img src="img//1.jpg" class="d-block w-100">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">e-Complaint</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/homee">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/login">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/register">Registration</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img//2.jpg" alt="Los Angeles" width="1400" height="500">
    </div>
    <div class="carousel-item">
      <img src="img//3.jpg" alt="Chicago" width="1400" height="500">
    </div>
    <div class="carousel-item">
      <img src="img//4.jpg" alt="New York" width="1400" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<div class="container-fluid">
    <h3 class="mt-4">Notice Board</h3>

    <div class="row mt-2">
      <div class="col-md-6 offset-md-.1">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Notice 1</h6>
            <p class="card-text">This is the content of notice 2.</p>
            <a href="img//11.jpg" target="_blank" class="btn btn-primary">View</a>
          </div>
          <div class="card-body">
            <h6 class="card-title">Notice 2</h6>
            <p class="card-text">This is the content of notice 2.</p>
            <a href="img//11.jpg" target="_blank" class="btn btn-primary">View</a>
          </div>
          
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-12">
         <h2 class="display-4">Messege from IGP</h2>

         <p class="py-5"> Discipline Security Progress.I stand before you today with a deep sense of responsibility and commitment to our community. It is an honor to address you, and I want to take this opportunity to express my gratitude for your unwavering support in our mission to maintain law and order.</p>

          <a href="img//speech.pdf"> check More </a>
    </div>

    <!-- Add more notices here -->

</div>


 <section class="my-2">
 <div class="py-5"> 
  <h2 class="text-left">recent activities</h2>

</div>

<div class="container-fluid">
<div class="row">
         <div class="col-lg-6 col-md-6 col-12"> <img src="img//7.jpg" class="img-fluid aboutimg">
</div>
<div class="col-lg-6 col-md-6 col-12">
<h4 class="display-4">নৌ পুলিশ মতবিনিময় সভা </h4>
<p class="py-5">  ইন্সপে ক্টর জে না রে ল অব পুলি শ, বাং লা দে শ চৌ ধুরী আবদুল্লাদু ল্লাহ আল-মা মুন বি পি এম (বা র), পি পি এম
বলে ছে ন, নৌ পুলি শ অল্প সময়ে র মধ্যে নৌ পথে যা ত্রী , নৌ যা ন মা লি ক এবং সা ধা রণ মা নুষে র আস্থা
অর্জন করে ছে , যা সত্য.........</p>

<a href="img//pdf1.pdf"> check More </a>
</section>

</div>

</div>

</div>







<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



