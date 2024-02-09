'use strict';

fetch("common/header.html")
        .then((response) => response.text())
        .then((data) => document.querySelector("#header").innerHTML = data);
fetch("common/footer.html")
        .then((response) => response.text())
        .then((data) => document.querySelector("#footer").innerHTML = data);