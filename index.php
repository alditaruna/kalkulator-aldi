<!DOCTYPE html>
 <?php
   include "proses.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aplikasi kalkulator</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body> 
   
    <div class="kalkulator">
        <h2 class="judul">KALKULATOR</h2>
        <form action="" method="post">
            <input type="text" name="bil1" class="bil" autocomplete="off" placeholder="masukan bilangan pertama">
            <input type="text" name="bil2" class="bil" autocomplete="off" placeholder="masukan bilangan kedua">
            <select name="operasi" class="opt">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">*</option>
                <option value="bagi">/</option>
            </select>
            <input type="submit" name="hitung" value="Hitung" class="tombol">
        </form>
         <?php if(isset($_POST['hitung'])){?>
            <input type="text" value=" <?php echo $hasil; ?>" class="bil">
            <?php }else{ ?>
                <input type="text" value="0" class="bil">
                <?php } ?> 
    </div>
</body>
</html>