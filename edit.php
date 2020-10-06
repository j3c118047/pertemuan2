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
	<h2>Form edit data</h2>    
	<form>
		<?php
			include "koneksi.php";
			if(isset($_GET['sub']))
				$x = $_GET['idnya'];
			else    
				$x = $_GET['id'];
			
		?>
		nama: <input type="text" name="nm" value="<?php 
			 if(isset($_GET['sub'])){
				 echo $_GET['nm'];
			 }
			 else{     
				$r = mysqli_query($kon,"SELECT * FROM mahasiswa WHERE id=$x");
				$brs = mysqli_fetch_assoc($r);        
				echo $brs['nama'];
				}
			?>">
		<input type="submit" name="sub" value="simpan hasil pengubahan!">
		<input type="submit" name="sub" value="kembali ke daftar data">
		<input type="hidden" name="idnya" value="<?php echo $x; ?>">
		<?php
			if(isset($_GET['sub']) ){
				if($_GET['sub']=='kembali ke daftar data'){
					header("location:tampil_data.php");
				}
				else{
				  if(strlen($_GET['nm'])){    
					//include "koneksi.php"; //di atas sudah ya
					mysqli_query($kon,"UPDATE `mahasiswa` SET `nama` = '".$_GET['nm']."' 
									   WHERE `id` = ".$_GET['idnya']);
					echo "<br>Data <b>'".$_GET['nm']."'</b> telah disimpan sebagai perubahan pada database";
					echo "<br>silahkan klik tombol kembali ke daftar data untuk melihat hasilnya";
					//header("location:tampil_data_link_insert.php");
				  }
				 else{
					 echo "Data nama baru tidak boleh kosong :)";
				 }    
				}
			}
		?>
	</form>
</div>
</div>
	
</body>
</html>











