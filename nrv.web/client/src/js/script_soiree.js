// json soiree

var json = {
    "info" : [{
        "id" : "2",
        "titre" : "rock",
        "date" : "02/12/2023",
        "prix" : "13,50€"
    }],
    "spectacle" : [
        {
            "heur" : "19h",
            "artiste" : "Johnny Hallyday",
            "description" : "Tourner le temps à l'orage Revenir à l'état sauvage Forcer les portes, les barrages Sortir le loup de sa cage Sentir le vent qui se déchaîne Battre le sang dans nos veines Monter le son des guitares Et le bruit des motos qui démarrent Il suffira d'une étincelle, D'un rien, d'un geste Il suffira d'une étincelle, D'un mot d'amour Pour...",
            "img" : "https://s.yimg.com/os/creatr-uploaded-images/2020-12/ae61db00-34ac-11eb-af9c-6d5f66f88aa5",
            "altimg" : "artiste Johnny Hallyday"
        },
        {
            "heur" : "20h",
            "artiste" : "Michel jackson",
            "description" : "Tourner le temps à l'orage Revenir à l'état sauvage Forcer les portes, les barrages Sortir le loup de sa cage Sentir le vent qui se déchaîne Battre le sang dans nos veines Monter le son des guitares Et le bruit des motos qui démarrent Il suffira d'une étincelle, D'un rien, d'un geste Il suffira d'une étincelle, D'un mot d'amour Pour...",
            "img" : "https://live.staticflickr.com/3048/2994315289_777bfb2c1d_c.jpg",
            "altimg" : "artiste Michel jackson"
        },
        {
            "heur" : "21h",
            "artiste" : "Charle aznavour",
            "description" : "Tourner le temps à l'orage Revenir à l'état sauvage Forcer les portes, les barrages Sortir le loup de sa cage Sentir le vent qui se déchaîne Battre le sang dans nos veines Monter le son des guitares Et le bruit des motos qui démarrent Il suffira d'une étincelle, D'un rien, d'un geste Il suffira d'une étincelle, D'un mot d'amour Pour...",
            "img" : "https://upload.wikimedia.org/wikipedia/commons/6/6d/Charles_Aznavour_Fot_Mariusz_Kubik_01_%28Remini_enhanced%29.jpg",
            "altimg" : "artiste Charle aznavour"
        },
        {
            "heur" : "22h",
            "artiste" : "Mozart",
            "description" : "Tourner le temps à l'orage Revenir à l'état sauvage Forcer les portes, les barrages Sortir le loup de sa cage Sentir le vent qui se déchaîne Battre le sang dans nos veines Monter le son des guitares Et le bruit des motos qui démarrent Il suffira d'une étincelle, D'un rien, d'un geste Il suffira d'une étincelle, D'un mot d'amour Pour...",
            "img" : "https://cdn2.picryl.com/photo/1799/12/31/portrait-of-wolfgang-amadeus-mozart-at-the-age-of-13-in-verona-1770-e46b2d-1024.jpg",
            "altimg" : "artiste Mozart"
        },
        {
            "heur" : "23h",
            "artiste" : "Beethoven",
            "description" : "Tourner le temps à l'orage Revenir à l'état sauvage Forcer les portes, les barrages Sortir le loup de sa cage Sentir le vent qui se déchaîne Battre le sang dans nos veines Monter le son des guitares Et le bruit des motos qui démarrent Il suffira d'une étincelle, D'un rien, d'un geste Il suffira d'une étincelle, D'un mot d'amour Pour...",
            "img" : "https://live.staticflickr.com/8757/17071155296_13d877ec32_b.jpg",
            "altimg" : "artiste Beethoven"
        },
    ]
};

// script soirée

var divtitre = document.getElementById('hsoiree');
var divdate = document.getElementById('ctndate');
var btnbuy = document.getElementById('btnbuy');
var ctnsoiree = document.getElementById('ctnsoiree');

divtitre.innerHTML = json['info'][0]['titre'];
divdate.innerHTML = "soirée du " + json['info'][0]['date'];
btnbuy.innerHTML = "ajouter au pannier pour " + json['info'][0]['prix'];

for (let i = 0; i < Object.keys(json['spectacle']).length; i++) {
    let divtext = document.createElement('div');
    ctnsoiree.appendChild(divtext);
    let hspec = document.createElement('h3');
    let letitre = json['spectacle'][i]['heur'] + " - " + json['spectacle'][i]['artiste'];
    hspec.innerHTML = letitre;
    divtext.appendChild(hspec);
    let descspec = document.createElement('p');
    descspec.innerHTML = json['spectacle'][i]['description'];
    divtext.appendChild(descspec);

    let divpic = document.createElement('div');
    ctnsoiree.appendChild(divpic);
    let pic = document.createElement('img');
    pic.src = json['spectacle'][i]['img'];
    pic.alt = json['spectacle'][i]['altimg'];
    divpic.appendChild(pic)
}