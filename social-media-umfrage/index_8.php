<?php
$Whatsapp = $_POST['Whatsapp'];
$Snapchat = $_POST['Snapchat'];
$Telegram = $_POST['Telegram'];
$Threema = $_POST['Threema'];
$Fbmessenger = $_POST['Fbmessenger'];


$ip = $_SERVER['REMOTE_ADDR'];
$db_link = mysqli_connect (
                    'smu2020.ddns.net',
                     'phppage',
					 'R2*jz24oNU@.y8',
					 'umfrage'
                   );
$link = mysqli_connect (
                    '127.0.0.1',
                     'root',
					 '',
					 'umfrage'
                   );

$sql = "INSERT INTO nutzungsdauer (n_ip, WhatsApp, Snapchat, Telegram, Threema, FB_Messenger) VALUES ('$ip', '$Whatsapp', '$Snapchat', '$Telegram', '$Threema', '$Fbmessenger')";
$result = mysqli_query($link,$sql) or die("Anfrage fehlgeschlagen: " . mysqli_error($link));

$social = "SELECT * FROM socialmediaapps Where s_ip='$ip'";
$erg = mysqli_query($link,$social) or die("Anfrage fehlgeschlagen: " . mysqli_error($link));

while ($row = mysqli_fetch_array($erg)) 
{
if($row['Instagram'] == '1')
	$Instagram='"number"';
	else $Instagram = '"hidden"';
if($row['Youtube'] == '1')
	$Youtube='"number"';
	else $Youtube = '"hidden"';
if($row['Twitter'] == '1')
	$Twitter='"number"';
	else $Twitter = '"hidden"';
if($row['Facebook'] == '1')
	$Facebook='"number"';
	else $Facebook = '"hidden"';
if($row['Tiktok'] == '1')
	$Tiktok='"number"';
	else $Tiktok = '"hidden"';
if($row['Pinterest'] == '1')
	$Pinterest='"number"';
	else $Pinterest = '"hidden"';
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
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style="">Disclaimer</h5>
      </div>
      <div class="modal-body">
         Gaudeamus igitur, iuvenes dum sumus; post iucundam iuventutem, post molestam senectutem nos habebit humus.

Ubi sunt, qui ante nos in mundo fuere? Vadite ad superos, vadite ad inferos ubi iam fuere.

Vita nostra brevis est, brevi finietur. Venit mors velociter, rapit nos atrociter, nemini parcetur.

Vivat academia, vivant professores! Vivat membrum quodlibet, vivant membra quaeliber, semper sint in flore!

Freuen wir uns also, solange wir jung sind! Nach einer lustigen Jugend, nach einem m&uuml;hsamen Alter wird uns die Erde haben.

Wo sind die, die vor uns auf der Welt waren? Geht in die obere Welt, geht in die untere Welt, wo sie schon gewesen sind.
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
                    <div class="progress-bar" role="progressbar" style="width: 41%" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="frage">
                    <div class="h2" style="">Was ist deine geschätzte durchschnittliche tägliche Nutzungsdauer bei Social Media Apps? (in min)</div>
                    <form method="post" action="index_9.php">
                        <div class="form-check" style="">         
							<input name="Instagram" value="0" type="hidden" />
							<input name="Youtube" value="0" type="hidden" />
                            <input name="Twitter" value="0" type="hidden" />
							<input name="Facebook" value="0" type="hidden" />
							<input name="Tiktok" value="0" type="hidden" />
							<input name="Pinterest" value="0" type="hidden" />

							<input type=<?= $Instagram ?> name="Instagram" class="form-control" id="t1" placeholder="Instagram">
							<br>
							<input type=<?= $Youtube ?> name="Youtube" class="form-control" id="t1" placeholder="Youtube">
							<br>
							<input type=<?= $Twitter ?> name="Twitter" class="form-control" id="t1" placeholder="Twitter">
							<br>
							<input type=<?= $Facebook ?> name="Facebook" class="form-control" id="t1" placeholder="Facebook">
							<br>
							<input type=<?= $Tiktok ?> name="Tiktok" class="form-control" id="t1" placeholder="Tiktok">
							<br>
							<input type=<?= $Pinterest ?> name="Pinterest" class="form-control" id="t1" placeholder="Pinterest">
                        </div>
                        <div class="center" style="">
                        <a href="index_7.php"><button type="button" class="btn btn-outline-secondary" style="" >Zur&uuml;ck</button></a>
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

<div class="alerto" role="alert" style="">
<?php

?>
</div>

    </body>
    
</html>
