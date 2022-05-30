<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Learning bootstrap</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

  <style>
  /* Make the image fully responsive */
  *{
    margin: 0;  padding: 0; font-family: 'Josefin Sans', sans-serif;
  }
  html{
    scroll-behavior: smooth;
  }
  .carousel-inner img{
    margin-top: 4%;
    max-width:100%;
    height: auto;
    object-fit: contain;
  }
  
</style>
</head>
<body>
 <?php
          include 'dbcon.php';

          $selectquery = "select * from regtable";
          $query = mysqli_query($con,$selectquery);

          $result = mysqli_fetch_array($query);
?>

  <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top  ">
    <div class="container-fluid mb"> 
      <img src="img/microfinance.png"  width="200" height="50" alt="Home page image">

      <a class="navbar-brand " href="#" ></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item  pr-4">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item  pr-4">
            <a class="nav-link active" href="#about">About us</a>
          </li>
          <li class="nav-item  pr-4">
            <a class="nav-link active" href="#services">Services</a>
          </li>
          <li class="nav-item  pr-4">
            <a class="nav-link active" href="#contact us">Contact us</a>
          </li>
           <a href="login.php" class="btn btn-outline-danger  mr-1 text-white">Login</a>
          
         
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark " type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>



  <header id="home">

    <div id="home" class="carousel slide  ddata-ride="carousel >
      <ul class="carousel-indicators ">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/planting.jpg" alt="Los Angeles" width="1200" height="500" class="rounded mx-auto d-block" class="img-fluid">
          <div class="carousel-caption">
            <h3>Plantating tress</h3>
            <p>We had such a great time in </p>
          </div>   
        </div>
        <div class="carousel-item">
          <img src="img/planting1.jpg" alt="Chicago" width="1200" height="500" class="rounded mx-auto d-block" class="img-fluid">
          <div class="carousel-caption">
            <h3>Plantation</h3>
            <p>Great work</p>
          </div>   
        </div>
        <div class="carousel-item">
          <img src="img/office.jpg" alt="New York" width="1200" height="500" class="rounded mx-auto d-block" class="img-fluid">
          <div class="carousel-caption">
            <h3>Apple tree</h3>
            <p>We love the Big Apple!</p>
          </div>   
        </div>
      </div>
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>

  </header>


  <!-- about us section statrs here -->
  <section id="about">
    <div class="container-fluid">
      <h1 class="text-center text-capitalize pt-5 display-3" >About Us</h1>
      <hr class="w-50 mx-auto pt-5">

      <div class="row mt-3">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="<?php echo $result['photo']; ?>" class="img-fluid ml-3">
        </div>


        <div class="col-lg-6 col-md-6 col-12 pl-5 pr-5 mt-5">
          <h1>What we do ?</h1>
          <hr>
          <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam debitis impedit doloribus magnam dolore placeat maiores consequatur sint ratione laudantium ullam sequi, adipisci, saepe natus dolor corrupti, perferendis excepturi inventore. Deserunt laborum recusandae vero nam voluptates doloribus quasi dolorem esse sed minima? Dicta maxime sunt dignissimos sint eos dolores suscipit nulla, placeat, magnam doloribus neque totam et fugit, quibusdam assumenda quos obcaecati animi atque, a eveniet qui consequuntur exercitationem possimus? Minus odit nemo provident quasi ipsa laboriosam consectetur quo perferendis delectus voluptate laborum, corporis, dolore, eos tempora. Provident ex eius deserunt omnis quam suscipit numquam, quo, officiis est repellendus inventore!</p>
        </div>

      </div>

    </div>
  </section>
  <!-- ABOUT US END -->

  <!-- services section starts from here -->
  <section id="services">
    <div class="container">
      <h1 class="text-center text-capitalize pt-5 display-3" >services</h1>
      <hr class="w-50 mx-auto pt-5">



        <div  class="row text-center mb-4">
          <div class="col-lg-4 col-md-6 col-12"> 

          <div class="card mr-5"  >
            <img class="card-img-top" src="img/micro 2.jpg" alt="Card image cap" style="height:150px;" >
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12"> 
 
          <div class="card  mr-5"  >
            <img class="card-img-top img-fluid" src="img/micro 2.jpg" alt="Card image cap"  style="height:150px;" >
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12"> 

          <div class="card mr-5" >
            <img class="card-img-top img-fluid" src="img/micro 2.jpg" alt="Card image cap" style="height:150px;">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>




      </div>

    </section>


    <!-- contact section starts here -->


    <section class="bg-success" id="contact">
      <article class="py-5 text-center text-white">
        <div>
          <h3 class="display-4">+977 98465581268</h3>
          <p>FOr the best work experience call now</p>
          <button class="btn btn-warning">Contact Now</button>
        </div>
      </article>
      
    </section>


