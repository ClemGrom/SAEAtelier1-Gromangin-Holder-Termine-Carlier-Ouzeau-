import {load} from "./loader.js";
import {api_link} from "./api_links.js";

function getArtisteById(id) {
    return load(api_link+"/artiste/" + id);
}

export {getArtisteById};