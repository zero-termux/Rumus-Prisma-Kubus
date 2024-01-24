<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Volume Prisma Segitiga</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        .container {
            width: 500px;
            margin: 5% auto;
            background-color: orange;
            padding: 20px;
            -webkit-box-shadow: 14px 15px 0px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: 14px 15px 0px 0px rgba(0,0,0,0.75);
            box-shadow: 14px 15px 0px 0px rgba(0,0,0,0.75);
        }

        .container h1 {
            font-size: 25px;
            margin-bottom: 15px;
        }

        .container p {
            margin-bottom: 15px;
        }

        .container input {
            width: 95%;
            height: 25px;
            margin-top: 5px;
            margin-bottom: 15px;
            padding: 5px;
            border: none;
            border-radius: 10px;
            text-align: center;
            font-size: 18px;
        }

        .container label {
            font-weight: 520;
            font-size: 20px;
        }

        .container button {
            padding: 8px 15px;
            border-radius: 10px;
            margin-bottom: 12px;
            border: none;
            transition: .3s;
        }

        .container button:hover {
            background-color: orange;
            border: 2px solid white;
            color: white;
        }
    </style>
</head>
<body>

<?php
$hasil = "0"; 

if (isset($_POST['hitung'])) {
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];
    $panjang = $_POST['panjang'];

    $luas = 0.5 * $alas * $tinggi;
    $volume = $luas * $panjang;

    $hasil = "Volume prisma segitiga anda adalah: " . $volume;
}
?>
<div class="container">
    <center>
<h1>SELAMAT DATANG DI WEB RUMUS VOLUME PRISMA SEGITIGA BY ABID F.</h1>
<p>silahkan masukkan alas, tinggi dan panjang dari prisma segitiga anda lalu tekan tombol maka hasil volume akan muncul dibawah</p>
<form method="post" action="">
    <label for="alas">Alas :</label> 
    <input type="text" id="alas" name="alas" required><br>

    <label for="tinggi">Tinggi :</label> 
    <input type="text" id="tinggi" name="tinggi" required><br>

    <label for="panjang">Panjang :</label> 
    <input type="text" id="panjang" name="panjang" required><br>
    <button type="submit" name="hitung">Hitung Volume</button>
</form>


<?php
echo $hasil; 
?>
</center>
</div>

<script>
    //js skew
document.addEventListener("DOMContentLoaded", function () {
  const container = document.querySelector(".container");

  function handleMove(event) {
    const clientX = event.clientX || (event.touches && event.touches[0].clientX);
    const clientY = event.clientY || (event.touches && event.touches[0].clientY);

    if (clientX && clientY) {
      const mouseX = clientX / window.innerWidth - 0.5;
      const mouseY = clientY / window.innerHeight - 0.5;

      const skewX = mouseX * 5;
      
      const skewY = mouseY * 5;
      
      container.style.transform = `skew(${-skewX}deg, ${-skewY}deg)`;
    }
  }

  function handleReset() {
    container.style.transform = "skew(0deg, 0deg)";
  }

  container.addEventListener("mousemove", handleMove);
  container.addEventListener("touchmove", handleMove);

  container.addEventListener("mouseout", handleReset);
  container.addEventListener("touchend", handleReset);
});
</script>
</body>
</html>