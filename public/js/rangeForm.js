var range = document.getElementById("distance");
range.oninput = function () {
    document.getElementById("distanceShow").innerHTML = this.value + " km";
};
