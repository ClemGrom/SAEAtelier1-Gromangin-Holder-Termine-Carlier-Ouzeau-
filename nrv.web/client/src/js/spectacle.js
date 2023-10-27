// import
import {load} from "./loader.js";
import {api_link} from "./api_links.js";

function getSpectacles() {
    return load(api_link+ "/spectacles")
}

function getSpectacleById(id) {
    return load(api_link+ "/spectacles/" + id)
}

export {getSpectacles, getSpectacleById}