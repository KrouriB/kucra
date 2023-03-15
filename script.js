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

//  création de différent theme de couleur

const themes = {
	base: {
		"--primary": "#1294b8",
		"--secondary": "white",
		"--third": "whitesmoke",
		"--bg1": "radial-gradient(rgb(139, 195, 245), var(--primary))",
		"--button": "#3f8efd",
		"--btjs": "gray",
		"--ombre": "black",
	},
	dark: {
		"--primary": "#2a2a2a",
		"--secondary": "#3f8efd",
		"--third": "#383838",
		"--bg1": "radial-gradient(#4b4b4b, var(--primary))",
		"--button": "black",
		"--btjs": "lightgray",
		"--ombre": "white",
	},
};

let colorswap = document.getElementById("colorChange");
const corps = document.body


let settingbox = document.getElementById("themeBox");

// fonction pour afficher la boite de selection de theme

function colorSettings() {
	corps.style.overflow = "hidden";
	corps.style.height = "100%";
	settingbox.classList.remove("cacher");
	settingbox.classList.add("parabox");
}

const buttons = document.getElementsByClassName("btnColor");
console.log(buttons);
for (const button of buttons) {
	button.addEventListener('click', () => {
		console.log(button);
        const currentTheme = themes[button.dataset.theme];
        for (var variable in currentTheme) {
            document.documentElement.style.setProperty(variable, currentTheme[variable]);
			settingbox.classList.remove("parabox");
			settingbox.classList.add("cacher");
			corps.style.overflow = "";
			corps.style.height = "";
        };
    });
}

function colorChange(){
	const theme = themes[colorswap.dataset.theme];
	const currentTheme = document.getElementById("colorChange").dataset.theme;
	console.log(currentTheme)
	if(currentTheme == "dark"){
		for (var variable in theme) {
            document.documentElement.style.setProperty(variable, theme[variable]);
        };
		colorswap.dataset.theme = "base";
		colorswap.setAttribute("data-theme", "base");
	}else{
		for (var variable in theme) {
            document.documentElement.style.setProperty(variable, theme[variable]);
        };
		colorswap.dataset.theme = "dark";
		colorswap.setAttribute("data-theme","dark");
	}
}

// suppression du message d'information

var messageBox = document.getElementById("message");
if(messageBox){
	setTimeout(() => {
		messageBox.classList.add('disparition');
		},
		3000
	);
	setTimeout(() => {
		messageBox.style.display = 'none';
		},
		4000
	);
}



