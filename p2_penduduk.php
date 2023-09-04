<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style_p2_pend.css">
        <link rel="stylesheet" href="footer.css">
        <!-- <link rel="stylesheet" href="swiper-bundle.min.css"> -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">
        <!-- <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"> -->
        
        <title>Penduduk dan Ketenagakerjaan</title>
    </head>

    <body>
        <div class="header">
            <nav>
                <a class="logo" href="index.html">
                    <img src="foto/logoo.png" alt="logo BPS" width="300">
                </a>

                <div class="nav-links" id="navLinks" onclick="clickMenu();">
                    <i class="fa fa-times" aria-hidden="true" onclick="hideMenu()"></i>
                    <ul class="menu-menu">
                        <li><a href="index.html" onclick="clickMenu();">Beranda</a></li>
                        <!-- <li><a href="#penduduk" onclick="clickMenu();">Penduduk</a></li>
                        <li><a href="#ketenagakerjaan" onclick="clickMenu();">ketenagakerjaan</a></li> -->
                        <!-- <li><a href="loginForm.php">LOGIN</a></li> -->
                    </ul>
                </div>
                <i class="fa fa-bars" aria-hidden="true" onclick="showMenu()"></i>
            </nav>
     
            <div class="text-box">
                <div class="gambarTextBox">
                    <img src="foto/coverPdanK.png" width>
                </div>    
                
                <h1>Penduduk dan Ketenagakerjaan</h1>
            </div>    

        </div> 


        <section class="penduduk" id="penduduk"> 
            <div class="row">
                <div class="penduduk-col">
                    <h1>Penduduk</h1>
                    <p>Penduduk adalah mereka yang sudah menetap di suatu wilayah paling sedikit 6 bulan atau kurang dari 6 bulan tetapi bermaksud untuk menetap. Lorem ipsuuuum</p>
                    <a href="penduduk.php">Selengkapnya</a>
                </div>

                <div class="penduduk-col">
                    <img src="foto/pendudukBks.jpg">
                </div>
            </div>

        </section>

        <section class="ketenagakerjaan" id="ketenagakerjaan">
            <div class="row">
                <div class="tng-col">
                    <img src="foto/tenagakerjaBks.jpg">
                </div>

                <div class="tng-col">
                    <h1>Tenaga Kerja</h1>
                    <p>Penduduk usia 15 tahun ke atas yang sedang bekerja, yang memiliki pekerjaan namun sementara tidak bekerja. Lorem ipsuuuum</p>
                    <a href="ketenagakerjaan.php">Selengkapnya</a>
                </div>
      
            </div>
    
        
        </section>

        <?php include("footer.php") ?>
        
        <script src="swiper-bundle.min.js"></script>
        <script src="script.js"></script>
    </body>
</html>