<?php
$newFileName = $_POST['fileName'].".php";
$pageTitle = $_POST['pageTitle'];
$navBarName = $_POST['navBarName'];
$imageDirectoryName = $_POST['imageDirectoryName'];

setcookie("pageTitle", $pageTitle, time()+600);
setcookie("navBarName", $navBarName, time()+600);
setcookie("imageDirectoryName", $imageDirectoryName, time()+600);

include('header.php');
?>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" style="background-color: #183b64 !important;">
    <a class="navbar-brand" href="#">
      <h2><?php echo $navBarName?></h2>
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
<h1 class="text-center display-4">Welcome to <br> <?php echo $pageTitle ?> </h1>
<hr>
<img src="documents/<?php echo $imageDirectoryName ?>/images/image1.jpg" class="img-fluid mx-auto d-block img-rounded" alt="Responsive image">
<hr>
</main>
<!-- /.container -->

<div class="container">
<div class="row">
<div class="col">
<h1 class="text-center display-4">Documents For Download</h1>
<hr>
</div>
</div>
<br><br>
<div class="container">
<div class="row">
<div class="col text-center">
<span><i class="far fa-file-alt fa-5x" style="color: #183b64 !important;"></i></span>
<br><br>
<p class="text-center" style="font-size: 2rem;">Antilles At The Islands Docs</p>
<br>
<a class="btn btn-dark btn-lg" role="button" href="documents/<?php echo $imageDirectoryName ?>/Antilles@IslandsDocs.pdf" download="Antilles@IslandsDocs.pdf" style="background-color: #183b64 !important;">Download</a>
</div>
<div class="col text-center">
<span><i class="far fa-file-alt fa-5x" style="color: #183b64 !important;"></i></span>
<br><br>
<p class="text-center" style="font-size: 2rem;">Approved Budget 2018</p>
<br>
<a class="btn btn-dark btn-lg" role="button" href="documents/<?php echo $imageDirectoryName ?>/ApprovedBUDGET2018.pdf" download="ApprovedBUDGET2018.pdf" style="background-color: #183b64 !important; border-outline: none;">Download</a>
</div>
<div class="col text-center">
<span><i class="far fa-file-alt fa-5x" style="color: #183b64 !important;"></i></span>
<br><br>
<p class="text-center" style="font-size: 2rem;">Homeowner Contact</p>
<br>
<a class="btn btn-dark btn-lg" role="button" href="documents/<?php echo $imageDirectoryName ?>/homeownerContactInformation.pdf" download="homeownerContactInformation.pdf" style="background-color: #183b64 !important;">Download</a>
</div>
</div>
</div>
</div>
<br><br>
<br><br>
<br><br>
<?php include('footer.php'); 
$newFile = fopen($newFileName, 'w');
fwrite($newFile, "<?php include('header.php') ?>");
fwrite($newFile, '<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" style="background-color: #183b64 !important;">
    <a class="navbar-brand" href="#">
      <h2><?php echo $_COOKIE[\'navBarName\'];?></h2>
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
<h1 class="text-center display-4">Welcome to <br> <?php echo $_COOKIE[\'pageTitle\'] ?> </h1>
<hr>
<img src="documents/<?php echo $_COOKIE[\'imageDirectoryName\'] ?>/images/image1.jpg" class="img-fluid mx-auto d-block img-rounded" alt="Responsive image">
<hr>
</main>
<!-- /.container -->

<div class="container">
<div class="row">
<div class="col">
<h1 class="text-center display-4">Documents For Download</h1>
<hr>
</div>
</div>
<br><br>
<div class="container">
<div class="row">
<div class="col text-center">
<span><i class="far fa-file-alt fa-5x" style="color: #183b64 !important;"></i></span>
<br><br>
<p class="text-center" style="font-size: 2rem;">Antilles At The Islands Docs</p>
<br>
<a class="btn btn-dark btn-lg" role="button" href="documents/<?php echo $_COOKIE[\'imageDirectoryName\']; ?>/Antilles@IslandsDocs.pdf" download="Antilles@IslandsDocs.pdf" style="background-color: #183b64 !important;">Download</a>
</div>
<div class="col text-center">
<span><i class="far fa-file-alt fa-5x" style="color: #183b64 !important;"></i></span>
<br><br>
<p class="text-center" style="font-size: 2rem;">Approved Budget 2018</p>
<br>
<a class="btn btn-dark btn-lg" role="button" href="documents/<?php echo $_COOKIE[\'imageDirectoryName\'];?>/ApprovedBUDGET2018.pdf" download="ApprovedBUDGET2018.pdf" style="background-color: #183b64 !important; border-outline: none;">Download</a>
</div>
<div class="col text-center">
<span><i class="far fa-file-alt fa-5x" style="color: #183b64 !important;"></i></span>
<br><br>
<p class="text-center" style="font-size: 2rem;">Homeowner Contact</p>
<br>
<a class="btn btn-dark btn-lg" role="button" href="documents/<?php echo $_COOKIE[\'imageDirectoryName\']; ?>/homeownerContactInformation.pdf" download="homeownerContactInformation.pdf" style="background-color: #183b64 !important;">Download</a>
</div>
</div>
</div>
</div>
<br><br>
<br><br>
<br><br>');
fwrite($newFile, "<?php include('footer.php') ?>");
setcookie("pageTitle", '', time()-600);
setcookie("navBarName", '', time()-600);
setcookie("imageDirectoryName", '', time()-600);





