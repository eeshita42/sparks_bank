<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>TRANSACTION HISTORY</title>
    <style>
        .footer {
    position: fixed;
    left: 0;
    bottom: 20px;
    width: 100%;
    background-color: silver;
    text-align: center;
    color:black;
 }
  h2{
    font-size: 40px;
    font-family: sans-serif;
    margin-top: 2px;
    border:groove;
    border-width: 5px;
    border-color:red blue green yellow;
  }
  #navbar-text{
        color:black;
        font: size 1px;
        font-family:'Times New Roman', Times, serif;
        border-style: groove;
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
                <a class="nav-link active" href="contact.html">Contact Me</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="about.html">About Me </a>
              </li>
              <!--<li class="nav-item">
                <a class="nav-link" href="transfer.php">View Users</a>
              </li>-->
              <!--<li class="nav-item">
                <a class="nav-link" href="#">Transfer Money</a>
              </li>-->
              <!--<li class="nav-item">
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
        <h2 class="text-center pt-4"><center>TRANSACTION HISTORY</center></h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['bal']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>

      <div class="sticky footer">
        <p style="font-size:1rem; font-family: Georgia, 'Times New Roman', Times, serif;">© 2021 Made By Eeshita Kakade<br>
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