<!-- Gallery section starts here -->

<section>
    <div class="container">
      <h1 class="text-center text-capitalize pt-5 display-3" >Gallery</h1>
      <hr class="w-50 mx-auto pt-5">


      <div class="row my-3">
        <div class="col-lg-4 col-md-2 col-12 mb-4">
          <img src="img/planting1.jpg" class="img-fluid">
        </div>
        <div class="col-lg-4 col-md-2 col-12 mb-4">
          <img src="img/planting1.jpg" class="img-fluid">
        </div>
        <div class="col-lg-4 col-md-2 col-12 mb-4">
          <img src="img/planting1.jpg" class="img-fluid">
        </div>
        <div class="col-lg-4 col-md-2 col-12 mb-4">
          <img src="img/planting1.jpg" class="img-fluid">
        </div>
        <div class="col-lg-4 col-md-2 col-12 mb-4">
          <img src="img/planting1.jpg" class="img-fluid">
        </div>
        <div class="col-lg-4 col-md-2 col-12 mb-4">
          <img src="img/planting1.jpg" class="img-fluid">
        </div>
        <div class="col-lg-4 col-md-2 col-12 mb-4">
          <img src="img/planting1.jpg" class="img-fluid">
        </div>
        <div class="col-lg-4 col-md-2 col-12 mb-4">
          <img src="img/planting1.jpg" class="img-fluid">
        </div>
        <div class="col-lg-4 col-md-2 col-12 mb-4">
          <img src="img/planting1.jpg" class="img-fluid">
        </div>

       

      </div>
 </div>
</section>

<!-- Registraation form  -->


<section class="bg-success">
      <article class="py-5 text-center ">
        <div>
          <h3 class="display-4">Join Now</h3>
          <p>FOr the best work experience call now</p>
                 <!-- Button trigger modal -->
<button type="button" class="btn btn-warning " data-toggle="modal" data-target="#exampleModalCenter">Join Now</button>
        </div></article>



<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalCenterTitle">Sign Up</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                  <form action="/action_page.php">
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" class="form-control" id="email">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd">
            </div>
            <div class="checkbox">
              <label><input type="checkbox"> Remember me</label>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

      
      
</section>

<!-- COntact starts from here -->


<section>
    <div class="container mb-5" id="contact us">
      <h1 class="text-center text-capitalize pt-5 display-3" >Contact us</h1>
      <hr class="w-50 mx-auto pt-5">

      <div class="w-50 mx-auto">


           <form action="/action_page.php">
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" class="form-control" id="email">
            </div>
            <div class="form-group">
              <label for="email">Phone number</label>
              <input type="number" class="form-control" id="phone">
            </div>
            <div class="form-group">
              <label>Textarea</label>
              <textarea class="form-control"></textarea>
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd">
            </div>
            <div class="checkbox">
              <label><input type="checkbox"> Remember me</label>
            </div> 
            <button type="submit" class="btn btn-default btn-success mt-3">Submit</button>
          </form>
          </div>
        </div>
</section>
<footer>
  <p class="text-center bg-dark text-white ">@Copyright Suman Adhikari 2021 </p>
</footer>


  </body>
  </html>