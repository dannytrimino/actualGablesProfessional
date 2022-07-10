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
    <h1 class="text-center display-5">Welcome to <br>
      <?php echo $_COOKIE['navBarName'];?> </h1>
    <hr>
    <img src="documents/<?php echo $_COOKIE['imageDirectoryName']; ?>/images/image1.jpg" class="img-fluid mx-auto d-block img-rounded" alt="Galapagos">
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
    <br><br>
    <div class="container">
      <div class="row">
        <div class="col-sm text-center">
          <img src="documents/<?php echo $_COOKIE['imageDirectoryName']; ?>/images/topMessage.jpg" alt="">
        </div>
      </div>
    </div>
  <br><br>
  <br><br>
  <!-- /.container -->
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <h1 class="text-center display-5">Documents For Download</h1>
        <hr>
      </div>
    </div>
    <br><br>
    <div class="container">
      <div class="row">
        <div class="col-sm-4 text-center">
          <span><i class="far fa-file-alt fa-7x" style="color: #183b64 !important;"></i></span>
          <br><br>
          <p class="text-center" style="font-size: 1.5rem;">Amendment To Declaration</p>
          <br>
          <a class="btn btn-dark btn-lg" role="button" href="documents/<?php echo $_COOKIE['imageDirectoryName']; ?>/amendmentToDeclarationGalapagosII.pdf" download="amendmentToDeclarationGalapagosII.pdf" style="background-color: #183b64 !important;">Download</a>
        </div>
        <div class="col-sm-4 text-center">
          <span><i class="far fa-file-alt fa-7x" style="color: #183b64 !important;"></i></span>
          <br><br>
          <p class="text-center" style="font-size: 1.5rem;">Approved Budget</p>
          <br>
          <a class="btn btn-dark btn-lg" role="button" href="documents/<?php echo $_COOKIE['imageDirectoryName']; ?>/approvedBudget.pdf" download="approvedBudget.pdf" style="background-color: #183b64 !important; border-outline: none;">Download</a>
        </div>
        <div class="col-sm-4 text-center">
          <span><i class="far fa-file-alt fa-7x" style="color: #183b64 !important;"></i></span>
          <br><br>
          <p class="text-center" style="font-size: 1.5rem;">Documents</p>
          <br>
          <a class="btn btn-dark btn-lg" role="button" href="documents/<?php echo $_COOKIE['imageDirectoryName']; ?>/documents.pdf" download="documents.pdf" style="background-color: #183b64 !important;">Download</a>
        </div>
       
      </div> <br><br>
      <div class="row">
       <div class="col-sm-4 text-center">
          <span><i class="far fa-file-alt fa-7x" style="color: #183b64 !important;"></i></span>
          <br><br>
          <p class="text-center" style="font-size: 1.5rem;">Homeowner Contact</p>
          <br>
          <a class="btn btn-dark btn-lg" role="button" href="documents/<?php echo $_COOKIE['imageDirectoryName']; ?>/homeownerContact.pdf" download="homeownerContact.pdf" style="background-color: #183b64 !important;">Download</a>
        </div>
        <div class="col-sm-4 text-center">
          <span><i class="far fa-file-alt fa-7x" style="color: #183b64 !important;"></i></span>
          <br><br>
          <p class="text-center" style="font-size: 1.5rem;">Architectural Request Form</p>
          <br>
          <a class="btn btn-dark btn-lg" role="button" href="documents/<?php echo $_COOKIE['imageDirectoryName']; ?>/architecturalRequestForm.pdf" download="architecturalRequestForm.pdf" style="background-color: #183b64 !important;">Download</a>
        </div>
        <div class="col-sm-4 text-center">
          <span><i class="far fa-file-alt fa-7x" style="color: #183b64 !important;"></i></span>
          <br><br>
          <p class="text-center" style="font-size: 1.5rem;">Lease Application</p>
          <br>
          <a class="btn btn-dark btn-lg" role="button" href="documents/<?php echo $_COOKIE['imageDirectoryName']; ?>/leaseApplication.pdf" download="leaseApplication.pdf" style="background-color: #183b64 !important;">Download</a>
        </div>
      </div>
      <div class="row mt-5">
       <div class="col-sm-4 text-center">
          <span><i class="far fa-file-alt fa-7x" style="color: #183b64 !important;"></i></span>
          <br><br>
          <p class="text-center" style="font-size: 1.5rem;">Purchase Application</p>
          <br>
          <a class="btn btn-dark btn-lg" role="button" href="documents/<?php echo $_COOKIE['imageDirectoryName']; ?>/purchaseApplication.pdf" download="purchaseApplication.pdf" style="background-color: #183b64 !important;">Download</a>
        </div>
        <div class="col-sm-4 text-center">
          <span><i class="far fa-file-alt fa-7x" style="color: #183b64 !important;"></i></span>
          <br><br>
          <p class="text-center" style="font-size: 1.5rem;">Color Codes</p>
          <br>
          <a class="btn btn-dark btn-lg" role="button" href="documents/<?php echo $_COOKIE['imageDirectoryName']; ?>/colorCodes.pdf" download="colorCodes.pdf" style="background-color: #183b64 !important;">Download</a>
        </div>
        <div class="col-sm-4 text-center">
          <span><i class="far fa-file-alt fa-7x" style="color: #183b64 !important;"></i></span>
          <br><br>
          <p class="text-center" style="font-size: 1.5rem;">Rules & Regulations</p>
          <br>
          <a class="btn btn-dark btn-lg" role="button" href="documents/<?php echo $_COOKIE['imageDirectoryName']; ?>/rRegs.pdf" download="rRegs.pdf" style="background-color: #183b64 !important;">Download</a>
        </div>
    </div>
    <br><br>
    <br><br>
    <br><br>
<?php include('footer.php'); ?>