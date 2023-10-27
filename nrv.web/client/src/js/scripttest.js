import { getSoirees } from "./soiree.js"; // Assurez-vous que le chemin d'importation est correct

// Déclarez les variables trie et id
let trie = "lieu";
let id = "1";

// Fonction pour afficher les informations des soirées sur la page HTML en fonction du tri et de l'ID
function afficherSoirees(trie, id) {
    const ctnprog = document.getElementById("ctnprog"); // Sélectionnez l'élément où vous souhaitez afficher les informations

    // Utilisez la fonction getSoirees avec les paramètres de tri et d'ID pour obtenir les données des soirées
    getSoirees(trie, id)
        .then(data => {
            // Parcourez les données et affichez-les sur la page
            data.forEach(soiree => {
                const divSoiree = document.createElement("div");
                divSoiree.innerHTML = `
                    <h2>${soiree.nom}</h2>
                    <p>Theme : ${soiree.theme}</p>
                    <p>Date : ${soiree.date}</p>
                    <p>Lieu : ${soiree.Lieu}</p>
                `;
                ctnprog.appendChild(divSoiree);
            });
        })
        .catch(error => {
            console.error("Une erreur s'est produite lors de la récupération des soirées : ", error);
        });
}

// Appelez la fonction pour afficher les soirées avec les paramètres de tri et d'ID lorsque la page est chargée
window.addEventListener("load", () => {
    // Exemple d'appel de la fonction avec un tri et un ID spécifiques
    afficherSoirees(trie, id);
});
