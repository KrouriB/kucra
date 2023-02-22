{/* récupérer le bouton*/}
let mybutton = document.getElementById("myBtn");

{/* toujours affichez le bouton */}
{ window.onscroll = function() {mybutton.style.display = "block"}; }

{/* a l'appui du bouton ,permet de remonter en haut de la page */}
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    }

var ulHeader = document.getElementById("ulNav");
var menuToggle = document.getElementById("menu__toggle");
const liHeader = ulHeader.querySelectorAll("a");
for(let i = 0 ; i < liHeader.length ;i++){
	liHeader[i].addEventListener("click", function() {
		menuToggle.checked = false;
	})
}

