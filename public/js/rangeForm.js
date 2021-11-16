var range = document.getElementById("distance");
range.oninput = function () {
    document.getElementById("distanceShow").value = this.value;
};

var numeric = document.getElementById("distanceShow");
numeric.oninput = function () {
    document.getElementById("distance").value = this.value;
};

