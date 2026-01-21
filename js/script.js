// nos fonctions

// var globales
let selectStyle;
let inputArtiste;


// fonction qui efface le contenu de la div ressources
function viderEvenement(){
	document.getElementById('divressources').innerHTML = "";	
}

// fonction qui permet de récupérer, en Ajax, la liste de toutes les ressources de l'événement d'id idevenement
// et de générer le HTML mis dans la div ressources
function listerEvenements(style, artiste){
	// requete AJAX
	var xhttp = new XMLHttpRequest();
	xhttp.open("GET", "API/filtrerEvenement.php?style="+style+"&artiste="+artiste, true);
	// GET request — pas besoin d'en-tête `application/x-www-form-urlencoded`
	xhttp.onreadystatechange = function() {
	   if (this.readyState == 4 && this.status == 200) {
		  // Response
		  var response = JSON.parse(this.responseText); 
		  console.log(response);
		  // si le status vaut OK, tout c'est bien passé donc on peut récupérer les éléments de l'événement (intitule et ressources associées)
		  if(response["status"]=="OK"){
			
			  
			  // on récupère le modèle de bloc HTML à remplir pour les ressources
			  var templateEl = document.getElementById('templateEvenements');
			  if (!templateEl) {
				console.error('templateEvenements element introuvable');
				return;
			  }
			  var template = templateEl.innerHTML;
		  
			  // on utilise Mustache pour faire le rendu (vérifier Mustache)
			  if (typeof Mustache === 'undefined') {
				console.error('Mustache non chargé');
				return;
			  }
			  // Mustache attend un objet de contexte ; le template utilise {{#evenements}}
			  var rendered = Mustache.render(template, { evenements: response["evenements"] });
		  
			  // on met le contenu dans la div (vérifier l'élément cible)
			  var target = document.getElementById('carteEvenement');
			  if (!target) {
				console.error('carteEvenement element introuvable');
				return;
			  }
			  target.innerHTML = rendered;             
		 }  

	   }
	};
	xhttp.send();
}





// on ajoute un écouteur à cet élément
function chargerEvenements(){
	// quand l'événement sélectionné change, on récupère l'id
	let style = selectStyle.value || "";
	let artiste = inputArtiste.value || "";

		// on récupère la liste des ressources
	listerEvenements(style,artiste);
}

function init(){
	// on recupere l'element selectEvenement et on ajoute l'écouteur
	selectStyle=document.getElementById('style');
	selectStyle.addEventListener('change', chargerEvenements);

	// 	on récupere l'élément inputArtiste et on ajoute l'écouteur
	inputArtiste=document.getElementById('artiste');
	inputArtiste.addEventListener('change', chargerEvenements);

	// afficher la liste initiale (aucun filtre)
	chargerEvenements();
}

/* --
quand le DOM a été entièrement chargé, on peut appeler la fonction d'initialisation
-- */
window.addEventListener("load", init);
