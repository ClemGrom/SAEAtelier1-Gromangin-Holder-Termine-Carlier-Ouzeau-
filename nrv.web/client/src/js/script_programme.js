// json filtre
var jsonlieu = {
0 : {
    "id" : "3",
    "nom" : "place stanislas"
},
1 : {
    "id" : "2",
    "nom" : "zenit de nancy"
},
2 : {
    "id" : "5",
    "nom" : "le cube de troyes"
},
3 : {
    "id" : "4",
    "nom" : "zenit de paris"
},
4 : {
    "id" : "7",
    "nom" : "derrière toi"
}};

var jsonartiste = {
    0 : {
        "id" : "1",
        "nom" : "Michel Jackson"
    },
    1 : {
        "id" : "2",
        "nom" : "Johnny Hallyday"
    },
    2 : {
        "id" : "4",
        "nom" : "Charle aznavour"
    },
    3 : {
        "id" : "6",
        "nom" : "Mozart"
    },
    4 : {
        "id" : "5",
        "nom" : "Beethiven"
    }};

var jsonstyle = {
    0 : {
        "id" : "2",
        "nom" : "rock"
    },
    1 : {
        "id" : "1",
        "nom" : "hip-hop"
    },
    2 : {
        "id" : "4",
        "nom" : "jazz"
    },
    3 : {
        "id" : "5",
        "nom" : "electro"
    },
    4 : {
        "id" : "6",
        "nom" : "classique"
    }};

var jsondate = {
    0 : {
        "id" : "12",
        "date" : "LUN 15 JAN"
    },
    1 : {
        "id" : "3",
        "date" : "MER 13 DECEMBRE"
    },
    2 : {
        "id" : "4",
        "date" : "DIM 10 mars"
    },
    3 : {
        "id" : "5",
        "date" : "JEU 27 mai"
    },
    4 : {
        "id" : "78",
        "date" : "VEN 02 AOUT"
    }};

// script filtre

var fllieu = document.getElementById('fllieu');
var flartiste = document.getElementById('flartiste');
var fldate = document.getElementById('fldate');
var flstyle = document.getElementById('flstyle');

// lieu
for (let i = 0; i < Object.keys(jsonlieu).length; i++) {
    console.log(i);
    let select = document.createElement('option');
    select.innerHTML = jsonlieu[i]["nom"];
    select.value = jsonlieu[i]["id"];
    fllieu.appendChild(select);
}

// artiste
for (let i = 0; i < Object.keys(jsonartiste).length; i++) {
    console.log(i);
    let select = document.createElement('option');
    select.innerHTML = jsonartiste[i]["nom"];
    select.value = jsonartiste[i]["id"];
    flartiste.appendChild(select);
}

// style
for (let i = 0; i < Object.keys(jsonstyle).length; i++) {
    console.log(i);
    let select = document.createElement('option');
    select.innerHTML = jsonstyle[i]["nom"];
    select.value = jsonstyle[i]["id"];
    flstyle.appendChild(select);
}

// date
for (let i = 0; i < Object.keys(jsondate).length; i++) {
    console.log(i);
    let select = document.createElement('option');
    select.innerHTML = jsondate[i]["date"];
    select.value = jsondate[i]["id"];
    fldate.appendChild(select);
}


// json programme

