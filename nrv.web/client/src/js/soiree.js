import {load} from "./loader.js";
import {api_link} from "./api_links.js";


function getSoireeById(id) {
    return load(api_link + "/soiree/" + id)
}
function getSoirees() {
    return load(api_link + "/soirees/")
}

export {getSoireeById, getSoirees}


