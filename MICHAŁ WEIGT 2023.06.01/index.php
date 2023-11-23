<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <?php
        $servername ='localhost';
        $username = 'root';
        $password = '';
        $dbname='sklep';
        $conn = mysqli_connect($servername, $username, $password, $dbname)
    ?>
    <title>Sklep papierniczy</title>
</head>
<body>
    <div class="baner">
        <h1>W naszym sklepie internetowym kupisz najtaniej</h1>
    </div>

    <div class="lewy">
        <h3>Promocja 15% obejmuje artykuły:</h3>
		<ul>
		<?php
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		$kw1 = "SELECT nazwa FROM towary WHERE promocja = 1;";
		$res1 = mysqli_query($conn, $kw1);
		while($tab = mysqli_fetch_row($res1)) {
			echo "<li>$tab[0]</li>";
		}
		?>
		</ul>
    </div>

    <div class="srodkowy">
        <h1>Cena wybranego artykułu w promocji</h1>
		<form action="index.php" method="post">
			<select name="lista">
				<option value="Gumka do mazania">Gumka do mazania</option>
				<option value="Cienkopis">Cienkopis</option>
				<option value="Pisaki 60 szt.">Pisaki 60 szt.</option>
				<option value="Markery 4 szt.">Markery 4 szt.</option>
			</select>
			<button type="submit">WYBIERZ</button>
		</form>
		<?php
		if(!empty($_POST['lista'])) {
			$produkt = $_POST['lista'];
			$kw2 = "SELECT cena FROM towary WHERE nazwa = '$produkt';";
			$res2 = mysqli_query($con, $kw2);
			while($tab = mysqli_fetch_row($res2)) {
				$cena = ROUND($tab[0]*0.85,2);
				echo "$cena";
			}
		}
		?>
    </div>

    <div class="prawy">
        <h3>Kontakt</h3>
        <p>telefon: 123123123</p>
        <p>e-mail: <a href="mailto:bok@sklep.pl">bok@sklep.pl</a></p>
        <img src="promocja2.png" alt="promocja">
    </div>

    <div class="stopka">
        <h4>Autor strony: MICHAŁ WEIGT</h4>
    </div>

    <?php
        mysqli_close($conn)
    ?>
</body>
</html>