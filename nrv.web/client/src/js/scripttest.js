import { getSoirees, } from "./soiree.js"; // Assurez-vous que le chemin d'importation est correct

// Déclarez les variables trie et id
let trie = "lieu";
let id = "1";

let jsonprog = getSoirees();
console.log(jsonprog);
var ctnprog = document.getElementById("ctnprog"); 

for (let i = 0; i < Object.keys(jsonprog).length; i++) {
    console.log(i);
    let button = document.createElement('button');
    button.classList.add('programme-item');
    ctnprog.appendChild(button);

    let title = document.createElement('h3');
    nom.innerHTML = jsonprog[i]['nom'];
    button.appendChild(nom);

}
console.log(ctnprog);

