// Menu burger, explications trouvées sur https://iridescent.dev/posts/web/creer-un-menu-hamburger

let burger = document.getElementById("burger");
let nav = document.getElementById("menuPrincipal");

burger.onclick = function () {
    if (nav.className === "open") {
        nav.className = "";
    } else {
        nav.className = "open";
    }
};

