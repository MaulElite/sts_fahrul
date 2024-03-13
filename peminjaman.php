<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Peminjaman</title>

  </head>
  <body>
  <?php
      session_start();
      if($_SESSION['status']!="login"){
          header("location:login.php?pesan=belum_login");
      }
    ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <img src="img/logo2.png" height=30 width=30>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
        <a class="nav-link" href="home2.php">Home <span class="sr-only">(current)</span></a>
      </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Barang
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="peminjaman.php">Peminjaman</a>
          <a class="dropdown-item" href="brg_pnjm.php">Stock</a>
        </div>
      </li>
    </ul>
    <a href="logout.php" class="btn btn-info">Logout</a>
      
  </div>
</nav>

<div class="container">
  <div class="row">
      <h1>Masukan Barang Yang Ingin Di Pinjam</h1>
      </div>
  </div>
  <div class="container">
      <form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <div class="form-group">
    <label for="NamaBarang">Nama Barang</label>
    <select class="form-control" name="nama" id="exampleFormControlSelect1">
      <option>Tenda</option>
      <option>Tas Keril</option>
      <option>Sepatu Gunung</option>
      <option>Gas Kaleng</option>
      <option>Kompor Portable</option>
    </select>
  </div>
  <div class="form-group">
    <label for="HargaBarang">Merk</label>
    <input type="text" class="form-control" name="harga" id="exampleFormControlTextarea1" rows="1">
  </div>
  <div class="form-group">
    <label for="JumlahBarang">Jumlah Barang</label>
    <select class="form-control" name="jumlah" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <button type="submit" name= "hitung" class="btn btn-primary">Struck</button>
</form>

      </div>
  </div>
<hr>
  <?php
    if (isset($_POST['hitung'])) {
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];

        echo " <div class='container'>";
        echo "<h3>TRANSAKSI</h3>";
        echo "<h5>Nama Barang : $nama</h5>";
        echo "<h5>Merk : $harga</h5>";
        echo "<h5>Jumlah Barang : $jumlah</h5>";
        echo "";
        echo "<h6> Note : Screenshoot bukti transaksi ini lalu lihatkan pada toko kami";
        echo "</div>";
    }
  ?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>