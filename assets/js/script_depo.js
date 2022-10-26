//recuperation du type d'article et insertion dans le champ article
document.querySelector("#type_art").onchange=function(){

var type_art= document.querySelector("#type_art").value;
document.querySelector("#article").value=type_art;

}
document.querySelector("#qte").onkeyup=function(){
	var mt=document.querySelector('#mtnu').value;
	var qte=document.querySelector('#qte').value;

document.querySelector("#total").value=(mt*qte);

}
//recuperation des element et insertion dans le tableau
document.querySelector("#btn").onclick=function(){
	var art=document.querySelector('#article').value;
	document.querySelector('#articleR').textContent=art;
	var mt=document.querySelector('#mtnu').value;
	document.querySelector('#mtuR').textContent=mt;
	var coul=document.querySelector('#col').value;
	document.querySelector('#colR').textContent=coul;
	var qte=document.querySelector('#qte').value;
	document.querySelector('#qteR').textContent=qte;
	var pres=document.querySelector('#presta').value;
	document.querySelector('#prestR').textContent=pres;
	var total=document.querySelector('#total').value;
	document.querySelector('#mttR').textContent=total;
	//document.querySelector('#test').classList.remove('.rendu');

	/*
	alert(coul);

	alert(total);

	


	alert(pres);*/
}