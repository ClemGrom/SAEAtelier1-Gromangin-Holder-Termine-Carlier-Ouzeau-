import { load } from "./loader.js";

function getLieuById(id) {
    return load("http://localhost:8021"+ "/lieu/" + id);
}

export { getLieuById };