<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Responsive Side Navigation Bar</title>
	<link rel="stylesheet" href="../style.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".hamburger").click(function(){
			   $(".wrapper").toggleClass("collapse");
			});
		});
	</script>
</head>
<body>

<div class="wrapper">
  <div class="top_navbar">
    <div class="hamburger">
       <div class="one"></div>
       <div class="two"></div>
       <div class="three"></div>
    </div>
    <div class="top_menu">
      <div class="logo">Maria Widhi Astuti - J3C118047</div>
      
    </div>
  </div>
  
  <div class="sidebar">
      <ul>
      <li><a href="../p1/aritmatika4.php">
          <span class="icon"><i class="fas fa-book"></i></span>
          <span class="title">Pertemuan 1</span></a></li>
        <li><a href=".../p2/tampil_data.php" class="active">
          <span class="icon"><i class="fas fa-book"></i></span>
          <span class="title">Pertemuan 2</span>
          </a></li>
        <li><a href="../p3/index.php">
          <span class="icon"><i class="fas fa-book"></i></span>
          <span class="title">Pertemuan 3</span>
          </a></li>
    </ul>
  </div>
  
  <div class="main_container">
<h2>Form tambah data baru</h2>    
<form>
<?php
    include "koneksi.php";
    $r = mysqli_query($kon,"SELECT * FROM mahasiswa WHERE id=".$_GET["id"]);
    $brs = mysqli_fetch_assoc($r);
    echo "apakah Anda yakin akan menghapus nama ".$brs['nama']." dari tabel?";
?>

    <input type="hidden" name="idDelete" value=" <?php echo $_GET["id"];?>">
    <input type="submit" name="jawaban" value="ya">
    <input type="submit" name="jawaban" value="tidak">
</form>

<?php
    if(isset($_GET['jawaban'])){
        if($_GET['jawaban']=="tidak")
            header("location:../p2/tampil_data.php");
        else{
            $r = mysqli_query($kon,"DELETE FROM `mahasiswa` WHERE `id` = ".$_GET['idDelete']);
            header("location:tampil_data.php");
            
        }
            
    }
?>
</div>
</div>
	
</body>
</html>













<!DOCTYPE html>
