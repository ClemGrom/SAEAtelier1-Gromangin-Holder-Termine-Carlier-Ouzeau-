import { load } from "./loader.js";
import { api_link } from "./api_links.js";

function getLieuById(id) {
    return load(api_link+ "/lieu/" + id);
}

export { getLieuById };