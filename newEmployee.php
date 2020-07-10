<?php

	require 'dbconfig/config.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>IUS test system</title>
	<script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("imglink").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };
</script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="background-color: #95a5a6">
	<div class="adding-site">
<form class="main_form" action="newEmployee.php" method="post" enctype="multipart/form-data">

		<center><h2 class="login">Add a new employee formula</h2></center>
		<center>
			<img id="uploadPreview" class="logo" src="img/devius.jpg"/><br>
			<input type="file" id="imglink" name="imglink" accept=".jpg,.jpeg,.png" onchange="PreviewImage();"/>
		</center>


		<label><b>Ime i prezime:</label><br>
		<input name="ImeIPrezime" type="text" class="inputval" placeholder="Unesi ime i prezime" data-rq/> <br>
		<label><b>Broj:</label><br>
		<input name="broj" type="text" class="inputval" placeholder="Unesi broj" data-rq/><br>
		<label><b>IUS broj:</label><br>
		<input name="IUSbroj" type="text" class="inputval" placeholder="Unesi IUS broj" data-rq/> <br>
		<label><b>Pol:</label><br>
		<input name="pol" type="radio" class="radio-button" value="musko" checked data-rq/>Musko
		<input name="pol" type="radio" class="radio-button" value="zensko" checked data-rq/>Žensko<br>
		<label><b>Ime oca:</label><br>
		<input name="imeOca" type="text" class="inputval" placeholder="Unesi Ime Oca" data-rq/> <br>
		<label><b>Ime majke:</label><br>
		<input name="imeMajke" type="text" class="inputval" placeholder="Unesi ime majke" data-rq/><br>
		<label><b>Datum Rođenja:</label><br>
		<input name="datumRodenja" type="text" class="inputval" placeholder="Unesi datum rodenja" data-rq/> <br>
		<label><b>Mjesto rođenja:</label><br>
		<input name="mjestoRodenja" type="text" class="inputval" placeholder="Unesi mjesto rodenja" data-rq/><br>
		<label><b>Starost:</label><br>
		<input name="starost" type="text" class="inputval" placeholder="Unesi starost" data-rq/> <br>
		<label><b>JMBG/JIB:</label><br>
		<input name="jmbg" type="text" class="inputval" placeholder="Unesi JMBG/JIB" data-rq/><br>

		<label><b>Državljanstvo:</label><br>
		<input name="drzavljanstvo" type="text" class="inputval" placeholder="Unesi drzavljanstvo" data-rq/> <br>
		<label><b>Bračni status:</label><br>
		<input name="bracniStatus" type="radio" class="radio-button" value="Ubraku" checked data-rq/>U braku
		<input name="bracniStatus" type="radio" class="radio-button" value="Nije" checked data-rq/>Nije<br>
		<label><b>Broj lične karte:</label><br>
		<input name="brojLicneKarte" type="text" class="inputval" placeholder="Unesi broj lične karte" data-rq/> <br>
		<label><b>Turski matični broj:</label><br>
		<input name="turskiBroj" type="text" class="inputval" placeholder="Unesi turski matični broj" data-rq/> <br>
		<label><b>Pasoš broj:</label><br>
		<input name="pasosBroj" type="text" class="inputval" placeholder="Unesi broj pasoša" data-rq/><br>
		<label><b>Datum isteka pasoša:</label><br>
		<input name="datumIstekaPasosa" type="text" class="inputval" placeholder="Unesi datum isteka pasoša" data-rq/> <br>
		<label><b>Adresa:</label><br>
		<input name="adresa" type="text" class="inputval" placeholder="Unesi adresu" data-rq/><br>
		<label><b>Opština:</label><br>
		<input name="opstina" type="text" class="inputval" placeholder="Unesi opštinu" data-rq/> <br>
		<label><b>Grad:</label><br>
		<input name="grad" type="text" class="inputval" placeholder="Unesi grad" data-rq/><br>

		<label><b>Poštanski broj:</label><br>
		<input name="postanskiBroj" type="text" class="inputval" placeholder="Unesi poštanski broj" data-rq/> <br>
		<label><b>Država:</label><br>
		<input name="drzava" type="text" class="inputval" placeholder="Unesi državu" data-rq/><br>
		<label><b>Broj Mobitela 1:</label><br>
		<input name="brojMobitela1" type="text" class="inputval" placeholder="Unesi broj mobitela" data-rq/> <br>
		<label><b>Broj Mobitela 2:</label><br>
		<input name="brojMobitela2" type="text" class="inputval" placeholder="Unesi broj mobitela" data-rq/> <br>
		<label><b>Broj magnetne kartice:</label><br>
		<input name="brojMagnetneKartice" type="text" class="inputval" placeholder="Unesi broj magnetne kartice" data-rq/> <br>
		<label><b>Email-ius:</label><br>
		<input name="emailIUS" type="text" class="inputval" placeholder="Unesi email" data-rq/><br>
		<label><b>Privatni email:</label><br>
		<input name="privatniEmail" type="text" class="inputval" placeholder="Unesi email" data-rq/> <br>
		<label><b>Školska sprema:</label><br>
		<input name="skolskaSprema" type="text" class="inputval" placeholder="Unesi školsku spremu" data-rq/> <br>
		<label><b>Skraceni naziv stručne spreme:</label><br>
		<select class="qualification" name="skracenaSprema">
			<option value="Doktor">Dr</option>
			<option value="Magistar">Mag</option>
			<option value="Tehnicar">Teh</option>
			<option value="Inzinjer">Inz</option>
		</select><br>
		<label><b>Problematično zvanje:</label><br>
		<input name="problemZvanje" type="text" class="inputval" placeholder="Unesi problematično zvanje" data-rq/><br>

		<label><b>Stručni ispit:</label><br>
		<input name="strucniIspit" type="text" class="inputval" placeholder="Unesi stručni ispit" data-rq/> <br>
		<label><b>Dodatno obrazovanje:</label><br>
		<input name="dodatnoObrazovanje" type="text" class="inputval" placeholder="Unesi dodatno obrazovanje" data-rq/> <br>
		<label><b>Certifikati i slično:</label><br>
		<input name="certifikati" type="text" class="inputval" placeholder="Unesi certifikate i sl." data-rq/> <br>
		<label><b>Trenutni status na IUS-u:</label><br>
		<input name="status" type="text" class="inputval" placeholder="Unesi status" data-rq/><br>
		<label><b>Dnevna satnica:</label><br>
		<input name="dnevnaSatnica" type="text" class="inputval" placeholder="Unesi satnicu" data-rq/> <br>
		<label><b>Ugovoreno sedmično vrijeme:</label><br>
		<input name="sedmicnoVrijeme" type="text" class="inputval" placeholder="Unesi sedmično vrijeme" data-rq/><br>
		<label><b>Radna pozicija(bh):</label><br>
		<input name="pozicijaBH" type="text" class="inputval" placeholder="Unesi poziciju" data-rq/> <br>
		<label><b>Radna pozicija(eng):</label><br>
		<input name="pozicijaENG" type="text" class="inputval" placeholder="Unesi poziciju" data-rq/> <br>

		<label><b>Dodatna zaduženja:</label><br>
		<input name="dodatnaZaduzenja" type="text" class="inputval" placeholder="Unesi dodatna zaduzenja" data-rq/> <br>
		<label><b>Odluka o imenovanju-broj:</label><br>
		<input name="odlukaOImenovanjuB" type="text" class="inputval" placeholder="Unesi broj" data-rq/> <br>
		<label><b>Odluka o imenovanju od:</label><br>
		<input name="odlukaOImenovanjuO" type="text" class="inputval" placeholder="Unesi datum" data-rq/> <br>
		<label><b>Odluka o imenovanju do:</label><br>
		<input name="odlukaOImenovanjuD" type="text" class="inputval" placeholder="Unesi datum" data-rq/> <br>
		<label><b>Fakultet(bh i eng):</label><br>
		<input name="fakultet" type="text" class="inputval" placeholder="Unesi fakultet" data-rq/> <br>
		<label><b>Odsjek:</label><br>
		<input name="odsjek" type="text" class="inputval" placeholder="Unesi odsjek" data-rq/><br>
		<label><b>Studijski program:</label><br>
		<input name="studijskiProgram" type="text" class="inputval" placeholder="Unesi studijsli program" data-rq/> <br>
		<label><b>Ekvivalencija po oblasti:</label><br>
		<input name="ekvivalencija" type="text" class="inputval" placeholder="Unesi evivalenciju po oblasti" data-rq/> <br>

		<label><b>Pocetak rada na IUS-u:</label><br>
		<input name="pocetakRada" type="text" class="inputval" placeholder="Unesi datum" data-rq/> <br>
		<label><b>Ukupno vrijeme provedeno na IUS-u:</label><br>
		<input name="vrijemeNaIUS" type="text" class="inputval" placeholder="Unesi vrijeme provedeno na IUS-u" data-rq/> <br>
		<label><b>Datum isteka ugovora:</label><br>
		<input name="datumIstekaUg" type="text" class="inputval" placeholder="Unesi datum" data-rq/> <br>
		<label><b>Tip ugovora o radu:</label><br>
		<input name="ugovorORadu" type="radio" class="radio-button" value="odredeno" checked data-rq/>Određeno
		<input name="ugovorORadu" type="radio" class="radio-button" value="neodredeno" checked data-rq/>Neodređeno<br>
		<label><b>Vrijeme trajanja probnog rada:</label><br>
		<input name="trajanjeProbnog" type="text" class="inputval" placeholder="Unesi vrijeme" data-rq/> <br>
		<label><b>Broj zaključenog ugovora o radu sa pripravnikom:</label><br>
		<input name="brojZakljucenogUgovoraORaduSaPripravnikom" type="text" class="inputval" placeholder="Unesi broj zaključenog ugovora o radu sa pripravnikom" data-rq/> <br>
		<label><b>Datum zaključenog ugovora o radu sa pripravnikom:</label><br>
		<input name="datumZakljucenogUgovoraORaduSaPripravnikom" type="text" class="inputval" placeholder="Unesi datum zaključenog ugovora o radu sa pripravnikom" data-rq/> <br>

		<label><b>Trajanje pripravničkog staža:</label><br>
		<input name="trajanjePripravnickogStaza" type="text" class="inputval" placeholder="Unesi trajanje pripravničkog staža" data-rq/> <br>
		<label><b>Vrijeme i rezultat polaganja stručnog ispita, ako je isti predviđen i objavljen:</label><br>
		<input name="vrijemeIRezultatPolaganjaStrucnogIspitaAkoJeIstiPredvidenIObjavl" type="text" class="inputval" placeholder="Unesi vrijeme i rezultat polaganja stručnog ispita, ako je isti predviđen i objavljen" data-rq/> <br>
		<label><b>Trajanje rada u inostranstvu:</label><br>
		<input name="trajanjeRadaUInostranstvu" type="text" class="inputval" placeholder="Unesi trajanje rada u inostranstvu" data-rq/> <br>
		<label><b>Trajanje radnog vremena:</label><br>
		<input name="trajanjeRadnogVremena" type="radio" class="radio-button" value="odredeno" checked data-rq/>Određeno
		<input name="trajanjeRadnogVremena" type="radio" class="radio-button" value="neodredeno" checked data-rq/>Neodređeno<br>

		<label><b>Dozvola za boravak i rad ili potvrda o prijavi rada:</label><br>
		<input name="dozvolaZaBoravak" type="text" class="inputval" placeholder="Unesi dozvolu ili prijavu" data-rq/> <br>
		<label><b>Broj prvog ugovora koji se vezuje za imenovanje:</label><br>
		<input name="brojUgovoraZaImenovanje" type="text" class="inputval" placeholder="Unesi broj ugovora" data-rq/> <br>
		<label><b>Datum potpisivanja ugovora koji se vezuje za prvo imenovanje:</label><br>
		<input name="datumUgovoraZaPrvoImenovanje" type="text" class="inputval" placeholder="Unesi datum" data-rq/> <br>
		<label><b>Broj posljednjeg zaključenog ugovora o radu:</label><br>
		<input name="brojPosljednjegUgovoraORadu" type="text" class="inputval" placeholder="Unesi broj" data-rq/> <br>
		<label><b>Datum zaključenog ugovora o radu:</label><br>
		<input name="datumZakljucenogUgovoraORadu" type="text" class="inputval" placeholder="Unesi datum" data-rq/> <br>
		<label><b>Datup posljednje promjene putem JS3100:</label><br>
		<input name="datumPosljednjePromjene" type="text" class="inputval" placeholder="Unesi datum" data-rq/><br>
		<label><b>Država i mjesto rada u inostranstvu u slučaju upućivanja radnika u inostranstvo:</label><br>
		<input name="upucivanjeRadnikaUInostranstvo" type="text" class="inputval" placeholder="Unesi državu i mjesto" data-rq/> <br>
		<label><b>Radi li se o poslovima na kojima se staž osiguranja računa s uvečanim trajanjem:</label><br>
		<input name="sUvecanimTrajanjem" type="text" class="inputval" placeholder="Unesi posao" data-rq/> <br>
		<label><b>Radi li se o poslovima na kojima radnik može raditi samo nakon prethodnog i redovnog utvrđivanja Radne sposobnosti za njihovo obavljanje:</label><br>
		<input name="radnaSposobnost" type="text" class="inputval" placeholder="Unesi da li se radi o poslovima na kojima radnik može raditi samo nakon prethodnog i redovnog utvrđivanja Radne sposobnosti za njihovo obavljanje" data-rq/> <br>

		<label><b>Mjesto rada:</label><br>
		<input name="mjestoRada" type="text" class="inputval" placeholder="Unesi mjesto rada" data-rq/> <br>
		<label><b>Prethodni radni staž:</label><br>
		<input name="prethodniRadniStaz" type="text" class="inputval" placeholder="Unesi prethodni radni staž" data-rq/> <br>
		<label><b>Prethodni penzioni staž:</label><br>
		<input name="prethodniPStaz" type="text" class="inputval" placeholder="Unesi prethodni penzioni staž" data-rq/> <br>
		<label><b>Neplaceno/porodiljsko/placeno OD:</label><br>
		<input name="porodiljskoOD" type="text" class="inputval" placeholder="Unesi datum" data-rq/> <br>
		<label><b>Neplaceno/porodiljsko/placeno DO:</label><br>
		<input name="porodiljskoDO" type="text" class="inputval" placeholder="Unesi datum" data-rq/> <br>
		<label><b>Dan prestanka radnog odnosa:</label><br>
		<input name="danPrestankaRadnogOdnosa" type="text" class="inputval" placeholder="Unesi datum" data-rq/><br>
		<label><b>Razlozi prestanka radnog odnosa:</label><br>
		<input name="razloziPrestankaRadnogOdnosa" type="text" class="inputval" placeholder="Unesi razloge" data-rq/> <br>
		<label><b>Puni naziv is sudskog rješenja:</label><br>
		<input name="nazivIzSudskogRjesenja" type="text" class="inputval" placeholder="Unesi naziv" data-rq/> <br>

		<label><b>ID broj poslje odjave-poslovna jedinica:</label><br>
		<input name="poslovnaJedinica" type="text" class="inputval" placeholder="Unesi ID" data-rq/> <br>
		<label><b>Naziv banke:</label><br>
		<input name="nazivBnake" type="text" class="inputval" placeholder="Unesi ime" data-rq/> <br>
		<label><b>Ulica banke:</label><br>
		<input name="ulicaBanke" type="text" class="inputval" placeholder="Unesi ulicu" data-rq/><br>
		<label><b>Grad Banke:</label><br>
		<input name="grad2" type="text" class="inputval" placeholder="Unesi grad" data-rq/> <br>
		<label><b>Broj bankovnog računa od januara 2017:</label><br>
		<input name="brojBnakovnogRacuna" type="text" class="inputval" placeholder="Unesi broj bankovnog računa" data-rq/> <br>

		<input name="submit_emp" type="submit" id="signup-button" value="Submit employee"><br>
		<a href="homepage.php"><input type="button" id="back-button" value="Back"></a>
		
	</form>

	<?php

	if(isset($_POST['submit_emp'])){
		//////////////////////////////////////////////////
		$img_name = $_FILES['imglink']['name'];
				$img_size =$_FILES['imglink']['size'];
			    $img_tmp =$_FILES['imglink']['tmp_name'];
				
				$directory = 'uploads/';
				$target_file = $directory.$img_name;
				//////////////////////////////////////////////7
		$emp = array($_POST['ImeIPrezime'],$_POST['broj'], $_POST['IUSbroj'], $_POST['pol'],$_POST['imeOca'],$_POST['imeMajke'],$_POST['datumRodenja']
			,$_POST['mjestoRodenja'],$_POST['starost'],$_POST['jmbg'],$_POST['drzavljanstvo'],$_POST['bracniStatus'],$_POST['brojLicneKarte'],$_POST['turskiBroj'],$_POST['pasosBroj'],$_POST['datumIstekaPasosa'],$_POST['adresa'],$_POST['opstina'],$_POST['grad'],$_POST['postanskiBroj'],$_POST['drzava'],$_POST['brojMobitela1'],$_POST['brojMobitela2'],$_POST['brojMagnetneKartice'],$_POST['emailIUS'],$_POST['privatniEmail'],$_POST['skolskaSprema'],$_POST['skracenaSprema'],$_POST['problemZvanje'],$_POST['strucniIspit'],$_POST['dodatnoObrazovanje'],$_POST['certifikati'],$_POST['status'],$_POST['dnevnaSatnica'],$_POST['sedmicnoVrijeme'],$_POST['pozicijaBH'],$_POST['pozicijaENG'],$_POST['dodatnaZaduzenja'],$_POST['odlukaOImenovanjuB'],$_POST['odlukaOImenovanjuO'],$_POST['odlukaOImenovanjuD'],$_POST['fakultet'],$_POST['odsjek'],$_POST['studijskiProgram'],$_POST['ekvivalencija'],$_POST['pocetakRada'],$_POST['vrijemeNaIUS'],$_POST['datumIstekaUg'],$_POST['ugovorORadu'],$_POST['trajanjeProbnog'],$_POST['brojZakljucenogUgovoraORaduSaPripravnikom'],$_POST['datumZakljucenogUgovoraORaduSaPripravnikom'],$_POST['trajanjePripravnickogStaza'],$_POST['vrijemeIRezultatPolaganjaStrucnogIspitaAkoJeIstiPredvidenIObjavl'],$_POST['trajanjeRadaUInostranstvu'],$_POST['trajanjeRadnogVremena'],$_POST['dozvolaZaBoravak'],$_POST['brojUgovoraZaImenovanje'],$_POST['datumUgovoraZaPrvoImenovanje'],$_POST['brojPosljednjegUgovoraORadu'],$_POST['datumZakljucenogUgovoraORadu'],$_POST['datumPosljednjePromjene'],$_POST['upucivanjeRadnikaUInostranstvo'],$_POST['sUvecanimTrajanjem'],$_POST['radnaSposobnost'],$_POST['mjestoRada'],$_POST['prethodniRadniStaz'],$_POST['prethodniPStaz'],$_POST['porodiljskoOD'],$_POST['porodiljskoDO'],$_POST['danPrestankaRadnogOdnosa'],$_POST['razloziPrestankaRadnogOdnosa'],$_POST['nazivIzSudskogRjesenja'],$_POST['poslovnaJedinica'],$_POST['nazivBnake'],$_POST['ulicaBanke'],$_POST['grad2'],$_POST['brojBnakovnogRacuna'],$target_file);
		
		////////////////
		$r=mysqli_query($con,"select * from employee");
		$strq="";
		$strq2="";
		for($i=1;$i<count($emp)+1;$i++){
			$p = mysqli_fetch_field_direct($r, $i);
			$strq.=$p->name.",";
			$strq2.="'".$emp[$i-1]."',";
		}
		$strq=substr($strq,0,strlen($strq)-1);
		$strq2=substr($strq2,0,strlen($strq2)-1);
		///////////////
		if($_POST['ImeIPrezime']==""){
				echo '<script type="text/javascript"> alert("Fill the template") </script> ';
			}else if($img_size>2097152)
					{
						echo '<script type="text/javascript"> alert("Image file size larger than 2 MB.. Try another image file") </script>';
					}else if(file_exists($target_file)&&$target_file!="uploads/")
					{
						echo '<script type="text/javascript"> alert("Image file already exists.. Try another image file") </script>';
					}else{
				move_uploaded_file($img_tmp,$target_file); 	
				$query= "insert into employee(".$strq.") values (".$strq2.")";
				$query_run = mysqli_query($con,$query);
			
		}
	}

	?>
	</div>

</body>
</html>