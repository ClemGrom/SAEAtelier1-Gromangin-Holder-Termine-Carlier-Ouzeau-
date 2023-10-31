import { load } from "./loader.js";
import {api_link} from "./api_links.js";

function getThemeById(id) {
    return load(api_link+"/theme/" + id);
}

export {getThemeById};