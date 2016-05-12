<div class="col-lg-12 form-form">
	
	<form class="" name="frmReg"  action="#.php"   method="post"  id="FormR" onsubmit="return">
  <fieldset>
    <h2 class="logo">Registrierung</h2>
	
	
	<div class="form-group">
      <label for="inputEmail" class="col-lg-2">Vorname</label>
      <div class="col-lg-11">
        <input class="form-control" id="vorn" name="vorn" placeholder="Vorname" type="text" >
      </div>
    </div>
	<div class="form-group">
      <label for="inputEmail" class="col-lg-2  ">Nachname</label>
      <div class="col-lg-11">
        <input class="form-control" id="nachn" name="nachn" placeholder="Nachname" type="text" >
      </div>
    </div>
	<div class="form-group">
      <label for="inputEmail" class="col-lg-2  ">Benutzername</label>
      <div class="col-lg-11">
        <input class="form-control" id="user" name="user" placeholder="Benutzername" type="text" title="Der Benutzername muss genau 6 Zeichen lang sein und darf keine Sonderzeichen beinhalten.">
      </div>
    </div>
	<div class="form-group">
      <label for="inputEmail" class="col-lg-2  ">Email</label>
      <div class="col-lg-11">
        <input class="form-control" id="email" name="email" placeholder="Email" type="text">
      </div>
    </div>
	<div class="form-group">
      <label for="password" class="col-lg-2  ">Passwort</label>
      <div class="col-lg-11">
        <input class="form-control" id="word" name="word" placeholder="Password" type="password">
      </div>
    </div>
	<div class="form-group">
	<label for="passworta" class="col-lg-2  ">Passwort wiederholung</label>
      <div class="col-lg-11">
        <input class="form-control" id="wordagain" name="wordagain" placeholder="Password" type="password">
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-11">
        <input type="reset" class="btn btn-default" value="Cancel">
        <input type="submit" class="btn btn-primary" value="Submit">
      </div>
    </div>
  </fieldset>
  </form>
	