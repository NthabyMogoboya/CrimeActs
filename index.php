
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
       <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>crime Act Solutions</title>
  </head>
  <body>


    <!-- Optional JavaScript -->
  
<nav class="navbar navbar-expand-lg navbar-light align-items-right bg-light middle-top " >
    <a class="navbar-brand" href="#">
     <img src="images/logo.png" width="535" height="80" alt=""  href="#">
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  
     <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="bill.php">View Bill of Rights</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#" class="btn btn-primary" data-toggle="modal" data-target="#Login">login</a>
          <a class="dropdown-item" href="#" class="btn btn-primary" data-toggle="modal" data-target="#Registration">Register</a>
        </div>
      </li>
      <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
  </form>
    </ul>
  </div>
</nav>
<!--corousel-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    
      <img src="images/justice.jpeg" width="1950" height="440" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>The Bill Of Rights</h1>
        <h1>Nobody is above the law</h1>
        <a href="bill.php" class="btn btn-primary">View Bill of Rights</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/cops.jpg" width="1950" height="440" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>The Law at your fingertips</h1>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/keywords.jpg" width="1950" height="440" class="d-block w-100" alt="...">
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




<!-- Reg Form -->
<div class="modal fade" id="Registration" tabindex="-1" role="dialog" aria-labelledby="icepRegisterUser"
    aria-hidden="true">
    <div class="modal-dialog modal-ls" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h5 class="modal-title ">Registration</h5>
            </div>
            <form>
                <div class="modal-body">

                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" formControlName="fname" required class="form-control"
                            placeholder="Enter Your First Name">
                    </div>

                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" formControlName="lname" required class="form-control"
                            placeholder="Enter Your Last Name">
                    </div>

                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="number" formControlName="lname" required class="form-control"
                            placeholder="Enter Your Phone Number">
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" formControlName="lname" required class="form-control"
                            placeholder="Enter Your City">
                    </div>

                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" formControlName="email" required class="form-control" aria-describedby="emailHelp"
                            placeholder="Enter your Email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" formControlName="pword" required class="form-control"
                                    placeholder="Enter Secret Password">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" formControlName="pword2" required class="form-control"
                                    placeholder="Re-enter Secret Password">
                            </div>
                        </div>
                    </div>

                    </div>
                <div class="modal-footer justify-content-center">
                    <button type="submit" class="btn" >Submit</button> 
                    <a href="login" class="btn btn-link">Login here</a> 
                    <!-- (click)="postApplication() -->
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal end -->
<!-- reg form end -->

<!-- log Form -->
<div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="icepRegisterUser"
    aria-hidden="true">
    <div class="modal-dialog modal-ls" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h5 class="modal-title ">Login</h5>
            </div>
            <form>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" formControlName="email" required class="form-control" aria-describedby="emailHelp"
                            placeholder="Enter your Email">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> -->
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" formControlName="pword" required class="form-control"
                                    placeholder="Enter Secret Password">
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="submit" class="btn" >Submit</button> 
                    <a href="login" class="btn btn-link">Login here</a> 
                    <!-- (click)="postApplication() -->
                </div>
            </form>
        </div>
    </div>
</div>
<br><br>
<h1 class="text-center bold" >Services</h1>
<br><br>
<h1 class="text-center" >Partners</h1>
<br><br>
<h1 class="text-center" >FAQ</h1>
<br><br>
<h1 class="text-center" >Contact Us</h1>
  </body>
</html>



