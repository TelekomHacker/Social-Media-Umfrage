<?php
$check1 = $_POST['checkbox1'];
$check2 = $_POST['checkbox2'];
$check3 = $_POST['checkbox3'];
$check4 = $_POST['checkbox4'];
$check5 = $_POST['checkbox5'];
$check6 = $_POST['checkbox6'];

$ip = $_SERVER['REMOTE_ADDR'];
$link = mysqli_connect (
                    'smu2020.ddns.net',
                     'phppage',
					 'R2*jz24oNU@.y8',
					 'umfrage'
                   );

$sql = "insert into socialmediaapps(s_ip, Instagram, Youtube, Twitter, Facebook, Tiktok, Pinterest) values ('$ip', '$check1', '$check2','$check3', '$check4', '$check5', '$check6')";
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
                    <div class="progress-bar" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="frage">
                    <div class="h2" style="">Welche dieser Messenger Dienste nutzt du? (Mehrfachnennung möglich)</div>
                    <form method="post" action="index_7.php">
                        <div class="form-check" style="">         
                            <input name="checkbox1" value="0" type="hidden" /> 	<!--Wird genutzt damit die Checkboxen auch "null" sein können -->
                            <input name="checkbox2" value="0" type="hidden" />
							<input name="checkbox3" value="0" type="hidden" />
							<input name="checkbox4" value="0" type="hidden" />
							<input name="checkbox5" value="0" type="hidden" />
                            
                            <!-- 1 -->
                            <input type="checkbox" name="checkbox1" class="form-check-input" id="checkbox1" value="1" />
                            <label class="form-check-label" for="Messenger1" style="margin-bottom: 4px;">WhatsApp</label><br />
							<!-- 2 -->
                            <input type="checkbox" class="form-check-input" id="checkbox2" name="checkbox2" value="1" />
                            <label class="form-check-label" for="Messenger2" style="margin-bottom: 4px;">Snapchat</label><br />
							<!-- 3 -->
                            <input type="checkbox" class="form-check-input" id="checkbox3" name="checkbox3" value="1"/>
                            <label class="form-check-label" for="Messenger3" style="margin-bottom: 4px;">Telegram</label><br />
							<!-- 4 -->
                            <input type="checkbox" name="checkbox4" class="form-check-input" id="checkbox4" value="1" />
                            <label class="form-check-label" for="Messenger4" style="margin-bottom: 4px;">Threema</label><br />
							<!-- 5 -->
                            <input type="checkbox" class="form-check-input" id="checkbox5" name="checkbox5" value="1" />
                            <label class="form-check-label" for="Messenger5" style="margin-bottom: 4px;">FB Messenger</label><br />
                        </div>
                        <div class="center" style="">
                        <a href="index_5.php"><button type="button" class="btn btn-outline-secondary" style="" >Zur&uuml;ck</button></a>
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
