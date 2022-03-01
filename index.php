<?php 
include "connection.php";
$x=mysqli_query($connection ,"SELECT * FROM members");
foreach ( $xs as $x){
  echo $x ["name"];
}
?>
<html  lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.rtl.css">
    <link rel="stylesheet" href="css/style.css">
</head>
    <body>
         <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
          <img src="images\1180996.png" alt="" width="30" height="24">
          <a class="navbar-brand" href="#">خانواده شاد   </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav me-auto mb-2 mb-lg-0">
           <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
            </a>
             <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
             <li><a class="dropdown-item" href="#">Action</a></li>
             <li><a class="dropdown-item" href="#">Another action</a></li>
             <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
              </li>
              <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
               </li>
               </ul>
               <form class="d-flex">
               <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
               <button class="btn btn-outline-success" type="submit">Search</button>
               </form>
               </div>
               </div>
               </nav>
               </div>
               
        <div class="row mt-5"> 
            <div class="c0l-12"> 
                                    <ul class="list-group ">
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                            <div class="fw-bold">person1</div>
                            hi!
                            </div>
                            <span class="badge bg-primary rounded-pill">12h ago</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                            <div class="fw-bold">person2</div>
                            how are u?
                            </div>
                            <span class="badge bg-primary rounded-pill">14h ago</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                            <div class="fw-bold">person3</div>
                            good
                            </div>
                            <span class="badge bg-primary rounded-pill">now</span>
                        </li>
                        </ul>
            </div>
        </div> 

      </div>
    </div>
    
  </div>
</div>
         <!-- Button trigger modal -->
         <button type="button" class="btn btn-primary"   id="btn-new-message" data-bs-toggle="modal" data-bs-target="#exampleModal">
  +
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">پیام جدید</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">نام</label>
    <input  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">متن پیام</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">ارسال</button>
</form>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js">  </script>
    </body>
</html>