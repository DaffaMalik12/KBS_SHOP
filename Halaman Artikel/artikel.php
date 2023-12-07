<?php
require '../koneksi.php'
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Awonapa Bonsai - Menjual Produk Tanaman Bonsai</title>
</head>

<body>
    <div class="container">
        <div class="header text-center text-light">
            <h3 style="padding: 20px;">Awonapa Bonsai</h3>
            <div class="banner">
                <img src="bonsai.png" alt="">
            </div>
        </div>
        <hr>
        <div class="section">
            <hr>
            <marquee behavior="" direction=""><b>Selamat Datang Di Awonapa Bonsai - Menjual Produk Tanaman Bonsai</b>
            </marquee>
            <hr>
            <br>
        </div>
        <div class="center">
            <?php
			$sql = "select * from t_artikel order by id asc";
			$res = mysqli_query($koneksi, $sql);
			while ($data = mysqli_fetch_array($res)) {
				if(strlen($data["isi"] >= 40)) {
					echo $data["isi"];
				} else {
					$z = '....';
					$y = substr($data["isi"],0,320) .'<br><a href=detail.php?id='.$data["id"].'><button class="btn-info">Baca Selengkapnya</button></a>';
			};
		    ?>
            <div class="box">
                <div class="isi" align="justify">
                    <h2 style="margin-bottom: 5px"><?php echo $data["judul"]; ?></h2>
                    <hr>
                    <p class="by">by wahyu pambudi</p>
                    <hr>
                    <br>
                    <div class="left">
                        <img width="100%" height="150px" src="img/<?php echo $data['gambar'];?>" />
                    </div>
                    <p style="margin-top: 5px"><?php echo $y; ?></p><br>
                    <hr>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="right">
            <div class="box">
                <div class="isi" align="center">
                    <h3>Profil Developer</h3><br>
                    <img width="100%" src="img/wahyu.jpg" alt="wahyu" style="border-radius: 50%"><br>
                    <div style="margin: 10px; display: inline;">
                        <p>Wahyu Pambudi</p>
                        <p>19312302</p>
                        <p>Informatika 19 GX</p>
                        <a href=""><button
                                class="btn-info">WhatsApp</button></a>
                        <a href=""><button class="btn-info">LinkedIn</button></a>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="isi">
                    <h3>Artikel Terbaru</h3>
                    	<?php
				$sql = "select id, judul, gambar from t_artikel order by id desc";
				$res = mysqli_query($koneksi, $sql);
				$no = 0;
				while ($data = mysqli_fetch_array($res)) {
			?>
                    <div style="margin-bottom: 5px;">
                        <fieldset style="text-align: center; border-color: #F3F1F1">
                            <legend>
                                <h6 href="" style="padding: 5px; font-size: 15px;"><?php echo $data["judul"]; ?></h6>
                            </legend>
                            <img style="padding: 10px;" width="100%" height="150px"
                                src="img/<?php echo $data['gambar'];?>" />
                            <a href="detail.php?id=<?php echo($data['id'])?>"><button class="btn-info">Baca
                                    Selengkapnya</button></a>
                        </fieldset>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>