<?php require './include/header.php'; ?>
<?php require './config/config.php'; ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5c5946fe44.js" crossorigin="anonymous"></script>
    <title>Bookstore</title>
  </head>
  <body>

    

    <div class="container">    
        <div class="row mt-5">
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card" >
                    <img height="213px" class="card-img-top" src="images/node.png">
                    <div class="card-body" >
                        <h5 class="d-inline"><b>Node Basics</b> </h5>
                        <h5 class="d-inline"><div class="text-muted d-inline">($10/item)</div></h5>
                        <p>Monotonectally enable customized 
                            growth strategies and 24/7 portals.  functional opportunities. </p>
                         <a href="#"  class="btn btn-primary w-100 rounded my-2"> More<i class="fas fa-arrow-right"></i> </a>      
     
                    </div>
                </div>
            </div>
            
            <?php echo $_SESSION['username']; ?>

            <br>
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 mb-5">
                <div class="card">
                    <a href="http://localhost/bookstore/shopping/single.php"><img height="213px" class="card-img-top" src="images/django.png"></a>
                    <div class="card-body">
                    <h5 class="d-inline"><b>Django Basics</b> </h5>
                        <h5 class="d-inline"><div class="text-muted d-inline">($20/item)</div></h5>
                        <p>Monotonectally enable customized 
                            growth strategies and 24/7 portals.  functional opportunities. </p>
                       <a href="#"  class="btn btn-primary w-100 rounded my-2"> More<i class="fas fa-arrow-right"></i> </a>      
                    </div>
                </div>
            </div>
            <br>
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card">
                    <img     height="213px" class="card-img-top" src="images/django.png">
                    <div class="card-body">
                    <h5 class="d-inline"><b>Django Basics</b> </h5>
                        <h5 class="d-inline"><div class="text-muted d-inline">($50/item)</div></h5>
                        <p>Monotonectally enable customized 
                            growth strategies and 24/7 portals.  functional opportunities. </p>
                       <a href="#"  class="btn btn-primary w-100 rounded my-2"> More<i class="fas fa-arrow-right"></i> </a>      
                    </div>
                </div>
            </div>
            <br>
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card">
                    <img height="213px" class="card-img-top" src="images/django.png">
                    <div class="card-body">
                    <h5 class="d-inline"><b>Django Basics</b> </h5>
                        <h5 class="d-inline"><div class="text-muted d-inline">($25/item)</div></h5>
                        <p>Monotonectally enable customized 
                            growth strategies and 24/7 portals.  functional opportunities. </p>
                       <a href="#"  class="btn btn-primary w-100 rounded my-2"> More<i class="fas fa-arrow-right"></i> </a>       
                    </div>
                </div>
            </div>
            <br>
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card">
                    <img height="213px" class="card-img-top" src="images/html5.jpg">
                    <div class="card-body">
                    <h5 class="d-inline"><b>Html5 Basics</b> </h5>
                        <h5 class="d-inline"><div class="text-muted d-inline">($20/item)</div></h5>
                        <p>Monotonectally enable customized 
                            growth strategies and 24/7 portals.  functional opportunities. </p>
                        <a href="#"  class="btn btn-primary w-100 rounded my-2"> More<i class="fas fa-arrow-right"></i> </a>      
                    </div>
                </div>
            </div>
            <br>

            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card d-relative" >
                    <img height="213px" class="card-img-top" src="images/django.png">
                    <div class="card-body" width="200px">
                    <h5 class="d-inline"><b>Django Basics</b> </h5>
                        <h5 class="d-inline"><div class="text-muted d-inline">($10/item)</div></h5>
                        <p>Monotonectally enable customized 
                            growth strategies and 24/7 portals.  functional opportunities. </p>
                       <a href="#"  class="btn btn-primary w-100 rounded my-2"> More<i class="fas fa-arrow-right"></i> </a>      
                    </div>
                </div>
            </div>
         </div>

         </div>
       
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="" crossorigin="anonymous"></script>
  </body>
 
</html>

<?php require './include/footer.php'; ?>