<?php
$check1_1 = $_POST['checkbox1'];	//checkbox Seite 1 Nr 1 usw
$check1_2 = $_POST['checkbox2'];
$check1_3 = $_POST['checkbox3'];

//echo $check1;
//echo $check2;
//echo $check3;

//$sql = "insert into users(nachname, email, vorname) values ('$check1', '$check2', '$check3')";
//$result = mysqli_query($link,$sql) or die("Anfrage fehlgeschlagen: " . mysqli_error($link));



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
        <h5 class="modal-title" id="exampleModalLongTitle" style="font-weight: 600;">Disclaimer</h5>
      </div>
      <div class="modal-body">
         Gaudeamus igitur, iuvenes dum sumus; post iucundam iuventutem, post molestam senectutem nos habebit humus.

Ubi sunt, qui ante nos in mundo fuere? Vadite ad superos, vadite ad inferos ubi iam fuere.

Vita nostra brevis est, brevi finietur. Venit mors velociter, rapit nos atrociter, nemini parcetur.

Vivat academia, vivant professores! Vivat membrum quodlibet, vivant membra quaeliber, semper sint in flore!

Vivant omnes virgines, faciles formosae, vivant et mulieres, tenerae, amabiles, bonae, speciosae

Vivat et respublica et qui illam regit, vivat nostra civitas Maecenatum caritas, quae nos hic protegit

Pereat tristitia, pereant osores, pareat diabolus, quivis anti burschius atque irrisores.


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
	            <div class="h1" style="margin-bottom: 15px;">Social Media Umfrage 2020</div>
	            <div class="progress" style="margin: 0px auto;width: 50%;">
                    <div class="progress-bar" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="frage">
                    <div class="h2" style="margin-top: 54px;margin-bottom:32px">Wohin f&uuml;hrt der Weg?</div>
                    <form method="post" action="index_3.php">
                        <div class="form-check" style="text-align:center;">         
							<input name="checkbox1" value="no" type="hidden"> 	<!--Wird genutzt damit die Checkboxen auch "null" sein können -->
                            <input type="checkbox" name="checkbox1" class="form-check-input" id="checkbox1" value="yes" />
                            <label class="form-check-label" for="exampleCheck1" style="margin-bottom: 4px;">Ich fliege</label><br />
							<input name="checkbox2" value="no" type="hidden"> 
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="checkbox2" />
                            <label class="form-check-label" for="exampleCheck1" style="margin-bottom: 4px;">Bowsers Festung</label><br />
							<input name="checkbox3" value="no" type="hidden"> 
                            <input type="checkbox" class="form-check-input" id="exampleCheck2" name="checkbox3"/>
                            <label class="form-check-label" for="exampleCheck2" style="margin-bottom: 4px;">In die Minen von Moria</label><br />
							<input name="check1_1" value= <?=$check1_1?> type="hidden"> 
							<input name="check1_2" value= <?=$check1_2?> type="hidden"> 
							<input name="check1_3" value= <?=$check1_3?> type="hidden"> 
                        </div>
                        <div class="center" style="margin-top: 30px;">
                        <a href="index.php"><button type="button" class="btn btn-outline-secondary" style="margin-right: 12px;" >Zur&uuml;ck</button></a>
                        <button type="submit" class="btn btn-outline-primary" >Weiter</button>
                        </div>
                    </form>
                </div>
                <div class="footer">
                <a data-toggle="modal" href="#modal32">Disclaimer</a>
                </div>
           </div>
       </div>
       
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



    </body>
    
</html>