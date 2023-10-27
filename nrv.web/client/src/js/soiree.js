import { load } from "./loader.js";
import { api_link } from "./api_links";

function getSoireeById(id) {
    return load(api_link + "/soiree/" + id);
}

function getSoirees(trie, id) {
    if (trie && id) {
        return load(api_link + "/soirees/" + trie + "/" + id);
    } else {
        return load("http://localhost:8021/soirees/");
    }
}

export { getSoireeById, getSoirees };
