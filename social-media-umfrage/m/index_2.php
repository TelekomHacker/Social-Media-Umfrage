<?php
$back = $_GET['back'];
$backid = $_GET['backid'];  

$link = mysqli_connect (
                     'localhost',
                     'php',
					 'Teto12345ä1!#',
					 'umfrage'
                   );

if ($back == '2'){
    $fid = $backid;    
}
else{
$ip = $_POST['id'];
 
$prim = "SELECT F_ID from fragen Where id='$ip'";
$erg = mysqli_query($link,$prim) or die("Anfrage fehlgeschlagen: " . mysqli_error($link));

while($row = mysqli_fetch_assoc($erg))
{
	$fid = $row['F_ID'];
}    
}

$check1 = $_POST['radiobox'];


if($check1){
$sql = "UPDATE fragen set index1='$check1' Where F_ID = '$fid'";
$result = mysqli_query($link,$sql) or die("Anfrage fehlgeschlagen: " . mysqli_error($link));	
}
?>

<!DOCTYPE html>
<html lang="de">

	<head>
		<meta charset="UTF-8">
		<title>Social Media Umfrage</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
		<link rel="stylesheet" href="style.css" />
	</head>
	
	<body>

<!-- Modal 3!!2 -->
<div class="modal fade" id="modal32" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style="">Disclaimer</h5>
      </div>
      <div class="modal-body">
         <b style="font-weight: 600">Grundlegendes</b>

<br />Diese Datenschutzerklärung soll die Nutzer dieser Website über die Art, den Umfang und den Zweck der Erhebung und Verwendung personenbezogener Daten durch den Websitebetreiber [Informatik Lk Schülergruppe des Gymnasiums Stift Keppel] informieren.
<br />Der Websitebetreiber nimmt Ihren Datenschutz sehr ernst und behandelt Ihre personenbezogenen Daten vertraulich und entsprechend der gesetzlichen Vorschriften. Da durch neue Technologien und die ständige Weiterentwicklung dieser Webseite Änderungen an dieser Datenschutzerklärung vorgenommen werden können, empfehlen wir Ihnen sich die Datenschutzerklärung in regelmäßigen Abständen wieder durchzulesen.
<br />Definitionen der verwendeten Begriffe (z.B. “personenbezogene Daten” oder “Verarbeitung”) finden Sie in Art. 4 DSGVO.
<br /><br />
<b style="font-weight: 600">Zugriffsdaten</b>
<br />
Wir, der Websitebetreiber bzw. Seitenprovider, erheben aufgrund unseres berechtigten Interesses (s. Art. 6 Abs. 1 lit. f. DSGVO) Daten über Zugriffe auf die Website und speichern diese als “Server-Logfiles” auf dem Server der Website ab. Folgende Daten werden so protokolliert:
<ol><li>Besuchte Website
    <li>Verwendeter Browser
    <li>Verwendetes Betriebssystem
    <li>Verwendete IP-Adresse</ol>
<br />Die Server-Logfiles werden für maximal 7 Tage gespeichert und anschließend gelöscht. Die Speicherung der Daten erfolgt aus Sicherheitsgründen, um z. B. Missbrauchsfälle aufklären zu können. Müssen Daten aus Beweisgründen aufgehoben werden, sind sie solange von der Löschung ausgenommen bis der Vorfall endgültig geklärt ist.
<br /><br />
<b style="font-weight: 600">Erfassung und Verarbeitung personenbezogener Daten</b>
<br />Der Websitebetreiber erhebt, nutzt und gibt Ihre personenbezogenen Daten nur dann weiter, wenn dies im gesetzlichen Rahmen erlaubt ist oder Sie in die Datenerhebung einwilligen.
<br />Als personenbezogene Daten gelten sämtliche Informationen, welche dazu dienen, Ihre Person zu bestimmen und welche zu Ihnen zurückverfolgt werden können – also beispielsweise Ihr Name, Ihre E-Mail-Adresse und Telefonnummer.
<br />Diese Website können Sie auch besuchen, ohne Angaben zu Ihrer Person zu machen. Zur Verbesserung unseres Online-Angebotes speichern wir jedoch (ohne Personenbezug) Ihre Zugriffsdaten auf diese Website. Zu diesen Zugriffsdaten gehören z. B. die von Ihnen angeforderte Datei oder der Name Ihres Internet-Providers. Durch die Anonymisierung der Daten sind Rückschlüsse auf Ihre Person nicht möglich.
<br />Diese Daten werden erhoben und gespeichert bei der beantwortung und Teilnahme an unserer Umfrage.

