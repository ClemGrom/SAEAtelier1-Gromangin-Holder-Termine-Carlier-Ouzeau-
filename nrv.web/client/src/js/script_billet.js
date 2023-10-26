var divbillet = document.getElementById('lsbillets');

var divnb = document.getElementById("nbbillets");

var jsonbillets = {
    "0" : {
        "titre" : "Hip-hop",
        "desc" : "venez découvrire la dance de rue",
        "prix" : "09,17€",
        "date" : "11/03/24",
        "achat" : "19/12/22",
        "image" : "https://images.pexels.com/photos/11063356/pexels-photo-11063356.jpeg",
        "altimage" : "musique hip-hop",
        "linksoiree": "index.html"

},
    "1" : {
        "titre" : "rock",
        "desc" : "Les cheveux au veux et les guitars qui grattes",
        "prix" : "15,60€",
        "date" : "19/11/23",
        "achat" : "07//08/23",
        "image" : "https://live.staticflickr.com/935/29027192487_d68a068363_b.jpg",
        "altimage" : "musique rock",
        "linksoiree": "index.html"

    },
    "2" : {
        "titre" : "techno",
        "desc" : "ce soir on s'éclate",
        "prix" : "14,5€",
        "date" : "05/07/24",
        "achat" : "04/08/23",
        "image" : "https://upload.wikimedia.org/wikipedia/commons/3/3f/Airbeat_One_2015_Waterm%C3%A4t_by_Denis_Apel-1539.jpg",
        "altimage" : "musique electro",
        "linksoiree": "index.html"

    }}

    let nbjson = Object.keys(jsonbillets).length;

if (nbjson > 1) {
    divnb.innerHTML = nbjson + " billets"
}else{
    divnb.innerHTML = nbjson.length + " billet"
}

if (nbjson !== 0) {
    for (let i = 0; i < nbjson; i++) {
        
        
        
        let billet = document.createElement('div');
        // lien image
        let linkpic = document.createElement('a');
        billet.appendChild(linkpic);
        linkpic.href = jsonbillets[i]['linksoiree']; //lien vers le soirée
        let pic = document.createElement('img');
        linkpic.appendChild(pic);
        pic.src = jsonbillets[i]['image']; // lien vers l'image
        pic.alt = jsonbillets[i]['altimage']; // description de l'image
        
        // titre soirée
        let title = document.createElement('p');
        billet.appendChild(title);
        let ctntitle =  document.createTextNode(jsonbillets[i]['titre']);
        title.appendChild(ctntitle);
        
        // prix
        let price = document.createElement('p');
        billet.appendChild(price);
        let ctnprice = document.createTextNode(jsonbillets[i]['prix']);
        price.appendChild(ctnprice);
        
        // description
        let desc = document.createElement('p');
        billet.appendChild(desc);
        let ctndesc = document.createTextNode(jsonbillets[i]['desc']);
        desc.appendChild(ctndesc);
        
        // date de la soirée
        let date = document.createElement('p');
        billet.appendChild(date);
        let ctndate = document.createTextNode("pour " + jsonbillets[i]['date']);
        date.appendChild(ctndate);
        
        // date d'achat
        let buyed = document.createElement('p');
        billet.appendChild(buyed);
        let ctnbuyed = document.createTextNode("achat le " + jsonbillets[i]['achat']);
        buyed.appendChild(ctnbuyed);
        
        
        divbillet.appendChild(billet)
    }
}