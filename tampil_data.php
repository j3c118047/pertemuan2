<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pertemuan 2</title>
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
  <a href="insert.php" >tambah data</a>
    <h2>Daftar data dalam database</h2> 

  <?php
    include "koneksi.php";    //MELAKUKAN KONEKSI KE DATABASE
    $r = mysqli_query($kon,"SELECT * FROM mahasiswa"); //MELAKUKAN QUERY KE TABEL
    $i = 0;
    while($brs = mysqli_fetch_assoc($r)){ //MENGAMBIL PER BARIS DARI $r
        echo ++$i.". ".$brs['nama'];
        //tambahan ada di sini untuk edit, br pindahin ke bawah ya anak2 
        echo ' <a href="edit.php?id='.$brs['id'].'">edit</a> ';
        echo ' <a href="delete.php?id='.$brs['id'].'">delete</a><br>';
    }
?>
  </div>
</div>
	
</body>
</html>



