<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Radio+Canada+Big:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">



  </head>
  <body>

    <?php  include 'menu.php'; ?>

    <!-- carousal start  -->

    <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.unsplash.com/photo-1516646428755-ef8441bb2b92?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1515179984198-74497483a356?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1437652633673-cc02b9c67a1b?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- carouse end  -->


<!-- about section  strt -->
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center ">About Us</h2>
  </div>
  <div class="container-fluid">
    <div class="row ">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="https://images.unsplash.com/photo-1437652633673-cc02b9c67a1b?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
        alt="" class="img-fluid aboutImg">
        <!-- img fuid is ki wo utni hi space le 6 coumns ki  -->
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <h2 class="display-4">I am Ash</h2>
        <p class="py-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati incidunt molestias dolores quasi veritatis odio nihil aspernatur autem maiores sapiente consequatur dolore molestiae animi quas iure, est, recusandae enim? Maxime!</p>
        <a href="about.php" class="btn btn-success">Know More</a>
      </div>
  </div>

  </div>

</section>
<!-- about section end  -->




  <!-- services section start  -->
  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center ">Our Services</h2>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
              <div class="card">
                <img src="https://images.unsplash.com/photo-1437652633673-cc02b9c67a1b?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
              <div class="card" >
                <img src="https://images.unsplash.com/photo-1437652633673-cc02b9c67a1b?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
              <div class="card" >
                <img src="https://images.unsplash.com/photo-1437652633673-cc02b9c67a1b?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            </div>
        </div>
    </div>

</section>

  <!-- services section end -->



  <!-- section start  -->
  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center ">Our Gallery</h2>
    </div>

    <div class="container-fluid">
      <div class="row">
          <div class="col-lg-4 col-md-4 col-12 ">
              <img src="https://images.unsplash.com/photo-1437652633673-cc02b9c67a1b?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="img-fluid">
          </div>
          <div class="col-lg-4 col-md-4 col-12 ">
              <img src="https://images.unsplash.com/photo-1437652633673-cc02b9c67a1b?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="img-fluid pb-3">
          </div>
          <div class="col-lg-4 col-md-4 col-12 ">
              <img src="https://images.unsplash.com/photo-1437652633673-cc02b9c67a1b?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="img-fluid pb-3">
          </div>
          <div class="col-lg-4 col-md-4 col-12 ">
              <img src="https://images.unsplash.com/photo-1437652633673-cc02b9c67a1b?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="img-fluid pb-3">
          </div>
          <div class="col-lg-4 col-md-4 col-12 ">
              <img src="https://images.unsplash.com/photo-1437652633673-cc02b9c67a1b?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="img-fluid pb-3">
          </div>
          <div class="col-lg-4 col-md-4 col-12 ">
              <img src="https://images.unsplash.com/photo-1437652633673-cc02b9c67a1b?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="img-fluid pb-3">
          </div>
          <div class="col-lg-4 col-md-4 col-12 ">
              <img src="https://images.unsplash.com/photo-1437652633673-cc02b9c67a1b?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="img-fluid pb-3">
          </div>
          <div class="col-lg-4 col-md-4 col-12 ">
              <img src="https://images.unsplash.com/photo-1437652633673-cc02b9c67a1b?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="img-fluid pb-3">
          </div>
          <div class="col-lg-4 col-md-4 col-12 ">
              <img src="https://images.unsplash.com/photo-1437652633673-cc02b9c67a1b?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="img-fluid pb-3">
          </div>
          

      </div>

    </div>


</section>
  <!-- section end  -->




  <!-- contact form start  -->
  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center ">Conatct Us</h2>
    </div>

    <div class="w-50 m-auto">
        <form action="userInfo.php" method="post">
          <div  class="form-group">
              <label >Username</label>
              <input type="text" name="user" autocomplete="off" class="form-control">
          </div>
          <div  class="form-group">
              <label >Email</label>
              <input type="text" name="email" autocomplete="off" class="form-control">
          </div>
          <div  class="form-group">
              <label >Mobile</label>
              <input type="text" name="mobile" autocomplete="off" class="form-control">
          </div>
          <div  class="form-group">
            <label >Comments</label>
             <textarea class="form-control" name="comments"></textarea>
          </div>
          <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

</section>
  <!-- contact form end  -->

  <!-- footer starts  -->
  <footer>
    <p class="p-3 bg-dark text-white text-center">@ashProductions</p>
  </footer>
  <!-- footer ends  -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
  </body>
</html>