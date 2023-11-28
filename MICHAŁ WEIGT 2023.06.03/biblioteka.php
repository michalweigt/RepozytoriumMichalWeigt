<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteka miejska</title>
    <link rel="stylesheet" href="style.css">
    <?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'biblioteka';
    ?>
    <?php
        $conn=mysqli_connect($servername, $username, $password, $dbname)
    ?>
</head>
<body>
    <div class="baner">
        <h2>Miejska Biblioteka Publiczna w Książkowicach</h2>
    </div>
    <div class="lewy">
        <h3>W naszych zbiorach znajdziesz dzieła następujących autorów:</h3>
        <ul>
		<?php
		$kw1 = "SELECT imie, nazwisko FROM autorzy;";
		$res1 = mysqli_query($conn, $kw1);
		while($tab = mysqli_fetch_row($res1)) {
			echo "<li>$tab[0] $tab[1]</li>";
		}
		?>
		</ul>
    </div>
    <div class="srodkowy">
        <h3>Dodaj nowego czytelnika</h3>
		<form action="biblioteka.php" method="post">
			<label>
				imię:
				<input type="text" name="imie" /><br/>
			</label>
			<label>
				nazwisko:
				<input type="text" name="nazwisko" /><br/>
			</label>
			<label>
				rok urodzenia:
				<input type="number" name="rok" /><br/>
			</label>
			<button>DODAJ</button>
		</form>
		<?php
		if(!empty($_POST['imie']) && !empty($_POST['nazwisko']) && !empty($_POST['rok'])) {
			$imie = $_POST['imie'];
			$nazwisko = $_POST['nazwisko'];
			$rok = $_POST['rok'];
			$kod = $imie[0].$imie[1].$nazwisko[0].$nazwisko[1];
			$kod = strtoupper($kod).$rok[-2].$rok[-1];
			$kw2 = "INSERT INTO czytelnicy VALUES (NULL, '$imie', '$nazwisko', '$kod');";
			mysqli_query($con, $kw2);
			echo "Czytelnik: $imie $nazwisko został dodany do bazy danych";
		}
		?>
    </div>
    <div class="prawy">
        <img src="biblioteka.png" alt="książki">
    <h4>
        <p>ul. Czytelnicza 25</p>
        <p>12-120 Książkowice</p>
        <p>tel.: 123123123</p>
        <p>e-mail: <a href="biuro@biblioteka.pl">biuro@biblioteka.pl</a></p>
    </h4>
    </div>
    <div class="stopka">
        <p>"Projekt strony: MICHAŁ WEIGT</p>
    </div>
    <?php
        mysqli_close($conn);
    ?>
</body>
</html>