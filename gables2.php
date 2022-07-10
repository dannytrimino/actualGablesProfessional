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
    <br><br>
    <div class="container">
      <div class="row">
        <div class="col-sm text-center">
          <img src="documents/<?php echo $_COOKIE['imageDirectoryName']; ?>/images/Newsletter.jpg" alt="">
        </div>
      </div>
    </div>
  <br><br>
  <br><br>
  <!-- /.container -->
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <h1 class="text-center display-4">Documents For Download</h1>
        <hr>
      </div>
    </div>
    <br><br>
    <div class="container">
      <div class="row">
        <div class="col-sm text-center">
          <span><i class="far fa-file-alt fa-7x" style="color: #183b64 !important;"></i></span>
          <br><br>
          <p class="text-center" style="font-size: 2rem;">Gables II Documents</p>
          <br>
          <a class="btn btn-dark btn-lg" role="button" href="documents/<?php echo $_COOKIE['imageDirectoryName']; ?>/gablesIIDocs.pdf" download="gablesIIDocs.pdf" style="background-color: #183b64 !important;">Download</a>
        </div>
        <div class="col-sm text-center">
          <span><i class="far fa-file-alt fa-7x" style="color: #183b64 !important;"></i></span>
          <br><br>
          <p class="text-center" style="font-size: 2rem;">Homeowner Contact</p>
          <br>
          <a class="btn btn-dark btn-lg" role="button" href="documents/<?php echo $_COOKIE['imageDirectoryName']; ?>/homeownerContactInfo.pdf" download="homeownerContactInfo.pdf" style="background-color: #183b64 !important;">Download</a>
        </div>
         <div class="col-sm text-center">
          <span><i class="far fa-file-alt fa-7x" style="color: #183b64 !important;"></i></span>
          <br><br>
          <p class="text-center" style="font-size: 2rem;">Lease Aplication</p>
          <br>
          <a class="btn btn-dark btn-lg" role="button" href="documents/<?php echo $_COOKIE['imageDirectoryName']; ?>/leaseApp.pdf" download="leaseApp.pdf" style="background-color: #183b64 !important;">Download</a>
        </div>
      </div>
       <div class="row mt-5">
        <div class="col-sm text-center">
          <span><i class="far fa-file-alt fa-7x" style="color: #183b64 !important;"></i></span>
          <br><br>
          <p class="text-center" style="font-size: 2rem;">Architectural Request Form</p>
          <br>
          <a class="btn btn-dark btn-lg" role="button" href="documents/<?php echo $_COOKIE['imageDirectoryName']; ?>/aRequestForm.pdf" download="aRequestForm.pdf" style="background-color: #183b64 !important;">Download</a>
        </div>
        <div class="col-sm text-center">
          <span><i class="far fa-file-alt fa-7x" style="color: #183b64 !important;"></i></span>
          <br><br>
          <p class="text-center" style="font-size: 2rem;">Painter's Code</p>
          <br>
          <a class="btn btn-dark btn-lg" role="button" href="documents/<?php echo $_COOKIE['imageDirectoryName']; ?>/pCode.pdf" download="pCode.pdf" style="background-color: #183b64 !important;">Download</a>
        </div>
         <div class="col-sm text-center">
          <span><i class="far fa-file-alt fa-7x" style="color: #183b64 !important;"></i></span>
          <br><br>
          <p class="text-center" style="font-size: 2rem;">Purchase Aplication</p>
          <br>
          <a class="btn btn-dark btn-lg" role="button" href="documents/<?php echo $_COOKIE['imageDirectoryName']; ?>/purchaseApp.pdf" download="purchaseApp.pdf" style="background-color: #183b64 !important;">Download</a>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-sm text-center">
          <span><i class="far fa-file-alt fa-7x" style="color: #183b64 !important;"></i></span>
          <br><br>
          <p class="text-center" style="font-size: 2rem;">Rules & Regulations</p>
          <br>
          <a class="btn btn-dark btn-lg" role="button" href="documents/<?php echo $_COOKIE['imageDirectoryName']; ?>/rules.pdf" download="rules.pdf" style="background-color: #183b64 !important;">Download</a>
        </div>
        <div class="col-sm text-center">
          <span><i class="far fa-file-alt fa-7x" style="color: #183b64 !important;"></i></span>
          <br><br>
          <p class="text-center" style="font-size: 2rem;">Vehicle Affidavit</p>
          <br>
          <a class="btn btn-dark btn-lg" role="button" href="documents/<?php echo $_COOKIE['imageDirectoryName']; ?>/vAffidavit.pdf" download="vAffidavit.pdf" style="background-color: #183b64 !important;">Download</a>
        </div>
      </div>
    </div>
    <br><br>
    <br><br>
    <br><br>
<?php include('footer.php'); ?>