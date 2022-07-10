<?php
include('header.php');
?>
<form class="container w-50" action="template.php" method="post">
  
  <h1 class="display-1 text-center">Add A Property</h1>
  <br><br>
  <div class="form-group">
    <label for="fileName">File Name</label>
    <input type="text" class="form-control" id="fileName" name="fileName" placeholder="Enter file name">
  </div>
  <div class="form-group">
    <label for="pageTitle">Page Title</label>
    <input type="text" class="form-control" id="pageTitle" name="pageTitle" aria-describedby="emailHelp" placeholder="Enter page Title">
  </div>
  <div class="form-group">
    <label for="navBarName">Navbar Name</label>
    <input type="text" class="form-control" id="navBarName" name="navBarName" placeholder="Enter page Navbar Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Image Directory Name</label>
    <input type="text" class="form-control" id="imageDirectoryName" name="imageDirectoryName" placeholder="Image Directory Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-lg btn-success float-right" name="submit">Create</button>
</form>
<br><br><br><br>


<?php
include('footer.php');
?>