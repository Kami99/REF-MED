//Initialisation de la myMap et chargement des tuiles 
    var myMap = L.map('map').setView([14.6937000, -17.4440600], 13);
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
    attribution: 'Données &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a>/ODbl -rendu  <a href="https://www.openstreetmap.org/">OpenStreetMap</a>',
    minZoom: 1,
    maxZoom: 20,

}).addTo(myMap);    
myMap.on("click", mapClickListen)

var marqueur = L.marker([14.6937000, -17.4440600]).addTo(myMap);

function mapClickListen(e) {
    let pos= e.latlng
    console.log(e)

    document.querySelector("#lat").value = pos.lat
    document.querySelector("#lon").value = pos.lng
}
function addMarker(pos) {
    if(marker != undefined){
        myMap.
    }
        let marker=L.marker(pos)
    marker.addTo(myMap)

}