<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="footer.css">
        <!-- <link rel="stylesheet" href="swiper-bundle.min.css"> -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">
        <link rel="stylesheet" href="http://pro.fontawesome.com/releases/v5.10.0/css/all.css">

        <title>Penduduk dan Ketenagakerjaan</title>
    </head>

    <body>
        <?php include('connect.php');
        ?> 

        <?php
            try {
                    $pdo = new PDO($dsn,$db_username,$db_password,$opt);

                    $keyword = $_GET['keyword'];
                    
                    echo '<div class="tabel_section" id="tabel_section">';
                        echo "<table>";
                            echo "<thead>";
                            echo "</thead>";

                            echo "<tbody>";
                                if(isset($keyword)) {
                                    $sql = "SELECT * FROM metadatapendtng WHERE 
                                            nama LIKE '%$keyword%' OR 
                                            kondef LIKE '%$keyword%' ORDER BY nama ASC";
                                } else {
                                    $sql = "SELECT * FROM metadatapendtng ORDER BY nama ASC";
                                }
                
                                $stmt = $pdo->query($sql);
                                $rows = $stmt->fetchAll();
                                
                                foreach($rows as $row) {
                                    echo "<tr>"; 
                                        echo "<td class='namaTabel'>", $row["nama"], "</td>";
                                        echo "<td class='kondefTabel'>", $row["kondef"], "</td>";
                                    echo "</tr>";
                                }   
                            echo "</tbody>";
                        echo "</table>";
                    echo "</div>";
            } catch (PDOException $e) {
                exit("PDO Error: ".$e->getMessage()."<br>");
            }
        ?>

        </section>

        <!-- <section class="ketenagakerjaan" id="ketenagakerjaan">
            <div class="row">
                <div class="tng-col">
                    <img src="foto/tenagakerjaBks.jpg">
                </div>

                <div class="tng-col">
                    <h1>Tenaga Kerja</h1>
                    <p>Penduduk usia 15 tahun ke atas yang sedang bekerja, yang memiliki pekerjaan namun sementara tidak bekerja. Lorem ipsuuuum</p>
                    <a href="">Selengkapnya</a>
                </div>

                
            </div>
    
        
        </section> -->
        <script src="metadataPenduduk.js"></script>
    </body>
</html>