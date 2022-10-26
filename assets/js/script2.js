const codecl = document.querySelector("#codeclt").value
const nom = document.querySelector("#nom").value;
const prenom = document.querySelector("#prenom").value;
const telephone = document.querySelector("#telephone").value;
const statut = document.querySelector("#statut").value;

document.querySelector("#VISUALISER").onclick=function(){
    const codecl = document.querySelector("#codeclt").value
    const nom = document.querySelector("#nom").value;
    const prenom = document.querySelector("#prenom").value;
    const telephone = document.querySelector("#telephone").value;
    const statut = document.querySelector("#statut").value;
    if((telephone=='')||(codecl=='')||(prenom=='')||(nom=='')){
        
        alert("veuillez remplir touts les champs");
    }else{
        document.querySelector("#cclt").textContent=codecl;
        document.querySelector("#nm").textContent=nom;
        document.querySelector("#pn").textContent=prenom;
        document.querySelector("#nt").textContent=statut;
        document.querySelector("#st").textContent=telephone;
    }
    }   