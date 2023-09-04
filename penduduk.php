<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styleVisualisasi.css">
        <!-- <link rel="stylesheet" href="swiper-bundle.min.css"> -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">
        <link rel="stylesheet" href="http://pro.fontawesome.com/releases/v5.10.0/css/all.css">

        <title>Penduduk</title>
    </head>

    <body>
    <?php include('connect.php');
            include('headerPenduduk.php')
        ?> 

        <?php
            try {
                    $pdo = new PDO($dsn,$db_username,$db_password,$opt);

                    $stmt = $pdo->query("SELECT * FROM metadatapendtng ORDER BY nama ASC");
                    
                    echo '<section class="pend" id="pend">'; 
                        echo '<div class="pend-sec">';
                            echo '<div class="pend-container">';
                                echo '<form action="">
                                        <i class="fas fa-search"></i>
                                        <input type="text" name="" id="search-item" placeholder="Cari Metadata" onkeyup="showHint(this.value)">
                                     </form>';

                                echo '<div class="tabel_section" id="tabel_section">';
                                    echo "<table>";
                                        echo "<thead>";
                                        echo "</thead>";

                                        echo "<tbody>";
                                            while($row = $stmt -> fetch()) {
                                                echo "<tr>"; 
                                                    echo "<td class='namaTabel'>", $row["nama"], "</td>";
                                                    echo "<td class='kondefTabel'>", $row["kondef"], "</td>";
                                                echo "</tr>";
                                            }
                                        echo "</tbody>";
                                    echo "</table>";
                                echo "</div>";
                            echo '</div>';
                            
                            
                            echo '<div class="visualisasi">';
                                    echo "<tableau-viz id='tableauViz' src='https://public.tableau.com/views/VisualisasiInformasiKondisiPembangunanManusiaBerbasisGenderdiIndonesia/story?:language=en-US&:retry=yes&:display_count=n&:origin=viz_share_link'      
                                        toolbar='bottom' hide-tabs>
                                      </tableau-viz>";
                                    echo '</div>';
                            echo '</div>';
                        echo '</div>';
                        $pdo = NULL;
                    echo '</section>';
                } catch (PDOException $e) {
                    exit("PDO Error: ".$e->getMessage()."<br>");
                }
        ?>

        
        <?php include('footer.php')?>
        <script src="metadataPenduduk.js"></script>
        <script type="module" src="https://public.tableau.com/javascripts/api/tableau.embedding.3.latest.min.js"></script>
    </body>
</html>