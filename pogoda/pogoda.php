<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prognoza pogody Wrocław</title>
</head>
<body>
    <link rel="stylesheet" href="styl2.css">
    <header>
        <section id="left_b">
            <img src="logo.png" alt="meteo">
        </section>
        <section id="center_b">
            <h1>Prognoza dla Wrocławia</h1>
        </section>
        <section id="right_b">
            <p>maj, 2019 r.</p>
        </section>
    </header>
    <section id="main"> 
         <table id="table1">
            <tr>
                <th>DATA</th>
                <th>TEMPERATURA W NOCY</th>
                <th>TEMPERATURA W DZIEŃ</th>
                <th>OPADY [mm/h]</th>
                <th>CIŚNIENIE [hPa]</th>
              </tr>
              <?php
              $con = mysqli_connect('localhost', 'root', '', 'prognoza');
              $kw = "SELECT * FROM pogoda WHERE miasta_id = 1 ORDER BY data_prognozy;";
              $result = mysqli_query($con, $kw);
              while($tab = mysqli_fetch_row($result)){
                echo "<tr>
                <td>$tab[2]</td>
                <td>$tab[3]</td>
                <td>$tab[4]</td>
                <td>$tab[5]</td>
                <td>$tab[6]</td>
                </tr>"; 
              }
              mysqli_close($con);
              ?>
         </table>   
    </section>
    <div id="bottom_main">
         <section id="left_m">
            <img src="obraz.jpg" alt="Polska, Wrocław">
        </section>  
        <section id="right_m">
            <a href="kwerendy.txt">Pobierz kwerendy</a>
        </section>
    </div>

    <footer>
        <p>Stronę wykonał: 21</p>
    </footer>
    
</body>
</html>