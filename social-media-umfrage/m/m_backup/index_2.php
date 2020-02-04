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
        <h5 class="modal-title" id="exampleModalLongTitle" style="font-weight: 600;">Disclaimer</h5>
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
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Schlie&szlig;en</button>
      </div>
    </div>
  </div>
</div>
	
	   <div class="wrapper">
	       <div class="header">
	            <div class="h1" style="">Social Media Umfrage 2020</div>
	            <div class="progress" style="">
                    <div class="progress-bar" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="frage">
                    <div class="h2" style="">Wohin f&uuml;hrt der Weg?</div>
                    <form method="post" action="index_2.php">
                        <div class="form-check" style="">         
                            <input type="checkbox" name="checkbox1" class="form-check-input" id="exampleCheck1" />
                            <label class="form-check-label" for="exampleCheck1" style="">Bowsers Festung</label><br />
                            <input type="checkbox" name="checkbox2" class="form-check-input" id="exampleCheck2" style="" />
                            <label class="form-check-label" for="exampleCheck2" style="">In die Minen von Moria</label><br />
                            <input type="checkbox" name="checkbox3" class="form-check-input" id="exampleCheck3" />
                            <label class="form-check-label" for="exampleCheck3" style="">Nach Hause</label>
                        </div>
                        <div class="center" style="">
                        <a href="index.php"><button type="button" class="btn btn-outline-secondary" style="" >Zur&uuml;ck</button></a>
                        <button type="submit" class="btn btn-outline-primary" style="">Weiter</button>
                        </div>
                    </form>
            </div>
            <div class="footer">
                <a data-toggle="modal" href="#modal32">Disclaimer</a>
            </div>
       </div>
       
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<div class="alerto" role="alert" style="">
<?php
//$db_link = mysqli_connect (
//                     '127.0.0.1',
//                     'root',
//                     '',
//                     'adressbuch_sql'
//                    );
$check1 = $_POST['checkbox1'];
$check2 = $_POST['checkbox2'];
$check3 = $_POST['checkbox3'];

//echo $check1;
//echo $check2;
//echo $check3;
?>
</div>

    </body>
    
</html>