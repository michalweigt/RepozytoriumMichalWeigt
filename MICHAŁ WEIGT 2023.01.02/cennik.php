<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl2.css">
    <title>Wynajem pokoi</title>
</head>
<body>
    <section class="baner">
        <h1>Pensjonat pod dobrym humorem</h1>
    </section>
    <section class="lewy">
        <a href="index.html">GŁÓWNA</a>
        <img src="1.jpg" alt="pokoje">
    </section>
    <section class="srodkowy">
    <a href="cennik.php">CENNIK</a>
    <table>
                <?php
                $con = mysqli_connect('localhost', 'root', '', 'wynajem');
                $q = "SELECT * FROM pokoje;";
                $res = mysqli_query($con, $q);
                while ($row = mysqli_fetch_array($res)) {
                    echo "<tr>
                            <td>$row[0]</td>
                            <td>$row[1]</td>
                            <td>$row[2]</td>
                        </tr>";
                }
                mysqli_close($con);
                ?>
            </table>
    </section>
    <section class="prawy">
        <a href="kalkulator.html">KALKULATOR</a>
        <img src="3.jpg" alt="pokoje">
    </section>
    <section class="stopka">
        <p>Stronę opracował: MICHAŁ WEIGT</p>
    </section>
</body>
</html>