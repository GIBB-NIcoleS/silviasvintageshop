function Imob(){
	name = document.getElementById('Iname').value;
	price = document.getElementById('Iprice').value;
	vers = document.getElementById('Iversicherung').value;
	pers = document.getElementById('Iperson').value;
	description = document.getElementById('Ides').value;
	gegenstand  = document.getElementById('IwertG').value;
	quittung = document.getElementById('IquittungG').value;
	
	g = false;
	q = false;
	pname = false;
	pprice = false;
	pvers = false;
	ppers = false;
	pdes = false;
	
	fname = document.getElementById('Ifname');
	fprice = document.getElementById('Ifprice');
	fvers = document.getElementById('Ifversicherung');
	fpers = document.getElementById('Ifperson');
	fdesc = document.getElementById('Ifdes');
	
	if(name == ''){
		fname.innerHTML = 'Sie m&uuml;ssen einen Namen angeben';
	}
	else{
		if(!Number(name)){
			fname.innerHTML = 'Ok';
			pname = true;
		}
		else{
			fname.innerHTML = 'Der Name muss ein Text sein';
		}
	}
	
	if(price == ''){
		fprice.innerHTML = 'Sie m&uuml;ssen einen Gegenstandswert angeben';
	}
	else{
		if(Number(price)){
			fprice.innerHTML = 'Ok';
			pprice = true;
		}
		else{
			fprice.innerHTML = 'Gegenstandswert muss eine Zahl sein';
		}
	}
	
	if(vers == ''){
		fvers.innerHTML = 'Sie M&uuml;ssen eine Versicherung angeben';
	}
	else{
		if(Number(vers)){
			fvers.innerHTML = 'Die versicherung muss ein Text sein';
		}
		else{
			fvers.innerHTML = 'Ok';
			pvers = true;
		}
	}
	
	if(pers == ''){
		fpers.innerHTML = 'Sie m&uuml;ssen einen Versicherungsvertreter angeben';
	}
	else{
		if(Number(pers)){
			fpers.innerHTML = 'Der Versicherungsvertreter ist kaum eine Zahl';
		}
		else{
			fpers.innerHTML = 'Ok';
			ppers = true;
		}
	}
	
	if(description == ''){
		fdesc.innerHTML = 'Sie m&uuml;ssen eine Beschreibung angeben';
	}
	else{
		if(String(description)){
			fdesc.innerHTML = 'Ok';
			pdes = true;
		}
		else{
			fdesc.innerHTML = 'Sie m&uuml;ssen einen Text eingeben';
		}
	}
	
	if(gegenstand != ""){
		g = true;
	}
	
	if(quittung != ""){
		q = true;
	}
	
	if(pname == true && pprice == true && pvers == true && ppers == true && pdes == true){
		return true;
	}
	else{
		return false;
	}
}

function Ipers(){
		name = document.getElementById('Iname').value;
	price = document.getElementById('Iprice').value;
	vers = document.getElementById('Iversicherung').value;
	pers = document.getElementById('Iperson').value;
	description = document.getElementById('Ides').value;
	quittung = document.getElementById('IquittungG').value;
	
	g = false;
	q = false;
	pname = false;
	pprice = false;
	pvers = false;
	ppers = false;
	pdes = false;
	
	fname = document.getElementById('Ifname');
	fprice = document.getElementById('Ifprice');
	fvers = document.getElementById('Ifversicherung');
	fpers = document.getElementById('Ifperson');
	fdesc = document.getElementById('Ifdes');
	
	if(name == ''){
		fname.innerHTML = 'Sie m&uuml;ssen einen Namen angeben';
	}
	else{
		if(!Number(name)){
			fname.innerHTML = 'Ok';
			pname = true;
		}
		else{
			fname.innerHTML = 'Der Name muss ein Text sein';
		}
	}
	
	if(price == ''){
		fprice.innerHTML = 'Sie m&uuml;ssen einen Gegenstandswert angeben';
	}
	else{
		if(Number(price)){
			fprice.innerHTML = 'Ok';
			pprice = true;
		}
		else{
			fprice.innerHTML = 'Gegenstandswert muss eine Zahl sein';
		}
	}
	
	if(vers == ''){
		fvers.innerHTML = 'Sie M&uuml;ssen eine Versicherung angeben';
	}
	else{
		if(Number(vers)){
			fvers.innerHTML = 'Die versicherung muss ein Text sein';
		}
		else{
			fvers.innerHTML = 'Ok';
			pvers = true;
		}
	}
	
	if(pers == ''){
		fpers.innerHTML = 'Sie m&uuml;ssen einen Versicherungsvertreter angeben';
	}
	else{
		if(Number(pers)){
			fpers.innerHTML = 'Der Versicherungsvertreter ist kaum eine Zahl';
		}
		else{
			fpers.innerHTML = 'Ok';
			ppers = true;
		}
	}
	
	if(description == ''){
		fdesc.innerHTML = 'Sie m&uuml;ssen eine Beschreibung angeben';
	}
	else{
		if(String(description)){
			fdesc.innerHTML = 'Ok';
			pdes = true;
		}
		else{
			fdesc.innerHTML = 'Sie m&uuml;ssen einen Text eingeben';
		}
	}
	
	if(quittung != ""){
		q = true;
	}
	
	if(pname == true && pprice == true && pvers == true && ppers == true && pdes == true){
		return true;
	}
	else{
		return false;
	}
}