import { getSoirees, getSoireeById } from "./soiree.js";
import { getLieuById } from "./lieu.js";

let trie = "lieu";
let id = "";
var fllieu = document.getElementById("fllieu");

function apply(trie, id) {
    
    getSoirees(trie, id)
    .then(jsonprog => {
        console.log(jsonprog);
        var ctnprog = document.getElementById("ctnprog");
        
        for (let i = 0; i < jsonprog.soirees.length; i++) {
            const nomSoiree = jsonprog.soirees[i][0].nom;
            const dateSoiree = jsonprog.soirees[i][0].date.date;
            
            
            const boutonSoiree = document.createElement('a');
            boutonSoiree.href = "soiree.html?id=" + jsonprog.soirees[i][0].id;
            
            const imgSoiree = document.createElement('img');
            imgSoiree.src = "https://freerangestock.com/sample/45164/photo.jpg";
            
            boutonSoiree.appendChild(imgSoiree);
            
            const h3Nom = document.createElement('h3');
            h3Nom.innerHTML = nomSoiree;
            boutonSoiree.appendChild(h3Nom);
            
            
            const pDate1 = document.createElement('p');
            boutonSoiree.appendChild(pDate1);
            const pDate = document.createElement('p');
            pDate.innerHTML = dateSoiree;
            boutonSoiree.appendChild(pDate);
            
            
            boutonSoiree.addEventListener('click', () => {
                // Faites quelque chose lorsqu'on clique sur le bouton (par exemple, afficher plus d'informations)
            });
            
            // Ajoutez le bouton à votre conteneur
            ctnprog.appendChild(boutonSoiree);
        }
    })
    .catch(error => {
        console.error("Une erreur s'est produite lors de la récupération des soirées : ", error);
    });
}

apply();

// filtre   
const lieuselect = document.getElementById("fllieu");
const artisteselect = document.getElementById("flartiste");
const styleselect = document.getElementById("flstyle");
const dateselect = document.getElementById("fldate");

// getSoireeById(1)
    //             .then(jsonprog2 => {
        //                 console.log(jsonprog2);
        //                 // Une fois que les données sont disponibles, vous pouvez les utiliser
        //                 var ctnprog = document.getElementById("ctnprog");
        //                 ctnprog.innerHTML = jsonprog2['soiree']['nom'];
        //             })
        //             .catch(error => {
            //                 console.error("Une erreur s'est produite lors de la récupération de la soirée par ID : ", error);
            //             });
            

const allfiltre = {
    0:{ "nom" : "lieu",
        "div" : lieuselect
    },
    1:{ "nom" : "artiste",
        "div" : artisteselect
    },
    2:{ "nom" : "style",
        "div" : styleselect
    },
    3:{ "nom" : "date",
        "div" : dateselect
    }};

// Créez une fonction pour ajouter une option au menu déroulant
function addLieuOption(lieu) {
    let option = document.createElement("option");
    option.value = lieu.id;
    option.textContent = lieu.nom;
    fllieu.appendChild(option);
}

for (let i = 1; i < 5; i++) {
    getLieuById(i)
        .then(jsonprog => {
            addLieuOption(jsonprog.lieu);
        })
        .catch(error => {
            console.error("Une erreur s'est produite lors de la récupération des lieux : ", error);
        });
}

for (let i = 0; i < allfiltre.length ; i++) {
    allfiltre[i].div.addEventListener("change", (event) => {
        ctnprog.innerHTML = "";
        let gettrie = allfiltre[i].nom;
        let getid = event.target.value;
        apply(gettrie, getid)
      });
}