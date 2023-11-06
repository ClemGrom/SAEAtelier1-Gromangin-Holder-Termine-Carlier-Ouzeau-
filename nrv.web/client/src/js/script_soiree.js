// json soiree
import { getSoirees, getSoireeById } from "./soiree.js";


var url = new URL(window.location.href);
var search_params = new URLSearchParams(url.search); 
if(search_params.has('id')) {
  var id = search_params.get('id');
}

console.log(id);

// script soirée
var divtitre = document.getElementById('hsoiree');
var divdate = document.getElementById('ctndate');
var btnbuy_n = document.getElementById('btnbuy_n');
var btnbuy_r = document.getElementById('btnbuy_r');
var ctnsoiree = document.getElementById('ctnsoiree');

getSoireeById(id)
    .then(json => {
        console.log(json);

        divtitre.innerHTML = json['soiree']['nom'];
        let editdate = json['soiree']['date']['date'];
        editdate = editdate.split(' ');
        divdate.innerHTML = "soirée du " + editdate[0];
        btnbuy_n.innerHTML = "ajouter au panier pour " + json['soiree']['tarif']['tarif_normal'] + "€";
        btnbuy_r.innerHTML = "ajouter au panier pour " + json['soiree']['tarif']['tarif_reduit'] + "€";

        for (let i = 0; i < Object.keys(json['soiree']['spectacles']).length; i++) {
            let divtext = document.createElement('div');
            ctnsoiree.appendChild(divtext);
            let hspec = document.createElement('h3');
            let editheur = json['soiree']['spectacles'][i]['horaire'];
            editheur = editheur.split(' ');
            editheur = editheur[1];
            let letitre = editheur + " - " + json['soiree']['spectacles'][i]['titre'];
            hspec.innerHTML = letitre;
            divtext.appendChild(hspec);
            let descspec = document.createElement('p');
            let artiste = "";
            let nb_artiste = Object.keys(json['soiree']['spectacles'][i]['artistes']).length;
            console.log(nb_artiste);
            for (let j = 0; j < nb_artiste; j++) {
                artiste = artiste + " " + json['soiree']['spectacles'][i]['artistes'][j]['nom_scene'];
            }
            if (nb_artiste > 1) {
                artiste = "artistes : " + artiste;
            }else{
                artiste = "artiste : " + artiste;
            }
            let description = json['soiree']['spectacles'][i]['description'] + "<br>" + artiste;
            descspec.innerHTML = description;
            divtext.appendChild(descspec);

            let divpic = document.createElement('div');
            ctnsoiree.appendChild(divpic);
            let pic = document.createElement('img');
            pic.src = json['soiree']['spectacles'][i]['img'];
            pic.alt = json['soiree']['spectacles'][i]['altimg'];
            divpic.appendChild(pic)
        }
    })
    .catch(error => {
        console.error("Une erreur s'est produite lors de la récupération des soirées : ", error);
    });
