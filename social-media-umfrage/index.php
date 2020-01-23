<!DOCTYPE html>
<html lang="de">

	<head>
		<meta charset="UTF-8">
		<title>Social Media Umfrage</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
		<link rel="stylesheet" href="style.css" />
		<script language="javascript" type="text/javascript">
        function dokumentGeladen(event) {
            $('#modal1').modal('show');
        }

        document.addEventListener('DOMContentLoaded', dokumentGeladen, false);
        </script>
	</head>
	
	<body>
	
<!-- Modal 1 -->
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="font-weight: 600;">Bitte Lesen!</h5>
      </div>
      <div class="modal-body">
        Hi!<br />
        Wir bitten euch alle Fragen ehrlich zu beantworten - nehmt euch bitte Zeit! Pro Frage k&ouml;nnt ihr jeweils eine Antwort ankreuzen. Es werden KEINE pers&ouml;nlichen Daten gespeichert. Die Umfrage ist 100% anonym, Ehrenwort!<br /><br />
        Wir w&uuml;nschen euch viel Spa&szlig; bei der Umfrage!<br /><br /><br />
        <div style="font-weight: 600;">Disclaimer</div>
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
                    <div class="h2" style="margin-top: 65px;margin-bottom:32px">Wie viele Br&ouml;tchen sind gekauft?</div>
                    <form method="post" action="index_2.php">
                        <div class="form-check" style="text-align:center;">         
                            <input type="checkbox" name="checkbox1" class="form-check-input" id="checkbox1" />
                            <label class="form-check-label" for="exampleCheck1" style="margin-bottom: 4px;">Ich fliege</label><br />
                            <input type="checkbox" name="checkbox2" class="form-check-input" id="checkbox2" />
                            <label class="form-check-label" for="exampleCheck2" style="margin-bottom: 4px;">Meine Socken brennen</label><br />
                            <input type="checkbox" name="checkbox3" class="form-check-input" id="checkbox3" />
                            <label class="form-check-label" for="exampleCheck3" style="margin-bottom: 4px;">Wo ist mein Hund</label>
                        </div>
                        <div class="center" style="margin-top: 30px;">
                        <button type="submit" class="btn btn-outline-primary" >Weiter</button>
                        </div>
                    </form>
                </div>
                <div class="footer">
                <div style="color: #303030;">page 1/20</div> <a data-toggle="modal" href="#modal2">Disclaimer</a>
                </div>
           </div>
       </div>
       
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
    
</html>