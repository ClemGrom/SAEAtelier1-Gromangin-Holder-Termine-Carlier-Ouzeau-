import { load } from "./loader.js";

function getSoireeById(id) {
    return load("http://localhost:8021"+ "/soiree/" + id);
}

function getSoirees(trie, id) {
    if (trie && id) {
        return load("http://localhost:8021" + "/soirees/" + trie + "/" + id);
    } else {
        return load("http://localhost:8021/soirees/");
        
    }
}


export { getSoireeById, getSoirees };
