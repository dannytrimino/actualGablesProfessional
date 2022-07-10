<?php 
if(!isset($_COOKIE['name'])){
header('Location:login.php');
} else {}
include('header.php');
?>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" style="background-color: #183b64 !important;">
    <a class="navbar-brand" href="#">
      <h2>
        <?php echo $_COOKIE['navBarName'];?>
      </h2>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="http://www.myassociationbanking.com"><button type="button" class="btn btn-outline-warning">Make A Payment</button><span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0" action="logout.php" method="post" name="submit">
        <button class="btn btn-danger my-2 my-sm-0" type="submit" name="submit">LogOut</button>
      </form>
    </div>
  </nav>
  <main class="container w-50">
    <h1 class="text-center display-4">Welcome to <br>
      <?php echo $_COOKIE['navBarName'];?> </h1>
    <hr>
    <img src="documents/<?php echo $_COOKIE['imageDirectoryName']; ?>/images/image1.jpg" class="img-fluid mx-auto d-block img-rounded" alt="Responsive image">
    <hr>
  </main>
  <!-- /.container -->
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <h1 class="text-center display-4">Announcements</h1>
        <hr>
      </div>
    </div>
  </div>
  <div class="container">
     <div class="row">
        <div class="col-md-6 text-center border border-danger mb-2 mx-auto">
        <img src="documents/madeira/announcements.jpg" alt="" class="img-fluid">
      </div>
      </div>
    <br><br>
    </div>
  <br><br>
  <br><br>
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <h1 class="text-center display-4">Documents For Download</h1>
        <hr>
      </div>
    </div>
  </div>
  <br><br>
  <div class="conatiner">
    <div class="row">
      <div class="col-lg text-center">
        <div class="dropdown">
          <button class="btn btn-lg btn-primary dropdown-toggle" style="background-color: #183b64 !important;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Association Documents
</button><br><br>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="documents/<?php echo $_COOKIE['imageDirectoryName']; ?>/madeiraIDoc.pdf" download="madeiraIDoc.pdf">Documents</a>
            <a class="dropdown-item" href="documents/<?php echo $_COOKIE['imageDirectoryName']; ?>/approvedBudget2020.pdf">Approved Budget</a>
            <a class="dropdown-item" href="documents/<?php echo $_COOKIE['imageDirectoryName']; ?>/rules.pdf" download="rules.pdf">Rules & Regulations</a>
            <a class="dropdown-item" href="documents/<?php echo $_COOKIE['imageDirectoryName']; ?>/parking.pdf">Parking Rules & Regulations</a>
            <a class="dropdown-item" href="documents/<?php echo $_COOKIE['imageDirectoryName']; ?>/financials.pdf">Financials</a>
            <a class="dropdown-item" href="documents/<?php echo $_COOKIE['imageDirectoryName']; ?>/security.pdf">New Security Company</a>
            <a class="dropdown-item" href="documents/<?php echo $_COOKIE['imageDirectoryName']; ?>/financials.pdf">Financials</a>

          </div>
        </div>
      </div>

      <div class="col-lg text-center">
        <div class="dropdown">
          <button class="btn btn-lg btn-secondary dropdown-toggle" style="background-color: #183b64 !important;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Applications
</button><br><br>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="documents/<?php echo $_COOKIE['imageDirectoryName']; ?>/applicationForLease.pdf">Application For Lease</a>
            <a class="dropdown-item" href="documents/<?php echo $_COOKIE['imageDirectoryName']; ?>/applicationForPurchase.pdf">Application For Purchase</a>
            <a class="dropdown-item" href="documents/<?php echo $_COOKIE['imageDirectoryName']; ?>/newResident.pdf">New Resident Application</a>
          </div>
        </div>
      </div> <br><br>
      <div class="col-lg text-center">
        <div class="dropdown">
          <button class="btn btn-lg btn-info dropdown-toggle" style="background-color: #183b64 !important;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Forms
</button><br><br>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="documents/<?php echo $_COOKIE['imageDirectoryName']; ?>/newResident.pdf">New Resident Application</a>
            <a class="dropdown-item" href="documents/<?php echo $_COOKIE['imageDirectoryName']; ?>/homeownerContact.pdf">Homeowner Contact</a>
            <a class="dropdown-item" href="documents/<?php echo $_COOKIE['imageDirectoryName']; ?>/architecturalRequestForm.pdf">Architetural Request Form</a>
            <a class="dropdown-item" href="documents/<?php echo $_COOKIE['imageDirectoryName']; ?>/vRegistration.pdf">Vehicle Registration Form</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="display-4 text-center mb-5">Exterior Modifications</h1>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="documents/madeira/images/image2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Color Schemes</h5>
            <p class="card-text">Please click the button below to view the available options.</p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#color">
View Color Schemes
</button>
            <!-- Modal -->
            <div class="modal fade" id="color" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Color Schemes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="documents/madeira/images/image3.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="documents/madeira/images/image4.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="documents/madeira/images/image5.jpg" class="d-block w-100" alt="...">
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
                      <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
                    </div>
                    <div class="row">
                      <img src="documents/madeira/images/image6.jpg" alt="">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="documents/madeira/images/image7.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Door Samples</h5>
            <p class="card-text">Please click the button below to view the available options.</p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#doors">
View Door Options
</button>
            <!-- Modal -->
            <div class="modal fade" id="doors" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="doors">Door Options</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselExampleFade2" class="carousel slide carousel-fade" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="documents/madeira/images/image7.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="documents/madeira/images/image8.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="documents/madeira/images/image9.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="documents/madeira/images/image10.jpg" class="d-block w-100" alt="...">
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleFade2" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
                      <a class="carousel-control-next" href="#carouselExampleFade2" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
                    </div>
                    <p class="mt-3 text-center">Here are examples of the approved door samples.</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="documents/madeira/images/image11.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Lighting Fixtures</h5>
            <p class="card-text">Please click the button below to view the available options.</p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#lights">
View Lighting Fixture Options
</button>
            <!-- Modal -->
            <div class="modal fade" id="lights" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="lights">Lighting Fixtures</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselExampleFade3" class="carousel slide carousel-fade" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="documents/madeira/images/image11.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="documents/madeira/images/image12.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="documents/madeira/images/image13.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="documents/madeira/images/image14.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="documents/madeira/images/image15.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="documents/madeira/images/image16.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="documents/madeira/images/image17.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="documents/madeira/images/image18.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="documents/madeira/images/image19.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="documents/madeira/images/image20.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="documents/madeira/images/image21.jpg" class="d-block w-100" alt="...">
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleFade3" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
                      <a class="carousel-control-next" href="#carouselExampleFade3" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
                    </div>
                    <p class="mt-3 text-center">Here are examples of the approved lighting fixtures samples.</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br>
  <br><br>
  <br><br>
  <?php include('footer.php'); ?>