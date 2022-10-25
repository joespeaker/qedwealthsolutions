function education() {
    let keep = document.getElementById("education");
    let rid = document.getElementById("service");
    let rid1 = document.getElementById("independence");
    let kbutton = document.getElementById("e-button");
    let rbutton = document.getElementById("s-button");
    let rbutton1 = document.getElementById("i-button");

    keep.classList.remove("hidden");
    rid.classList.add("hidden");
    rid1.classList.add("hidden");

    kbutton.classList.add("active1");
    rbutton.classList.remove("active1");
    rbutton1.classList.remove("active1");
}
function independence() {
    let keep = document.getElementById("independence");
    let rid = document.getElementById("education");
    let rid1 = document.getElementById("service");
    let kbutton = document.getElementById("i-button");
    let rbutton = document.getElementById("e-button");
    let rbutton1 = document.getElementById("s-button");

    keep.classList.remove("hidden");
    rid.classList.add("hidden");
    rid1.classList.add("hidden");

    kbutton.classList.add("active1");
    rbutton.classList.remove("active1");
    rbutton1.classList.remove("active1");
}
function service() {
    let keep = document.getElementById("service");
    let rid = document.getElementById("education");
    let rid1 = document.getElementById("independence");
    let kbutton = document.getElementById("s-button");
    let rbutton = document.getElementById("e-button");
    let rbutton1 = document.getElementById("i-button");

    keep.classList.remove("hidden");
    rid.classList.add("hidden");
    rid1.classList.add("hidden");

    kbutton.classList.add("active1");
    rbutton.classList.remove("active1");
    rbutton1.classList.remove("active1");
}