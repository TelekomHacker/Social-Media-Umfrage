<!DOCTYPE html>
<html lang="de">

	<head>
		<meta charset="UTF-8">
		<title>Social Media Umfrage</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
		<link rel="stylesheet" href="mobilestyle.css" />
		<script language="javascript" type="text/javascript">
        function dokumentGeladen(event) {
            $('#modal1').modal('show');
        }

        document.addEventListener('DOMContentLoaded', dokumentGeladen, false);
        </script>
	</head>
	
	<body>
	
<!-- Modal 1 -->
<div class="modal fade" id="modal1" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="">Bitte Lesen!</h5>
      </div>
      <div class="modal-body">
        Hi!<br />
        Wir bitten euch alle Fragen ehrlich zu beantworten - nehmt euch bitte Zeit! Pro Frage k&ouml;nnt ihr mehrere Antwort ankreuzen. Es werden KEINE pers&ouml;nlichen Daten gespeichert. Die Umfrage ist 100% anonym, Ehrenwort!<br /><br />
        Wir w&uuml;nschen euch viel Spa&szlig; bei der Umfrage!<br /><br /><br />
        <div class="disclink" style=""><a data-toggle="modal" href="#modal32">Disclaimer<img src="img/info.svg" alt="moin" class="info" /></a></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal" style="margin-right:0px;">Schlie&szlig;en</button>
      </div>
    </div>
  </div>
</div>

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
                    <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="frage">
                    <div class="h2" style="">Wie viele Br&ouml;tchen sind gekauft?</div>
                    <form method="post" action="index_2.php">
                        <div class="form-check" style="">         
                            <input type="checkbox" name="checkbox1" class="form-check-input" id="checkbox1" />
                            <label class="form-check-label" for="exampleCheck1" style="">Ich fliege</label><br />
                            <input type="checkbox" name="checkbox2" class="form-check-input" id="checkbox2" />
                            <label class="form-check-label" for="exampleCheck2" style="">Meine Socken brennen</label><br />
                            <input type="checkbox" name="checkbox3" class="form-check-input" id="checkbox3" />
                            <label class="form-check-label" for="exampleCheck3" style="">Wo ist mein Hund</label>
                        </div>
                        <div class="center">
                        <button type="submit" class="btn btn-outline-primary" style="margin-left:0px;">Weiter</button>
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