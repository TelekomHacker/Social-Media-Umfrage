<?php
$back = $_GET['back'];
$backid = $_GET['backid'];

if ($back == '2'){
    $ip = $backid;
}
else {
    $ip = $_POST['id'];
}

$check1 = $_POST['Lieblingsfach'];

$link = mysqli_connect (
                     'localhost',
                     'php',
					 'Teto12345ä1!#',
					 'umfrage'
                   );

$sql = "UPDATE fragen SET index4='$check1' WHERE F_ID='$ip'";
$result = mysqli_query($link,$sql) or die("Anfrage fehlgeschlagen: " . mysqli_error($link));
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
                    <div class="progress-bar" role="progressbar" style="width: 14.286%" aria-valuenow="22.21" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="frage">
                    <div class="h2" style="">Welche dieser Social Media App's verwendest du? (Mehrfachnennung möglich)</div>
                    <form method="post" action="index_6.php">
                        <div class="form-check" style="">         
                            <input name="checkbox1" value="0" type="hidden" /> 	<!--Wird genutzt damit die Checkboxen auch "null" sein können -->
                            <input name="checkbox2" value="0" type="hidden" />
                            <input name="checkbox3" value="0" type="hidden" />
							<input name="checkbox4" value="0" type="hidden" />
							<input name="checkbox5" value="0" type="hidden" />
							<input name="checkbox6" value="0" type="hidden" />
							<input name="checkbox7" value="0" type="hidden" />
							<input type="hidden" name="id" value= "<?=$ip ?>">
                            
                            <!-- 1 -->
                            <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="checkbox1" class="custom-control-input" id="customCheck1" value="1" />
                            <label class="custom-control-label" for="customCheck1" style="">Instagram</label><br />
                            </div>
							<!-- 2 -->
							<div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck2" name="checkbox2" value="1" />
                            <label class="custom-control-label" for="customCheck2" style="">YouTube</label><br />
                            </div>
							<!-- 3 -->
							<div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck3" name="checkbox3" value="1"/>
                            <label class="custom-control-label" for="customCheck3" style="">Twitter</label><br />
                            </div>
							<!-- 4 -->
							<div class="custom-control custom-checkbox">
                            <input type="checkbox" name="checkbox4" class="custom-control-input" id="customCheck4" value="1" />
                            <label class="custom-control-label" for="customCheck4" style="">Facebook</label><br />
                            </div>
							<!-- 5 -->
							<div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck5" name="checkbox5" value="1" />
                            <label class="custom-control-label" for="customCheck5" style="">TikTok</label><br />
                            </div>
							<!-- 6 -->
							<div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck6" name="checkbox6" value="1"/>
                            <label class="custom-control-label" for="customCheck6" style="">Pinterest</label><br />
                            </div>
							<!-- 7 -->
							<div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck7" name="checkbox7" value="1"/>
                            <label class="custom-control-label" for="customCheck7" style="">Sonstiges</label><br />
                            </div>
                        </div>
                        <div class="center" style="">
                        <a href="index_4.php?back=2&backid=<?php echo $ip; ?>"><button type="button" class="btn btn-outline-secondary" style="" >Zur&uuml;ck</button></a>
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