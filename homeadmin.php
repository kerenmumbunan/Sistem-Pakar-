<?php
include "session.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>SPK Penyakit Tanaman</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      </ul>
      <ul class="nav navbar-nav navbar-right">
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav" style="background-color:#d57eeb;" >
      <p><a href="homeadmin.php"><button type="button" class="btn btn-success btn-block active">BERANDA</button></a></p>
      <p><a href="hamadanpenyakit.php"><button type="button" class="btn btn-success btn-block">HAMA DAN PENYAKIT</button></a></p>
      <p><a href="gejala.php"><button type="button" class="btn btn-success btn-block">GEJALA</button></a></p>
        <p><a href="basispengetahuan.php"><button type="button" class="btn btn-success btn-block">BASIS PENGETAHUAN</button></a></p>
      <br><br><br><br><br><br><br><br><br><br>
      <p><a href="logout.php"><button type="button" class="btn btn-success btn-block" id="myBtn">LOGOUT</button></a></p>
    </div>
    <div class="col-sm-8 text-left"> 
       <center><h2>SPK PAKAR DIAGNOSA HAMA DAN PENYAKIT TANAMAN BAWANG MERAH DAN CABAI
</h2></center><br>
      <p>Selamat datang <?php echo $login_session; ?>.Silahkan pilih menu yang diinginkan</p>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
<marquee behavior="alternate" scrollamount="5"><h3>Keren Aprilia Mumbunan_220211060039 dan Mirnayati Tandigau_220211060367</h3></marquee>
</footer>

</body>
</html>
