<div class="col-lg-12 form-form">
	
	<form class="" name="frmReg">
		<fieldset>
			<h2 class="logo">Login</h2>
			<script type="text/javascript" src="user.js"> </script>
	
			<div class="form-group">
			  <label for="inputEmail" class="col-lg-2">Username</label>
			  <div class="col-lg-11">
				<input class="form-control" id="user" name="user" placeholder="Username" type="text" autofocus/>
			  </div>
			</div>
			<div class="form-group">
			  <label for="inputEmail" class="col-lg-2  ">Password</label>
			  <div class="col-lg-11">
				<input class="form-control" id="pass" name="pass" placeholder="Password" type="password" />
			  </div>
			  <span id="LogFehler"> </span> <br />
			</div>
			
			<div class="form-group">
			  <div class="col-lg-11">
				<input type="reset" class="btn btn-default" value="Cancel">
				<input type="submit" class="btn btn-primary" value="Submit" onclick="login()"/>
			  </div>
			  <h4 id="registr">Noch nicht registriert? Klick<a href="?p=register.php">Hier!</a></h4>
			</div>
	
		</fieldset>
	</form>
	