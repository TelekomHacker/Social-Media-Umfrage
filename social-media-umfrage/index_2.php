<!DOCTYPE html>
<html lang="de">

	<head>
		<meta charset="UTF-8">
		<title>Social Media Umfrage</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
		<link rel="stylesheet" href="style.css" />
	</head>
	
	<body>

<!-- Modal 2 disclaimer -->
<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabe2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2" style="font-weight: 600;">Disclaimer</h5>
      </div>
      <div class="modal-body">
         Gaudeamus igitur, iuvenes dum sumus; post iucundam iuventutem, post molestam senectutem nos habebit humus.

Ubi sunt, qui ante nos in mundo fuere? Vadite ad superos, vadite ad inferos ubi iam fuere.

Vita nostra brevis est, brevi finietur. Venit mors velociter, rapit nos atrociter, nemini parcetur.

Vivat academia, vivant professores! Vivat membrum quodlibet, vivant membra quaeliber, semper sint in flore!

Vivant omnes virgines, faciles formosae, vivant et mulieres, tenerae, amabiles, bonae, speciosae
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Schlie&szlig;en</button>
      </div>
    </div>
  </div>
</div>
	
	   <div class="wrapper">
	       <div class="header">
	            <div class="h1">Social Media Umfrage 2020</div>
                <div class="frage">
                    <div class="h2" style="margin-top: 65px;margin-bottom:32px">Wohin f&uuml;hrt der Weg?</div>
                    <form>
                        <div class="form-check" style="text-align:center;">         
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                            <label class="form-check-label" for="exampleCheck1" style="margin-bottom: 4px;">Bowsers Festung</label><br />
                            <input type="checkbox" class="form-check-input" id="exampleCheck2" />
                            <label class="form-check-label" for="exampleCheck2" style="margin-bottom: 4px;">In die Minen von Moria</label><br />
                            <input type="checkbox" class="form-check-input" id="exampleCheck3" />
                            <label class="form-check-label" for="exampleCheck3" style="margin-bottom: 4px;">Nach Hause</label>
                        </div>
                        <div class="center" style="margin-top: 30px;">
                        <a href="index.php"><button type="button" class="btn btn-outline-secondary" style="margin-right: 12px;" >Zur&uuml;ck</button></a>
                        <button type="submit" class="btn btn-outline-primary" >Weiter</button>
                        </div>
                    </form>
                </div>
                <div class="footer">
                <div style="color: #303030;">page 2/20</div> <a data-toggle="modal" href="#modal2">Disclaimer</a>
                </div>
           </div>
       </div>
       
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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

echo $check1;
echo $check2;
echo $check3;

?>

    </body>
    
</html>