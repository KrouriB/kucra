let mybutton = document.getElementById("myBtn");
/* récupérer le bouton*/

function topFunction() {
	document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
/* a l'appui du bouton ,permet de remonter en haut de la page */

// permet de naviguer sur la page via le menu burger en décochant le bouton et enlever le menu burger une fois qu'un lien est clicker

var ulHeader = document.getElementById("ulNav");
var menuToggle = document.getElementById("menu__toggle");
const liHeader = ulHeader.querySelectorAll("a");
for(let i = 0 ; i < liHeader.length ;i++){
	liHeader[i].addEventListener("click", function() {
		menuToggle.checked = false;
	})
}

let colorswap = document.getElementById("colorswap");
const para = document.createElement( "div" );
const corps = document.body
para.setAttribute("id","parabox");
console.log(para);
console.log(corps)
function colorSettings() {
	corps.appendChild(para);
	corps.style.overflow = "hidden"
	corps.style.height = "100%"
}