var jsonprog = {
    0: {
        "id": "0",
        "titre": "Jazz en Fusion",
        "desc": "Un mélange unique de jazz traditionnel et de sonorités modernes.",
        "date": "15/04/24",
        "img": "https://freerangestock.com/sample/45164/photo.jpg",
        "imgalt" : "musique jazz",
        "lien": "index.html"
    },
    1: {
        "id": "1",
        "titre": "Musique Classique",
        "desc": "Une soirée élégante avec des œuvres de compositeurs classiques renommés.",
        "date": "22/05/24",
        "img": "https://live.staticflickr.com/1740/28856385958_39e71bab99_b.jpg",
        "imgalt" : "musique classique",
        "lien": "index.html"
    },
    2: {
        "id": "2",
        "titre": "Pop Extravaganza",
        "desc": "Les tubes pop les plus récents interprétés par des artistes talentueux.",
        "date": "07/06/24",
        "img": "https://images.pexels.com/photos/11063356/pexels-photo-11063356.jpeg",
        "imgalt" : "misque hip-hop",
        "lien": "index.html"
    },
    3: {
        "id": "3",
        "titre": "Salsa Sensation",
        "desc": "Une nuit de danse endiablée avec les rythmes ensoleillés de la salsa.",
        "date": "18/08/24",
        "img": "https://cdn2.picryl.com/photo/2016/01/15/members-of-tops-in-blue-perform-uptown-funk-by-mark-11e6f8-1024.jpg",
        "imgalt" : "musique soul",
        "lien": "index.html"
    },
    4: {
        "id": "4",
        "titre": "R&B Grooves",
        "desc": "Les meilleures chansons R&B pour une soirée pleine de grooves et de vibes.",
        "date": "12/09/24",
        "img": "https://assets.rappler.com/6E110DE3AD774C24AD5175F5A8988EDC/img/A68E716ABCA74221A6D12A60A293E985/BonesThugsHarmony_IMG_0804.jpg",
        "imgalt" : "musique R&B",
        "lien": "index.html"
    },
    5: {
        "id": "5",
        "titre": "Musique du Monde",
        "desc": "Explorez les sons divers du monde entier avec des musiciens talentueux.",
        "date": "29/10/24",
        "img": "https://www.soulbag.fr/wp-content/uploads/olduploads/TOF18_15889_(c)ChristopheLosberger_HD%20copie.jpg",
        "imgalt" : "musique blues",
        "lien": "index.html"
    },
    6: {
        "id": "6",
        "titre": "Country Nights",
        "desc": "Chansons country authentiques et atmosphère chaleureuse pour une soirée inoubliable.",
        "date": "03/12/24",
        "img": "https://live.staticflickr.com/3048/2994315289_777bfb2c1d_c.jpg",
        "imgalt" : "artiste michel jackson",
        "lien": "index.html"
    },
    7: {
        "id": "7",
        "titre": "Reggae Vibes",
        "desc": "Laissez-vous emporter par les vibrations relaxantes du reggae et du dub.",
        "date": "21/01/25",
        "img": "https://live.staticflickr.com/4043/4336752035_03bf10fbef_b.jpg",
        "imgalt" : "musique reggae",
        "lien": "index.html"
    },
    8: {
        "id": "8",
        "titre": "Musique Expérimentale",
        "desc": "Une soirée unique mettant en vedette des expérimentations sonores audacieuses.",
        "date": "14/03/25",
        "img": "https://i2.pickpik.com/photos/339/573/287/dj-disco-lighting-party-preview.jpg",
        "imgalt" : "musique disco",
        "lien": "index.html"
    },
    9: {
        "id": "9",
        "titre": "Acoustique Intime",
        "desc": "Des performances acoustiques intimes dans un cadre chaleureux et intime.",
        "date": "02/05/25",
        "img": "https://live.staticflickr.com/935/29027192487_d68a068363_b.jpg",
        "imgalt" : "musique rock",
        "lien": "index.html"
    },
    10: {
        "id": "10",
        "titre": "Électro Chillout",
        "desc": "Détendez-vous avec des beats électroniques apaisants et des ambiances chillout.",
        "date": "19/06/25",
        "img": "https://upload.wikimedia.org/wikipedia/commons/3/3f/Airbeat_One_2015_Waterm%C3%A4t_by_Denis_Apel-1539.jpg",
        "imgalt" : "musique electro",
        "lien": "index.html"
    },
    11: {
        "id": "11",
        "titre": "Blues Night",
        "desc": "Laissez-vous emporter par l'âme et l'émotion du blues authentique.",
        "date": "08/08/25",
        "img": "https://lecactustoulouse.fr/wp-content/uploads/2018/02/jeff-zima.jpg",
        "imgalt" : "musique blues",
        "lien": "index.html"
    }
};



// script programme

var ctnprog = document.getElementById('ctnprog')

for (let i = 0; i < Object.keys(jsonprog).length; i++) {
    let button = document.createElement('a');
    ctnprog.appendChild(button);

    let img = document.createElement('img');
    img.src = jsonprog[i]['img'];
    img.alt = jsonprog[i]['imgalt'];
    button.appendChild(img);

    let title = document.createElement('h3');
    title.innerHTML = jsonprog[i]['titre'];
    button.appendChild(title);

    let desc = document.createElement('p');
    desc.innerHTML = jsonprog[i]['desc'];
    button.appendChild(desc);

    let date = document.createElement('p');
    date.innerHTML = jsonprog[i]['date'];
    button.appendChild(date);
}