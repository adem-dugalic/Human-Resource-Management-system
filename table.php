<?php

	require 'dbconfig/config.php';
	require 'delete.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Table from database</title>		
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<center><h2 class="login">Table from databse</h2></center>
<table>
	<?php
		////////////////
		$cc=0;
		$r=mysqli_query($con,"select * from employee");
		$strq="";
		$strq2="";
		for($i=0;$i<80;$i++){
			$p = mysqli_fetch_field_direct($r, $i);
			$strq.=$p->name.",";
		}
		$strq=substr($strq,0,strlen($strq)-1);
		//////////////////////////////
	$sql = "SELECT * from employee";
	$result = mysqli_query($con,$sql);
	?>
	<table>
		<th>ID</th>
		<th>Ime i prezime</th>
		<th>Broj</th>
		<th>IUSbroj</th>
		<th>pol</th>
		<th>imeOca</th>
		<th>imeMajke</th>
		<th>datumRodenja</th>
		<th>mjestoRodenja</th>
		<th>starost</th>
		<th>jmbg</th>
		<th>drzavljanstvo</th>
		<th>bracniStatus</th>
		<th>brojLicneKarte</th>
		<th>turskiBroj</th>
		<th>pasosBroj</th>
		<th>datumIstekaPasosa</th>
		<th>adresa</th>
		<th>opstina</th>
		<th>grad</th>
		<th>postanskiBroj</th>
		<th>drzava</th>
		<th>brojMobitela1</th>
		<th>brojMobitela2</th>
		<th>brojMagnetneKartice</th>
		<th>emailIUS</th>
		<th>privatniEmail</th>
		<th>skolskaSprema</th>
		<th>skracenaSprema</th>
		<th>problemZvanje</th>
		<th>strucniIspit</th>
		<th>dodatnoObrazovanje</th>
		<th>certifikati</th>
		<th>status</th>
		<th>dnevnaSatnica</th>
		<th>sedmicnoVrijeme</th>
		<th>pozicijaBH</th>
		<th>pozicijaENG</th>
		<th>dodatnaZaduzenja</th>
		<th>odlukaOImenovanjuB</th>
		<th>odlukaOImenovanjuO</th>
		<th>odlukaOImenovanjuD</th>
		<th>fakultet</th>
		<th>odsjek</th>
		<th>studijskiProgram</th>
		<th>ekvivalencija</th>
		<th>pocetakRada</th>
		<th>vrijemeNaIUS</th>
		<th>datumIstekaUg</th>
		<th>ugovorORadu</th>
		<th>trajanjeProbnog</th>
		<th>brojZakljucenogUgovoraORaduSaPripravnikom</th>
		<th>datumZakljucenogUgovoraORaduSaPripravnikom</th>
		<th>trajanjePripravnickogStaza</th>
		<th>vrijemeIRezultatPolaganjaStrucnogIspitaAkoJeIstiPredvidenIObjavl</th>
		<th>trajanjeRadaUInostranstvu</th>
		<th>trajanjeRadnogVremena</th>
		<th>dozvolaZaBoravak</th>
		<th>brojUgovoraZaImenovanje</th>
		<th>datumUgovoraZaPrvoImenovanje</th>
		<th>brojPosljednjegUgovoraORadu</th>
		<th>datumZakljucenogUgovoraORadu</th>
		<th>datumPosljednjePromjene</th>
		<th>upucivanjeRadnikaUInostranstvo</th>
		<th>sUvecanimTrajanjem</th>
		<th>radnaSposobnost</th>
		<th>mjestoRada</th>
		<th>prethodniRadniStaz</th>
		<th>prethodniPStaz</th>
		<th>porodiljskoOD</th>
		<th>porodiljskoDO</th>
		<th>danPrestankaRadnogOdnosa</th>
		<th>razloziPrestankaRadnogOdnosa</th>
		<th>nazivIzSudskogRjesenja</th>
		<th>poslovnaJedinica</th>
		<th>nazivBnake</th>
		<th>ulicaBanke</th>
		<th>grad2</th>
		<th>brojBnakovnogRacuna</th>
		<th>Image</th>
		<th>Delete</th>
		<th>Edit</th>
		<?php
		$r=mysqli_query($con,$sql);
		while($b=mysqli_fetch_array($r)){
			echo"<tr>";
			for($j=0;$j<80;$j++) {
				echo"<td>".$b[$j]."</td>";
			}
		$cc++;
		?>
			<td><a href="delete.php?to_delete=<?php echo $b[0];?>"><button name="to_delete" id="to_delete">Delete</button></a></td>
			<td><a href="edit.php?to_edit=<?php echo $b[0];?>"><button name="to_edit" id="to_edit">Edit</button></a></td>
		</tr>
			<?php
		}
		echo"</table>";
	?>
	<a href="exportToExel.php"><input name="next" type="button" id="login-button" value="Export to excel"></a>
	<a href="homepage.php"><input name="back" type="button" id="back-button" value="Back"></a>

</body>
</html>