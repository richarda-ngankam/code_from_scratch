// affiche ou cache le texte en plus
function afficher(id, lien) {
    var texte = document.getElementById(id);

    if (texte.style.display == "block") {
        texte.style.display = "none";
        lien.textContent = "Lire la suite...";
    } else {
        texte.style.display = "block";
        lien.textContent = "Reduire";
    }
}
