//Initialisation de la myMap et chargement des tuiles 
let idLocation = document.querySelector('.locationName').getAttribute('id');
let idLon = document.querySelector('.locationLon');
let idLat = document.querySelector('.locationLat');
console.log(idLocation)
let marker, myMap
window.onload=()=>{
    myMap = L.map('map').setView([14.6937000, -17.4440600], 14);
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
    attribution: 'Données &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a>/ODbl -rendu  <a href="https://www.openstreetmap.org/">OpenStreetMap</a>',
    minZoom: 10,
    maxZoom: 20,

}).addTo(myMap);    
myMap.on("click", mapClickListen)
document.querySelector("#"+idLocation).addEventListener("blur", getAdress)

}

function mapClickListen(e) {
    let pos= e.latlng
    addMarker(pos)
    console.log(e)

    document.querySelector("#"+idLat).value = pos.lat
    document.querySelector("#"+idLon).value = pos.lng
     const xmlhttp = new XMLHttpRequest
    xmlhttp.onreadystatechange = () => {
        // Si la requête est terminée
        if(xmlhttp.readyState == 4){
            // Si nous avons une réponse
            if(xmlhttp.status == 200){
                //On récupère la réponse
                let response = JSON.parse(xmlhttp.response)
                document.querySelector("#"+idLocation).value=response.display_name            
            }
        }
    }
    // On ouvre la requête
    xmlhttp.open('get', `https://nominatim.openstreetmap.org/reverse.php?format=json&lat=${pos.lat}&lon=${pos.lng}`)
    // On envoie la requête
    xmlhttp.send();

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
    document.querySelector("#"+idLat).value = pos.lat
    document.querySelector("#"+idLon).value = pos.lng
    const xmlhttp = new XMLHttpRequest
    xmlhttp.onreadystatechange = () => {
        // Si la requête est terminée
        if(xmlhttp.readyState == 4){
            // Si nous avons une réponse
            if(xmlhttp.status == 200){
                //On récupère la réponse
                let response = JSON.parse(xmlhttp.response)
                document.querySelector("#"+idLocation).value=response.display_name            
            }
        }
    }
    // On ouvre la requête
    xmlhttp.open('get', `https://nominatim.openstreetmap.org/reverse.php?format=json&lat=${pos.lat}&lon=${pos.lng}`)
    // On envoie la requête
    xmlhttp.send();
    })
    // Listen Event dragabble on Marker

    marker.addTo(myMap)

}
function getAdress() {
    let doctor_location_nameLocation= "Dakar, "+document.querySelector("#"+idLocation).value
    //Initialisation ajax
    const xmlhttp = new XMLHttpRequest
// On détecte les changements d'état de la requête
    xmlhttp.onreadystatechange = () => {
        // Si la requête est terminée
        if(xmlhttp.readyState == 4){
            // Si nous avons une réponse
            if(xmlhttp.status == 200){
                // On récupère la réponse
                let response = JSON.parse(xmlhttp.response)

                // On récupère la latitude et la longitude
                let lat = response[0]['lat']
                let lon = response[0]['lon']

                // On écrit les valeurs dans le formulaire
                document.querySelector("#"+idLat).value= lat;
                document.querySelector("#"+idLon).value= lon;

                // On crée le marqueur
                pos = [lat, lon];
                addMarker(pos);
                // On centre la carte sur l'doctor_location_nameLocatione
                myMap.setView(pos, 16);
            }
        }
    }

    // On ouvre la requête
    xmlhttp.open('get', `https://nominatim.openstreetmap.org/search?q=${doctor_location_nameLocation}&format=json&addressdetails=1&limit=1&polygon_svg=1`)
    // On envoie la requête
    xmlhttp.send();
   
}

