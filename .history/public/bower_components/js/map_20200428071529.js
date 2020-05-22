//Initialisation de la carte et chargement des tuiles 
    var carte = L.map('map').setView([14.6937000, -17.4440600], 13);
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
    attribution: 'Données &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a>/ODbl -rendu  <a href="https://www.openstreetmap.org/">OpenStreetMap</a>',
    minZoom: 1,
    maxZoom: 20,

}).addTo(carte);    
var marqueur = L.marker([14.6937000, -17.4440600]).addTo(carte);
marqueur.bindPopUp('<p>Dakar</p>')
