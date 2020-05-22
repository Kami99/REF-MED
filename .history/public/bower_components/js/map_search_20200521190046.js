window.onload=()=>{
    myMap = L.map('map').setView([14.6937000, -17.4440600], 14);
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
    attribution: 'Données &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a>/ODbl -rendu  <a href="https://www.openstreetmap.org/">OpenStreetMap</a>',
    minZoom: 10,
    maxZoom: 20,

}).addTo(myMap);    
myMap.on("click", mapClickListen)

}