<br /><br />
<b style="font-weight: 600">Rechte des Nutzers</b>

<br />Sie haben als Nutzer das Recht, auf Antrag eine kostenlose Auskunft darüber zu erhalten, welche personenbezogenen Daten über Sie gespeichert wurden. Sie haben außerdem das Recht auf Berichtigung falscher Daten und auf die Verarbeitungseinschränkung oder Löschung Ihrer personenbezogenen Daten. Falls zutreffend, können Sie auch Ihr Recht auf Datenportabilität geltend machen. Sollten Sie annehmen, dass Ihre Daten unrechtmäßig verarbeitet wurden, können Sie eine Beschwerde bei der zuständigen Aufsichtsbehörde einreichen.
<br />Löschung von Daten
<br />Sofern Ihr Wunsch nicht mit einer gesetzlichen Pflicht zur Aufbewahrung von Daten (z. B. Vorratsdatenspeicherung) kollidiert, haben Sie ein Anrecht auf Löschung Ihrer Daten. Von uns gespeicherte Daten werden, sollten sie für ihre Zweckbestimmung nicht mehr vonnöten sein und es keine gesetzlichen Aufbewahrungsfristen geben, gelöscht. Falls eine Löschung nicht durchgeführt werden kann, da die Daten für zulässige gesetzliche Zwecke erforderlich sind, erfolgt eine Einschränkung der Datenverarbeitung. In diesem Fall werden die Daten gesperrt und nicht für andere Zwecke verarbeitet.
<br />Widerspruchsrecht
<br />Nutzer dieser Webseite können von ihrem Widerspruchsrecht Gebrauch machen und der Verarbeitung ihrer personenbezogenen Daten zu jeder Zeit widersprechen.
<br />Wenn Sie eine Berichtigung, Sperrung, Löschung oder Auskunft über die zu Ihrer Person gespeicherten personenbezogenen Daten wünschen oder Fragen bzgl. der Erhebung, Verarbeitung oder Verwendung Ihrer personenbezogenen Daten haben oder erteilte Einwilligungen widerrufen möchten, wenden Sie sich bitte an folgende E-Mail-Adresse: <a href="mailto:muster@stiftkeppel.de"><font color="#007BFF">[muster@stiftkeppel.de]</font></a>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal" style="margin-right:0px;">Schlie&szlig;en</button>
      </div>
    </div>
  </div>
</div>
	
	   <div class="wrapper">
	       <div class="header">
	            <div class="h1" style="">Social Media Umfrage 2020</div>
	            <div class="progress" style="">
                    <div class="progress-bar" role="progressbar" style="width: 3.571%" aria-valuenow="5.55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="frage">
                    <div class="h2" style="">Welchem  biologischen Geschlecht fühlst du dich zugehörig?</div>
                    <form method="post" action="index_3.php">
                        <div class="form-check" style="">         
                            <input name="checkbox1" value="no" type="hidden" /> 	<!--Wird genutzt damit die Checkboxen auch "null" sein können -->
                            <input name="checkbox2" value="no" type="hidden" />
                            <input name="checkbox3" value="no" type="hidden" />
                            <input name="checkbox4" value="no" type="hidden" />
							<input type="hidden" name="id" value= "<?=$fid ?>">
				
                            <!-- 1 -->
                            <div class="custom-control custom-radio">
                            <input type="radio" name="radiobox" class="custom-control-input" id="customRadio1" value="männlich" />
                            <label class="custom-control-label" for="customRadio1" style="">Männlich</label><br />
                            </div>
							<!-- 2 -->
							<div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="customRadio2" name="radiobox" value="weiblich" />
                            <label class="custom-control-label" for="customRadio2" style="">Weiblich</label><br />
                            </div>
							<!-- 3 -->
							<div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="customRadio3" name="radiobox" value="divers"/>
                            <label class="custom-control-label" for="customRadio3" style="">Divers</label><br />
                            </div>
							<!-- 3 -->
							<div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="customRadio4" name="radiobox" value="keine Angabe"/>
                            <label class="custom-control-label" for="customRadio4" style="">Keine Angabe</label><br />
                            </div>
                        </div>
                        <div class="center" style="">
                        <a href="index.php?back=2&backid=<?php echo $ip; ?>"><button type="button" class="btn btn-outline-secondary" style="" >Zur&uuml;ck</button></a>
                        <button type="submit" class="btn btn-outline-primary" >Weiter</button>
                        </div>
                    </form>
                </div>
                <div class="footer">
                <a data-toggle="modal" href="#modal32">Disclaimer</a>
                </div>
           </div>
       </div>
       
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </body>
    
</html>