function submitForm()
{ 
    
    var xhr = new XMLHttpRequest();

    var pub=document.getElementById("pub").value;

     xhr.onreadystatechange  = function() 
    { 
       if(xhr.readyState  == 4){
        if(xhr.status  == 200) {
            var retour = JSON.parse(xhr.responseText);
           
            var resultat = document.getElementById("affichage");
            resultat.innerHTML=""; 

            retour.forEach(el => {
        var div=document.createElement("div");
        resultat.appendChild(div);

                 var p1=document.createElement("p");
                p1.textContent=el.contenu;

                var p2=document.createElement("p");
                p2.textContent=el.auteur;

                var p3=document.createElement("p");
                p3.textContent=el.date_pub;

                var button=document.createElement("button");
                button.textContent="Commenter";

                button.onclick=commenter(el.id){
                    alert("Fonctionnalité en cours de développement");
                };
               
                div.appendChild(p1);
                div.appendChild(p2);
                div.appendChild(p3);
                div.appendChild(button);
            });
            
        } else {
            document.dyn="Error code " + xhr.status;
        }
		}
    }; 
  //XMLHttpRequest.open(method, url, async)
  var url="../fonction/json.php?pub="+pub;
   xhr.open("GET", url,  true); 
   
   //XMLHttpRequest.send(body)
   xhr.send(null); 
}

function commenter(id_pub){
    
}