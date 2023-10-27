import {getSoirees,getSoireeById} from "./soiree.js";

let jsonprog = getSoireesById(id);

var ctnprog = document.getElementById('ctnprog');
console.log(jsonprog);

for (let i = 1; i < Object.keys(jsonprog).length; i++) {
    let div = document.createElement('div');
    let button = document.createElement('button');
    ctnprog.appendChild(button);

    let img = document.createElement('img');
    img.src = jsonprog[i]['img'];
    img.alt = jsonprog[i]['imgalt'];
    button.appendChild(img);

    let title = document.createElement('h3');
    title.innerHTML = jsonprog[i]['nom'];
    button.appendChild(title);

    let desc = document.createElement('p');
    desc.innerHTML = jsonprog[i]['theme'];   
    button.appendChild(desc);

    let date = document.createElement('p');
    date.innerHTML = jsonprog[i]['date'];
    button.appendChild(date);
}