

document.querySelector("#VISUALISER").onclick=function(){
    const statut = document.querySelector("#statut").value
    const age = document.querySelector("#age").value;
    const nom = document.querySelector("#nom").value;
    const prenom = document.querySelector("#prenom").value;
    const telephone = document.querySelector("#telephone").value;
    const pass = document.querySelector("#pass").value;
    const mail = document.querySelector("#mail").value;
    if((telephone=='')||(nom=='')||(prenom=='')||(pass=='')||(mail=='')||(statut=='')){
        
        alert("veuillez remplir touts les champs");
    }else{
        document.querySelector("#ml").textContent=mail;
        document.querySelector("#nm").textContent=nom;
        document.querySelector("#pn").textContent=prenom;
        document.querySelector("#nt").textContent=telephone;
        document.querySelector("#situation").textContent=statut;
        document.querySelector("#ag").textContent=age;
        document.querySelector("#mp").textContent=pass;
    }
    }   