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
		"--bg1": "radial-gradient(#808080, var(--primary))",
		"--button": "black",
		"--btjs": "lightgray",
		"--ombre": "white",
	},
};

let colorswap = document.getElementById("colorswap");
const para = document.createElement( "div" );
const corps = document.body
para.setAttribute("id","parabox");
const themeClaire = document.createElement( "div" );
themeClaire.setAttribute("id","claire");
themeClaire.classList.add("btnColor");
themeClaire.innerText = "Thème Claire";
themeClaire.dataset.theme="base";
const themeSombre = document.createElement( "div" );
themeSombre.setAttribute("id","sombre");
themeSombre.classList.add("btnColor");
themeSombre.innerText = "Thème Sombre";
themeSombre.dataset.theme="dark";
para.appendChild(themeClaire);
para.appendChild(themeSombre);

function colorSettings() {
	corps.appendChild(para);
	corps.style.overflow = "hidden";
	corps.style.height = "100%";
}

[...document.querySelectorAll('.btnColor')].forEach(el => {
    el.addEventListener('click', () => {
        const theme = themes[el.dataset.theme];
        for (var variable in theme) {
            document.documentElement.style.setProperty(variable, theme[variable]);
			corps.removeChild(para);
			corps.style.overflow = "scroll";
			corps.style.height = "";
        };
    });
});