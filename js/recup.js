// nos fonctions

let artiste;
let image;
let date;
let heure;
let ouverture;
let infos;
let signature;
let prix;
let id;
let form;

// fonction qui efface le contenu de la div ressources
// function viderDivRessources(){
// 	document.getElementById('divressources').innerHTML = "";	
// }

// fonction qui permet de récupérer, en Ajax, la liste de toutes les ressources de la SAE d'id idsae
// et de générer le HTML mis dans la div ressources
function recupererEvenement(idEvenement){
	// requete AJAX
	var xhttp = new XMLHttpRequest();
	xhttp.open("GET", "../../API/recupererEvenement.php?id_evenement="+idEvenement, true);
	xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	xhttp.onreadystatechange = function() {
	   if (this.readyState == 4 && this.status == 200) {
		  // Response
		  var response = JSON.parse(this.responseText); 
		  // si le status vaut OK, tout c'est bien passé donc on peut récupérer les éléments de la SAE (intitule et ressources associées)
		  if(response["status"]=="OK"){
                console.log("idEvenement");

                // remplir les champs du formulaire en changeant leur valeur
                artiste=document.getElementById('nomArtiste');
                artiste.value = response["evenement"]["artiste"];
                image=document.getElementById('image');
                image.value = response["evenement"]["visuel"];
                date=document.getElementById('date');
                date.value = response["evenement"]["date_evenement"];
                heure=document.getElementById('heure');
                heure.value = response["evenement"]["heure_evenement"];
                ouverture=document.getElementById('ouverture');
                ouverture.value = response["evenement"]["heure_ouverture"];
                infos=document.getElementById('infos');
                infos.value = response["evenement"]["informations"];
                signature=document.getElementById('signature');
                signature.value = response["evenement"]["signature"];
                prix=document.getElementById('prix');
                prix.value = response["evenement"]["tarif_plein"];
                id=document.getElementById('id_evenement')
                id.value = response["evenement"]["id_evenement"];

		 }  
 
	   }
	};
	xhttp.send();
}





// on ajoute un écouteur à cet élément
function chargerEvenements() {
    let idEvenement = this.value ||" ";

    recupererEvenement(idEvenement);
    // faire apparaître le formulaire en changeant sa classe (la classe actif a un display:block dans le CSS)
    form.classList.add("actif");
}

function init(){
	// on recupere l'element selectSAE et on ajoute l'écouteur
	let selectEvenement=document.getElementById('selectEvenement');
	selectEvenement.addEventListener('change', chargerEvenements);

    // on recupere le formulaire pour le faire apparaitre
    form=document.getElementById('modification');
}

/* --
quand le DOM a été entièrement chargé, on peut appeler la fonction d'initialisation
-- */
window.addEventListener("load", init);
