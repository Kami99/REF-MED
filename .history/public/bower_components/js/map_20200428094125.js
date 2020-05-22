//Initialisation de la myMap et chargement des tuiles 
let marker
    let myMap = L.map('map').setView([14.6937000, -17.4440600], 16);
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
    attribution: 'Données &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a>/ODbl -rendu  <a href="https://www.openstreetmap.org/">OpenStreetMap</a>',
    minZoom: 1,
    maxZoom: 20,

}).addTo(myMap);    
myMap.on("click", mapClickListen)
function mapClickListen(e) {
    let pos= e.latlng
    addMarker(pos)
    console.log(e)

    document.querySelector("#lat").value = pos.lat
    document.querySelector("#lon").value = pos.lng
}
function addMarker(pos) {
    if(marker != undefined){
        myMap.removeLayer(marker)
    }
    marker=L.marker(pos, {
        draggable: true
    })
    marker.on("dragend", function(e){
        pos = e.target.getLatLng()
    document.querySelector("#lat").value = pos.lat
    document.querySelector("#lon").value = pos.lng
    })
    // Listen Event dragabble on Marker


    marker.addTo(myMap)

}