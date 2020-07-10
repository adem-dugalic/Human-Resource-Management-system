<?php

	require 'dbconfig/config.php';
?>

<?php 
	if (isset($_REQUEST['to_edit'])) {
		$id = $_GET['to_edit'];
		$update = true;
		$record = mysqli_query($con, "SELECT * FROM employee WHERE id=$id");

		if (mysqli_num_rows($record)==1) {
			$n = mysqli_fetch_array($record);
			$ImeIPrezime = $n['ImeIPrezime'];
			$broj = $n['broj'];
			$IUSbroj = $n['IUSbroj'];
			$pol = $n['pol'];
			$imeOca = $n['imeOca'];
			$imeMajke = $n['imeMajke'];
			$datumRodenja = $n['datumRodenja'];
			$mjestoRodenja = $n['mjestoRodenja'];
			$starost = $n['starost'];
			$jmbg = $n['jmbg'];
			$drzavljanstvo = $n['drzavljanstvo'];
			$bracniStatus = $n['bracniStatus'];
			$brojLicneKarte = $n['brojLicneKarte'];
			$turskiBroj = $n['turskiBroj'];
			$pasosBroj = $n['pasosBroj'];
			$datumIstekaPasosa = $n['datumIstekaPasosa'];
			$adresa = $n['adresa'];
			$opstina = $n['opstina'];
			$grad = $n['grad'];
			$postanskiBroj = $n['postanskiBroj'];
			$drzava = $n['drzava'];
			$brojMobitela1 = $n['brojMobitela1'];
			$brojMobitela2 = $n['brojMobitela2'];
			$brojMagnetneKartice = $n['brojMagnetneKartice'];
			$emailIUS = $n['emailIUS'];
			$privatniEmail = $n['privatniEmail'];
			$skolskaSprema = $n['skolskaSprema'];
			$skracenaSprema = $n['skracenaSprema'];
			$problemZvanje = $n['problemZvanje'];
			$strucniIspit = $n['strucniIspit'];
			$dodatnoObrazovanje = $n['dodatnoObrazovanje'];
			$certifikati = $n['certifikati'];
			$status = $n['status'];
			$dnevnaSatnica = $n['dnevnaSatnica'];
			$sedmicnoVrijeme = $n['sedmicnoVrijeme'];
			$pozicijaBH = $n['pozicijaBH'];
			$pozicijaENG = $n['pozicijaENG'];
			$dodatnaZaduzenja = $n['dodatnaZaduzenja'];
			$odlukaOImenovanjuB = $n['odlukaOImenovanjuB'];
			$odlukaOImenovanjuO = $n['odlukaOImenovanjuO'];
			$odlukaOImenovanjuD = $n['odlukaOImenovanjuD'];
			$fakultet = $n['fakultet'];
			$odsjek = $n['odsjek'];
			$studijskiProgram = $n['studijskiProgram'];
			$ekvivalencija = $n['ekvivalencija'];
			$pocetakRada = $n['pocetakRada'];
			$vrijemeNaIUS = $n['vrijemeNaIUS'];
			$datumIstekaUg = $n['datumIstekaUg'];
			$ugovorORadu = $n['ugovorORadu'];
			$trajanjeProbnog = $n['trajanjeProbnog'];
			$brojZakljucenogUgovoraORaduSaPripravnikom = $n['brojZakljucenogUgovoraORaduSaPripravnikom'];
			$datumZakljucenogUgovoraORaduSaPripravnikom = $n['datumZakljucenogUgovoraORaduSaPripravnikom'];
			$trajanjePripravnickogStaza = $n['trajanjePripravnickogStaza'];
			$vrijemeIRezultatPolaganjaStrucnogIspitaAkoJeIstiPredvidenIObjavl = $n['vrijemeIRezultatPolaganjaStrucnogIspitaAkoJeIstiPredvidenIObjavl'];
			$trajanjeRadaUInostranstvu = $n['trajanjeRadaUInostranstvu'];
			$trajanjeRadnogVremena = $n['trajanjeRadnogVremena'];
			$dozvolaZaBoravak = $n['dozvolaZaBoravak'];
			$brojUgovoraZaImenovanje = $n['brojUgovoraZaImenovanje'];
			$datumUgovoraZaPrvoImenovanje = $n['datumUgovoraZaPrvoImenovanje'];
			$brojPosljednjegUgovoraORadu = $n['brojPosljednjegUgovoraORadu'];
			$datumZakljucenogUgovoraORadu = $n['datumZakljucenogUgovoraORadu'];
			$datumPosljednjePromjene = $n['datumPosljednjePromjene'];
			$upucivanjeRadnikaUInostranstvo = $n['upucivanjeRadnikaUInostranstvo'];
			$sUvecanimTrajanjem = $n['sUvecanimTrajanjem'];
			$radnaSposobnost = $n['radnaSposobnost'];
			$mjestoRada = $n['mjestoRada'];
			$prethodniRadniStaz = $n['prethodniRadniStaz'];
			$prethodniPStaz = $n['prethodniPStaz'];
			$porodiljskoOD = $n['porodiljskoOD'];
			$porodiljskoDO = $n['porodiljskoDO'];
			$danPrestankaRadnogOdnosa = $n['danPrestankaRadnogOdnosa'];
			$razloziPrestankaRadnogOdnosa = $n['razloziPrestankaRadnogOdnosa'];
			$nazivIzSudskogRjesenja = $n['nazivIzSudskogRjesenja'];
			$poslovnaJedinica = $n['poslovnaJedinica'];
			$nazivBnake = $n['nazivBnake'];
			$ulicaBanke = $n['ulicaBanke'];
			$grad2 = $n['grad2'];
			$brojBnakovnogRacuna = $n['brojBnakovnogRacuna'];
		}
	}

	if (isset($_POST['save'])) {
		header('location: table.php');
	}

	if (isset($_POST['update'])) {
	$id=$_POST['id'];
	$ImeIPrezime = $_POST['ImeIPrezime'];
	$broj = $_POST['broj'];
	$IUSbroj = $_POST['IUSbroj'];
	$pol = $_POST['pol'];
	$imeOca = $_POST['imeOca'];
	$imeMajke = $_POST['imeMajke'];
	$datumRodenja = $_POST['datumRodenja'];
	$mjestoRodenja = $_POST['mjestoRodenja'];
	$starost = $_POST['starost'];
	$jmbg = $_POST['jmbg'];
	$drzavljanstvo = $_POST['drzavljanstvo'];
	$bracniStatus = $_POST['bracniStatus'];
	$brojLicneKarte = $_POST['brojLicneKarte'];
	$turskiBroj = $_POST['turskiBroj'];
	$pasosBroj = $_POST['pasosBroj'];
	$datumIstekaPasosa = $_POST['datumIstekaPasosa'];
	$adresa = $_POST['adresa'];
	$opstina = $_POST['opstina'];
	$grad = $_POST['grad'];
	$postanskiBroj = $_POST['postanskiBroj'];
	$drzava = $_POST['drzava'];
	$brojMobitela1 = $_POST['brojMobitela1'];
	$brojMobitela2 = $_POST['brojMobitela2'];
	$brojMagnetneKartice = $_POST['brojMagnetneKartice'];
	$emailIUS = $_POST['emailIUS'];
	$privatniEmail = $_POST['privatniEmail'];
	$skolskaSprema = $_POST['skolskaSprema'];
	$skracenaSprema = $_POST['skracenaSprema'];
	$problemZvanje = $_POST['problemZvanje'];
	$strucniIspit = $_POST['strucniIspit'];
	$dodatnoObrazovanje = $_POST['dodatnoObrazovanje'];
	$certifikati = $_POST['certifikati'];
	$status = $_POST['status'];
	$dnevnaSatnica = $_POST['dnevnaSatnica'];
	$sedmicnoVrijeme = $_POST['sedmicnoVrijeme'];
	$pozicijaBH = $_POST['pozicijaBH'];
	$pozicijaENG = $_POST['pozicijaENG'];
	$dodatnaZaduzenja = $_POST['dodatnaZaduzenja'];
	$odlukaOImenovanjuB = $_POST['odlukaOImenovanjuB'];
	$odlukaOImenovanjuO = $_POST['odlukaOImenovanjuO'];
	$odlukaOImenovanjuD = $_POST['odlukaOImenovanjuD'];
	$fakultet = $_POST['fakultet'];
	$odsjek = $_POST['odsjek'];
	$studijskiProgram = $_POST['studijskiProgram'];
	$ekvivalencija = $_POST['ekvivalencija'];
	$pocetakRada = $_POST['pocetakRada'];
	$vrijemeNaIUS = $_POST['vrijemeNaIUS'];
	$datumIstekaUg = $_POST['datumIstekaUg'];
	$ugovorORadu = $_POST['ugovorORadu'];
	$trajanjeProbnog = $_POST['trajanjeProbnog'];
	$brojZakljucenogUgovoraORaduSaPripravnikom = $_POST['brojZakljucenogUgovoraORaduSaPripravnikom'];
	$datumZakljucenogUgovoraORaduSaPripravnikom = $_POST['datumZakljucenogUgovoraORaduSaPripravnikom'];
	$trajanjePripravnickogStaza = $_POST['trajanjePripravnickogStaza'];
	$vrijemeIRezultatPolaganjaStrucnogIspitaAkoJeIstiPredvidenIObjavl = $_POST['vrijemeIRezultatPolaganjaStrucnogIspitaAkoJeIstiPredvidenIObjavl'];
	$trajanjeRadaUInostranstvu = $_POST['trajanjeRadaUInostranstvu'];
	$trajanjeRadnogVremena = $_POST['trajanjeRadnogVremena'];
	$dozvolaZaBoravak = $_POST['dozvolaZaBoravak'];
	$brojUgovoraZaImenovanje = $_POST['brojUgovoraZaImenovanje'];
	$datumUgovoraZaPrvoImenovanje = $_POST['datumUgovoraZaPrvoImenovanje'];
	$brojPosljednjegUgovoraORadu = $_POST['brojPosljednjegUgovoraORadu'];
	$datumZakljucenogUgovoraORadu = $_POST['datumZakljucenogUgovoraORadu'];
	$datumPosljednjePromjene = $_POST['datumPosljednjePromjene'];
	$upucivanjeRadnikaUInostranstvo = $_POST['upucivanjeRadnikaUInostranstvo'];
	$sUvecanimTrajanjem = $_POST['sUvecanimTrajanjem'];
	$radnaSposobnost = $_POST['radnaSposobnost'];
	$mjestoRada = $_POST['mjestoRada'];
	$prethodniRadniStaz = $_POST['prethodniRadniStaz'];
	$prethodniPStaz = $_POST['prethodniPStaz'];
	$porodiljskoOD = $_POST['porodiljskoOD'];
	$porodiljskoDO = $_POST['porodiljskoDO'];
	$danPrestankaRadnogOdnosa = $_POST['danPrestankaRadnogOdnosa'];
	$razloziPrestankaRadnogOdnosa = $_POST['razloziPrestankaRadnogOdnosa'];
	$nazivIzSudskogRjesenja = $_POST['nazivIzSudskogRjesenja'];
	$poslovnaJedinica = $_POST['poslovnaJedinica'];
	$nazivBnake = $_POST['nazivBnake'];
	$ulicaBanke = $_POST['ulicaBanke'];
	$grad2 = $_POST['grad2'];
	$brojBnakovnogRacuna = $_POST['brojBnakovnogRacuna'];
	mysqli_query($con, "UPDATE employee SET ImeIPrezime='$ImeIPrezime',broj='$broj',IUSbroj='$IUSbroj',pol='$pol',imeOca='$imeOca',imeMajke='$imeMajke',datumRodenja='$datumRodenja'
            ,mjestoRodenja='$mjestoRodenja',starost='$starost',
            jmbg='$jmbg',drzavljanstvo='$drzavljanstvo',bracniStatus='$bracniStatus'
            ,brojLicneKarte='$brojLicneKarte',turskiBroj='$turskiBroj',pasosBroj='$pasosBroj'
            ,datumIstekaPasosa='$datumIstekaPasosa',adresa='$adresa',opstina='$opstina',
            grad='$grad',postanskiBroj='$postanskiBroj',drzava='$drzava',brojMobitela1='$brojMobitela1'
            ,brojMobitela2='$brojMobitela2',brojMagnetneKartice='$brojMagnetneKartice',emailIUS='$emailIUS'
            ,privatniEmail='$privatniEmail',skolskaSprema='$skolskaSprema',skracenaSprema='$skracenaSprema',
            problemZvanje='$problemZvanje',strucniIspit='$strucniIspit',dodatnoObrazovanje='$dodatnoObrazovanje',
            certifikati='$certifikati',status='$status',dnevnaSatnica='$dnevnaSatnica',sedmicnoVrijeme='$sedmicnoVrijeme',
            pozicijaBH='$pozicijaBH',pozicijaENG='$pozicijaENG',dodatnaZaduzenja='$dodatnaZaduzenja',odlukaOImenovanjuB='$odlukaOImenovanjuB',
            odlukaOImenovanjuO='$odlukaOImenovanjuO',odlukaOImenovanjuD='$odlukaOImenovanjuD',fakultet='$fakultet',odsjek='$odsjek'
            ,studijskiProgram='$studijskiProgram',ekvivalencija='$ekvivalencija',pocetakRada='$pocetakRada',vrijemeNaIUS='$vrijemeNaIUS'
            ,datumIstekaUg='$datumIstekaUg',ugovorORadu='$ugovorORadu',trajanjeProbnog='$trajanjeProbnog',
            brojZakljucenogUgovoraORaduSaPripravnikom='$brojZakljucenogUgovoraORaduSaPripravnikom',
            datumZakljucenogUgovoraORaduSaPripravnikom='$datumZakljucenogUgovoraORaduSaPripravnikom',
            trajanjePripravnickogStaza='$trajanjePripravnickogStaza',
            vrijemeIRezultatPolaganjaStrucnogIspitaAkoJeIstiPredvidenIObjavl='$vrijemeIRezultatPolaganjaStrucnogIspitaAkoJeIstiPredvidenIObjavl'
            ,trajanjeRadaUInostranstvu='$trajanjeRadaUInostranstvu',trajanjeRadnogVremena='$trajanjeRadnogVremena',
            dozvolaZaBoravak='$dozvolaZaBoravak',brojUgovoraZaImenovanje='$brojUgovoraZaImenovanje',
            datumUgovoraZaPrvoImenovanje='$datumUgovoraZaPrvoImenovanje',brojPosljednjegUgovoraORadu='$brojPosljednjegUgovoraORadu',
            datumZakljucenogUgovoraORadu='$datumZakljucenogUgovoraORadu',datumPosljednjePromjene='$datumPosljednjePromjene',
            upucivanjeRadnikaUInostranstvo='$upucivanjeRadnikaUInostranstvo',sUvecanimTrajanjem='$sUvecanimTrajanjem',
            radnaSposobnost='$radnaSposobnost',mjestoRada='$mjestoRada',prethodniRadniStaz='$prethodniRadniStaz',
            prethodniPStaz='$prethodniPStaz',porodiljskoOD='$porodiljskoOD',porodiljskoDO='$porodiljskoDO',
            danPrestankaRadnogOdnosa='$danPrestankaRadnogOdnosa',razloziPrestankaRadnogOdnosa='$razloziPrestankaRadnogOdnosa',
            nazivIzSudskogRjesenja='$nazivIzSudskogRjesenja',poslovnaJedinica='$poslovnaJedinica',nazivBnake='$nazivBnake',
            ulicaBanke='$ulicaBanke',grad2='$grad2',brojBnakovnogRacuna='$brojBnakovnogRacuna' WHERE id='$id'");

}
	?>

<!DOCTYPE html>
<html>
<head>
	<title>IUS test system</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="background-color: #95a5a6">
	<div class="adding-site">
<form class="main_form" action="edit.php" method="post" enctype="multipart/form-data">

		<center><h2 class="login">Edit formula</h2></center>

		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<label><b>Ime i prezime:</label><br>
		<input name="ImeIPrezime" type="text" class="inputval" value="<?php echo $ImeIPrezime;?>" data-rq/> <br>
		<label><b>Broj:</label><br>
		<input name="broj" type="text" class="inputval" value="<?php echo $broj;?>" data-rq/><br>
		<label><b>IUS broj:</label><br>
		<input name="IUSbroj" type="text" class="inputval" value="<?php echo $IUSbroj;?>" data-rq/> <br>
		<label><b>Pol:</label><br>
		<input name="pol" type="text" class="inputval" value="<?php echo $pol;?>" data-rq/><br>
		<label><b>Ime oca:</label><br>
		<input name="imeOca" type="text" class="inputval" value="<?php echo $imeOca;?>" data-rq/> <br>
		<label><b>Ime majke:</label><br>
		<input name="imeMajke" type="text" class="inputval" value="<?php echo $imeMajke;?>" data-rq/><br>
		<label><b>Datum Rođenja:</label><br>
		<input name="datumRodenja" type="text" class="inputval" value="<?php echo $datumRodenja;?>" data-rq/> <br>
		<label><b>Mjesto rođenja:</label><br>
		<input name="mjestoRodenja" type="text" class="inputval" value="<?php echo $mjestoRodenja;?>" data-rq/><br>
		<label><b>Starost:</label><br>
		<input name="starost" type="text" class="inputval" value="<?php echo $starost;?>" data-rq/> <br>
		<label><b>JMBG/JIB:</label><br>
		<input name="jmbg" type="text" class="inputval" value="<?php echo $jmbg;?>" data-rq/><br>

		<label><b>Državljanstvo:</label><br>
		<input name="drzavljanstvo" type="text" class="inputval" value="<?php echo $drzavljanstvo;?>" data-rq/> <br>
		<label><b>Bračni status:</label><br>
		<input name="bracniStatus" type="text" class="inputval" value="<?php echo $bracniStatus;?>" data-rq/><br>
		<label><b>Broj lične karte:</label><br>
		<input name="brojLicneKarte" type="text" class="inputval" value="<?php echo $brojLicneKarte;?>" data-rq/> <br>
		<label><b>Turski matični broj:</label><br>
		<input name="turskiBroj" type="text" class="inputval" value="<?php echo $turskiBroj;?>" data-rq/> <br>
		<label><b>Pasoš broj:</label><br>
		<input name="pasosBroj" type="text" class="inputval" value="<?php echo $pasosBroj;?>" data-rq/><br>
		<label><b>Datum isteka pasoša:</label><br>
		<input name="datumIstekaPasosa" type="text" class="inputval" value="<?php echo $datumIstekaPasosa;?>" data-rq/> <br>
		<label><b>Adresa:</label><br>
		<input name="adresa" type="text" class="inputval" value="<?php echo $adresa;?>" data-rq/><br>
		<label><b>Opština:</label><br>
		<input name="opstina" type="text" class="inputval" value="<?php echo $opstina;?>" data-rq/> <br>
		<label><b>Grad:</label><br>
		<input name="grad" type="text" class="inputval" value="<?php echo $grad;?>" data-rq/><br>

		<label><b>Poštanski broj:</label><br>
		<input name="postanskiBroj" type="text" class="inputval" value="<?php echo $postanskiBroj;?>" data-rq/> <br>
		<label><b>Država:</label><br>
		<input name="drzava" type="text" class="inputval" value="<?php echo $drzava;?>" data-rq/><br>
		<label><b>Broj Mobitela 1:</label><br>
		<input name="brojMobitela1" type="text" class="inputval" value="<?php echo $brojMobitela1;?>"data-rq/> <br>
		<label><b>Broj Mobitela 2:</label><br>
		<input name="brojMobitela2" type="text" class="inputval" value="<?php echo $brojMobitela2;?>"data-rq/> <br>
		<label><b>Broj magnetne kartice:</label><br>
		<input name="brojMagnetneKartice" type="text" class="inputval" value="<?php echo $brojMagnetneKartice;?>" data-rq/> <br>
		<label><b>Email-ius:</label><br>
		<input name="emailIUS" type="text" class="inputval" value="<?php echo $emailIUS;?>" data-rq/><br>
		<label><b>Privatni email:</label><br>
		<input name="privatniEmail" type="text" class="inputval" value="<?php echo $privatniEmail;?>" data-rq/> <br>
		<label><b>Školska sprema:</label><br>
		<input name="skolskaSprema" type="text" class="inputval" value="<?php echo $skolskaSprema;?>" data-rq/> <br>
		<label><b>Skraceni naziv stručne spreme:</label><br>
		<input name="skracenaSprema" type="text" class="inputval" value="<?php echo $skracenaSprema;?>" data-rq/> <br>
		<label><b>Problematično zvanje:</label><br>
		<input name="problemZvanje" type="text" class="inputval" value="<?php echo $problemZvanje;?>" data-rq/><br>

		<label><b>Stručni ispit:</label><br>
		<input name="strucniIspit" type="text" class="inputval" value="<?php echo $strucniIspit;?>"data-rq/> <br>
		<label><b>Dodatno obrazovanje:</label><br>
		<input name="dodatnoObrazovanje" type="text" class="inputval" value="<?php echo $dodatnoObrazovanje;?>" data-rq/> <br>
		<label><b>Certifikati i slično:</label><br>
		<input name="certifikati" type="text" class="inputval" value="<?php echo $certifikati;?>"data-rq/> <br>
		<label><b>Trenutni status na IUS-u:</label><br>
		<input name="status" type="text" class="inputval" value="<?php echo $status;?>" data-rq/><br>
		<label><b>Dnevna satnica:</label><br>
		<input name="dnevnaSatnica" type="text" class="inputval" value="<?php echo $dnevnaSatnica;?>" data-rq/> <br>
		<label><b>Ugovoreno sedmično vrijeme:</label><br>
		<input name="sedmicnoVrijeme" type="text" class="inputval" value="<?php echo $sedmicnoVrijeme;?>" data-rq/><br>
		<label><b>Radna pozicija(bh):</label><br>
		<input name="pozicijaBH" type="text" class="inputval" value="<?php echo $pozicijaBH;?>" data-rq/> <br>
		<label><b>Radna pozicija(eng):</label><br>
		<input name="pozicijaENG" type="text" class="inputval" value="<?php echo $pozicijaENG;?>" data-rq/> <br>

		<label><b>Dodatna zaduženja:</label><br>
		<input name="dodatnaZaduzenja" type="text" class="inputval" value="<?php echo $dodatnaZaduzenja;?>" data-rq/> <br>
		<label><b>Odluka o imenovanju-broj:</label><br>
		<input name="odlukaOImenovanjuB" type="text" class="inputval" value="<?php echo $odlukaOImenovanjuB;?>" data-rq/> <br>
		<label><b>Odluka o imenovanju od:</label><br>
		<input name="odlukaOImenovanjuO" type="text" class="inputval" value="<?php echo $odlukaOImenovanjuO;?>" data-rq/> <br>
		<label><b>Odluka o imenovanju do:</label><br>
		<input name="odlukaOImenovanjuD" type="text" class="inputval" value="<?php echo $odlukaOImenovanjuD;?>" data-rq/> <br>
		<label><b>Fakultet(bh i eng):</label><br>
		<input name="fakultet" type="text" class="inputval" value="<?php echo $fakultet;?>" data-rq/> <br>
		<label><b>Odsjek:</label><br>
		<input name="odsjek" type="text" class="inputval" value="<?php echo $odsjek;?>" data-rq/><br>
		<label><b>Studijski program:</label><br>
		<input name="studijskiProgram" type="text" class="inputval" value="<?php echo $studijskiProgram;?>" data-rq/> <br>
		<label><b>Ekvivalencija po oblasti:</label><br>
		<input name="ekvivalencija" type="text" class="inputval" value="<?php echo $ekvivalencija;?>" data-rq/> <br>

		<label><b>Pocetak rada na IUS-u:</label><br>
		<input name="pocetakRada" type="text" class="inputval" value="<?php echo $pocetakRada;?>" data-rq/> <br>
		<label><b>Ukupno vrijeme provedeno na IUS-u:</label><br>
		<input name="vrijemeNaIUS" type="text" class="inputval" value="<?php echo $vrijemeNaIUS;?>" data-rq/> <br>
		<label><b>Datum isteka ugovora:</label><br>
		<input name="datumIstekaUg" type="text" class="inputval" value="<?php echo $datumIstekaUg;?>" data-rq/> <br>
		<label><b>Tip ugovora o radu:</label><br>
		<input name="ugovorORadu" type="text" class="inputval" value="<?php echo $ugovorORadu;?>" checked data-rq/><br>
		<label><b>Vrijeme trajanja probnog rada:</label><br>
		<input name="trajanjeProbnog" type="text" class="inputval" value="<?php echo $trajanjeProbnog;?>" data-rq/> <br>
		<label><b>Broj zaključenog ugovora o radu sa pripravnikom:</label><br>
		<input name="brojZakljucenogUgovoraORaduSaPripravnikom" type="text" class="inputval" value="<?php echo $brojZakljucenogUgovoraORaduSaPripravnikom;?>" data-rq/> <br>
		<label><b>Datum zaključenog ugovora o radu sa pripravnikom:</label><br>
		<input name="datumZakljucenogUgovoraORaduSaPripravnikom" type="text" class="inputval" value="<?php echo $datumZakljucenogUgovoraORaduSaPripravnikom;?>" data-rq/> <br>

		<label><b>Trajanje pripravničkog staža:</label><br>
		<input name="trajanjePripravnickogStaza" type="text" class="inputval" value="<?php echo $trajanjePripravnickogStaza;?>" data-rq/> <br>
		<label><b>Vrijeme i rezultat polaganja stručnog ispita, ako je isti predviđen i objavljen:</label><br>
		<input name="vrijemeIRezultatPolaganjaStrucnogIspitaAkoJeIstiPredvidenIObjavl" type="text" class="inputval" value="<?php echo $vrijemeIRezultatPolaganjaStrucnogIspitaAkoJeIstiPredvidenIObjavl;?>" data-rq/> <br>
		<label><b>Trajanje rada u inostranstvu:</label><br>
		<input name="trajanjeRadaUInostranstvu" type="text" class="inputval" value="<?php echo $trajanjeRadaUInostranstvu;?>" data-rq/> <br>
		<label><b>Trajanje radnog vremena:</label><br>
		<input name="trajanjeRadnogVremena" type="text" class="inputval" value="<?php echo $trajanjeRadnogVremena;?>" checked data-rq/><br>

		<label><b>Dozvola za boravak i rad ili potvrda o prijavi rada:</label><br>
		<input name="dozvolaZaBoravak" type="text" class="inputval" value="<?php echo $dozvolaZaBoravak;?>" data-rq/> <br>
		<label><b>Broj prvog ugovora koji se vezuje za imenovanje:</label><br>
		<input name="brojUgovoraZaImenovanje" type="text" class="inputval" value="<?php echo $brojUgovoraZaImenovanje;?>" data-rq/> <br>
		<label><b>Datum potpisivanja ugovora koji se vezuje za prvo imenovanje:</label><br>
		<input name="datumUgovoraZaPrvoImenovanje" type="text" class="inputval" value="<?php echo $datumUgovoraZaPrvoImenovanje;?>" data-rq/> <br>
		<label><b>Broj posljednjeg zaključenog ugovora o radu:</label><br>
		<input name="brojPosljednjegUgovoraORadu" type="text" class="inputval" value="<?php echo $brojPosljednjegUgovoraORadu;?>" data-rq/> <br>
		<label><b>Datum zaključenog ugovora o radu:</label><br>
		<input name="datumZakljucenogUgovoraORadu" type="text" class="inputval" value="<?php echo $datumZakljucenogUgovoraORadu;?>" data-rq/> <br>
		<label><b>Datup posljednje promjene putem JS3100:</label><br>
		<input name="datumPosljednjePromjene" type="text" class="inputval" value="<?php echo $datumPosljednjePromjene;?>"data-rq/><br>
		<label><b>Država i mjesto rada u inostranstvu u slučaju upućivanja radnika u inostranstvo:</label><br>
		<input name="upucivanjeRadnikaUInostranstvo" type="text" class="inputval" value="<?php echo $upucivanjeRadnikaUInostranstvo;?>" data-rq/> <br>
		<label><b>Radi li se o poslovima na kojima se staž osiguranja računa s uvečanim trajanjem:</label><br>
		<input name="sUvecanimTrajanjem" type="text" class="inputval" value="<?php echo $sUvecanimTrajanjem;?>" data-rq/> <br>
		<label><b>Radi li se o poslovima na kojima radnik može raditi samo nakon prethodnog i redovnog utvrđivanja Radne sposobnosti za njihovo obavljanje:</label><br>
		<input name="radnaSposobnost" type="text" class="inputval" value="<?php echo $radnaSposobnost;?>" data-rq/> <br>

		<label><b>Mjesto rada:</label><br>
		<input name="mjestoRada" type="text" class="inputval" value="<?php echo $mjestoRada;?>" data-rq/> <br>
		<label><b>Prethodni radni staž:</label><br>
		<input name="prethodniRadniStaz" type="text" class="inputval" value="<?php echo $prethodniRadniStaz;?>" data-rq/> <br>
		<label><b>Prethodni penzioni staž:</label><br>
		<input name="prethodniPStaz" type="text" class="inputval" value="<?php echo $prethodniPStaz;?>" data-rq/> <br>
		<label><b>Neplaceno/porodiljsko/placeno OD:</label><br>
		<input name="porodiljskoOD" type="text" class="inputval" value="<?php echo $porodiljskoOD;?>" data-rq/> <br>
		<label><b>Neplaceno/porodiljsko/placeno DO:</label><br>
		<input name="porodiljskoDO" type="text" class="inputval" value="<?php echo $porodiljskoDO;?>" data-rq/> <br>
		<label><b>Dan prestanka radnog odnosa:</label><br>
		<input name="danPrestankaRadnogOdnosa" type="text" class="inputval" value="<?php echo $danPrestankaRadnogOdnosa;?>"data-rq/><br>
		<label><b>Razlozi prestanka radnog odnosa:</label><br>
		<input name="razloziPrestankaRadnogOdnosa" type="text" class="inputval" value="<?php echo $razloziPrestankaRadnogOdnosa;?>" data-rq/> <br>
		<label><b>Puni naziv is sudskog rješenja:</label><br>
		<input name="nazivIzSudskogRjesenja" type="text" class="inputval" value="<?php echo $nazivIzSudskogRjesenja;?>"data-rq/> <br>

		<label><b>ID broj poslje odjave-poslovna jedinica:</label><br>
		<input name="poslovnaJedinica" type="text" class="inputval" value="<?php echo $poslovnaJedinica;?>" data-rq/> <br>
		<label><b>Naziv banke:</label><br>
		<input name="nazivBnake" type="text" class="inputval" value="<?php echo $nazivBnake;?>" data-rq/> <br>
		<label><b>Ulica banke:</label><br>
		<input name="ulicaBanke" type="text" class="inputval" value="<?php echo $ulicaBanke;?>" data-rq/><br>
		<label><b>Grad Banke:</label><br>
		<input name="grad2" type="text" class="inputval" value="<?php echo $grad2;?>" data-rq/> <br>
		<label><b>Broj bankovnog računa od januara 2017:</label><br>
		<input name="brojBnakovnogRacuna" type="text" class="inputval" value="<?php echo $brojBnakovnogRacuna;?>" data-rq/> <br>

			<?php if (isset($update) && $update): ?>
			<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
			<?php else: ?>
				<button class="btn" type="submit" name="save" >Save</button>
			<?php endif ?>
	</form>

</body>	
</html>
