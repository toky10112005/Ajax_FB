function submitForm()
{ 
    
    var xhr = new XMLHttpRequest();

    var coms=document.getElementById("coms").value;

     xhr.onreadystatechange  = function() 
    { 
       if(xhr.readyState  == 4){
        if(xhr.status  == 200) {
            var retour = JSON.parse(xhr.responseText);
           
            var resultat = document.getElementById("affichage");
            resultat.innerHTML="";

            console.log(retour);

            retour.forEach(el => {
        var div=document.createElement("div");
        resultat.appendChild(div);

                 var p1=document.createElement("p");
                p1.textContent=el.contenu;

                var p2=document.createElement("p");
                p2.textContent=el.auteur;

                var p3=document.createElement("p");
                p3.textContent=el.date_com;

               
                div.appendChild(p1);
                div.appendChild(p2);
                div.appendChild(p3);
            });
            
        } else {
            document.dyn="Error code " + xhr.status;
        }
		}
    }; 
  //XMLHttpRequest.open(method, url, async)
  var url="../fonction/json2.php?coms="+encodeURIComponent(coms);
   xhr.open("GET", url,  true); 
   
   //XMLHttpRequest.send(body)
   xhr.send(null); 
}

