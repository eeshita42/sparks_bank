<?php 
    include 'config.php';
    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn,$sql);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    <link href="table.css" rel="stylesheet" type="text/css">
    <title>TRANSACTION</title>
    <style>
    #navbar-text{
        color:black;
        font: size 2px;
        font-family:'Times New Roman', Times, serif;
        border-style: groove;
    }
    .footer {
    position: fixed;
    left: 0;
    bottom: 5px;
    width: 100%;
    background-color: silver;
    text-align: center;
    color:black;
 }
 
  
 </style>
  </head>
  <body>
  <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href=""><img src="IMAGE/sparks.png"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index1.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Me</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="about.html">About Me </a>
              </li>
              <!--<li class="nav-item">
                <a class="nav-link" href="#">View Users</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Transfer Money</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">View Transfer History</a>
              </li>-->
            </ul>
            <span id="navbar-text">
              BASIC BANKING SYSTEM
            </span>
          </div>
        </div>
      </nav>    
      <div class="container">
        <h1><center>TRANSACTION</center></h1>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-style=groove;">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2"><b>Id</b></th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['bal']?></td>
                        <td><a type="button" href="selectuserdetail.php?id= <?php echo $rows['id'] ;?>"class="btn btn-sm btn-primary p-1 fw-bold">TRANSACT</a></td> 
                    </tr>
                <?php
                    }
                ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>


      
      <div class="sticky footer">
        <p style="font-size:1rem; font-family: Georgia, 'Times New Roman', Times, serif;">?? 2021 Made By Eeshita Kakade<br>
        For the project of sparks foundation</p>                                                                       
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>